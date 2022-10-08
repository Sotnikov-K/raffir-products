<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

use App\Models\Image;
use Illuminate\Support\Facades\DB;
use File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\ImageIntervention;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages/dashboard-page/create-product/create-product-composite');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($data);
        // dd($request->has('images'));

        //получаем в Дату поля с инпутов.
        $data = $request->validate([
            'product_index' => 'required',
            'product_category' => 'required',
            'product_name' => 'required',
            'product_shape' => 'required',
            'product_pattern' => 'required',
            'product_color' => 'required',
            'product_status' => 'required',
            
            'product_length' => 'required',
            'product_width' => 'required',
            'product_height' => 'required', 

            'product_weight' => 'required',
            'product_price' => 'required',
            'product_description' => 'required',
        ]);
        
        $currentId = 10000 + DB::table('products')->max('id');

        if($data['product_shape'] == 'фрагмент')
        {
            if($data['product_name'] == 'бивень мамонта') {
                $data['slug'] ='id' . '-' . $currentId . '_' . 'mammoth-tusk-fragment' . '_' . 'weight' . '-' . $data['product_weight']; 
            } else $data['slug'] = 'id' . '-' . $currentId . '_' . 'mammoth-molar-fragment' . '_' . 'weight' . '-' . $data['product_weight'];       
        } 
        elseif($data['product_shape'] == 'блок' && $data['product_category'] == 'композит' ) {
            $data['slug'] = 'id' . '-' . $data['product_index'] . '_' . 'composite-block';
        }
        elseif($data['product_shape'] == 'блок' && $data['product_category'] == 'брусок' ) {
            $data['slug'] = 'id' . '-' . $data['product_index'] . '_' . 'stabilized-wood-block';
        }
        // dd($data['slug']);
      

      

        $new_lot = Product::create($data);

        
        // dd($request->has('images'));

        if($request->has('images')){
            $counter = 0;
            foreach($request->file('images') as $image){

                // $imageName = $data['type'].time().$new_lot['id'].'.'.$image->extension();
                
                $counter++;

                $imageName = $data['product_category'].'-'.$new_lot['id'].'-'.$counter.'.'.$image->extension();
                // dd($imageName);

                // $image->move(public_path('product_images'), $imageName);

                //create string of Year and month curent date
                $timeYm = ('\\') . date('Y-m');


                //create original size image
                $image->move(resource_path('images\product_images\original_images').$timeYm, $imageName);
               
                //create micro size image 100x100
                $microImage = ImageIntervention::make(resource_path('images\product_images\original_images').$timeYm.('\\').$imageName);
                $microImage->fit(100, 100);
                if (!file_exists(resource_path('images\product_images\micro_images').$timeYm.('\\'))) {
                    mkdir(resource_path('images\product_images\micro_images').$timeYm.('\\'), 775, true);
                }
                $microImage->save(resource_path('images\product_images\micro_images').$timeYm.('\\').$imageName, 80, 'png');



                // create thumbnail image 250x250
                $thumbnailImage = ImageIntervention::make(resource_path('images\product_images\original_images').$timeYm.('\\').$imageName);
                $thumbnailImage->fit(250, 250);
                if (!file_exists(resource_path('images\product_images\thumbnail_images').$timeYm.('\\'))) {
                    mkdir(resource_path('images\product_images\thumbnail_images').$timeYm.('\\'), 775, true);
                }
                $thumbnailImage->save(resource_path('images\product_images\thumbnail_images').$timeYm.('\\').$imageName, 80, 'png');



                // create main image 500x500
                $mainImage = ImageIntervention::make(resource_path('images\product_images\original_images').$timeYm.('\\').$imageName);
                $mainImage->resize(500, 500, function($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                if (!file_exists(resource_path('images\product_images\main_images').$timeYm.('\\'))) {
                    mkdir(resource_path('images\product_images\main_images').$timeYm.('\\'), 775, true);
                }
                $mainImage->save(resource_path('images\product_images\main_images').$timeYm.('\\').$imageName, 100, 'png');



                // create large image 1000x1000
                $largeImage = ImageIntervention::make(resource_path('images\product_images\original_images').$timeYm.('\\').$imageName);
                $largeImage->resize(1000, 1000, function($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                if (!file_exists(resource_path('images\product_images\large_images').$timeYm.('\\'))) {
                    mkdir(resource_path('images\product_images\large_images').$timeYm.('\\'), 775, true);
                }
                $largeImage->save(resource_path('images\product_images\large_images').$timeYm.('\\').$imageName, 100, 'png');



                Image::create([
                    'product_id' => $new_lot->id,
                    'image' => $imageName,
                ]);
            }
        }

        return redirect(route('user.dashboard'));
    }


    


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
