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

            'product_shape' => 'max:255',
            'product_pattern' => 'max:255',
            'product_color' => 'max:255',
            'product_status' => 'required',

            'product_length' => 'max:255',
            'product_width' => 'max:255',
            'product_height' => 'max:255',

            'product_weight' => 'max:255',
            'product_price' => 'max:255',
            'product_description' => 'max:255',



            'product_blade-model' => 'max:255',
            'product_blade-design' => 'max:255',
            'product_thickness' => 'max:255',
            'product_blade-hardness' => 'max:255',
            'product_blade-finish' => 'max:255',
            'product_steel-type' => 'max:255',
            'product_blade-style' => 'max:255',

        ]);

        $currentId = 10000 + DB::table('products')->max('id');

        if ($data['product_shape'] == 'фрагмент') {
            if ($data['product_name'] == 'бивень мамонта') {
                $data['slug'] = 'id' . '-' . $currentId . '_' . 'mammoth-tusk-fragment' . '_' . 'weight' . '-' . $data['product_weight'];
            } else $data['slug'] = 'id' . '-' . $currentId . '_' . 'mammoth-molar-fragment' . '_' . 'weight' . '-' . $data['product_weight'];
        } elseif ($data['product_shape'] == 'блок' && $data['product_category'] == 'композит') {
            $data['slug'] = 'id' . '-' . $data['product_index'] . '_' . 'composite-block';
        } elseif ($data['product_shape'] == 'блок' && $data['product_category'] == 'дерево') {
            $data['slug'] = 'id' . '-' . $data['product_index'] . '_' . 'stabilized-wood-block';
        } elseif ($data['product_shape'] == 'клинок' && $data['product_category'] == 'клинок') {
            $data['slug'] = 'id' . '-' . $data['product_index'] . '_' . 'scandinavian-blade';
        }
        // dd($data['slug']);




        $new_lot = Product::create($data);


        // dd($request->has('images'));

        if ($request->has('images')) {
            $counter = 0;
            foreach ($request->file('images') as $image) {

                // $imageName = $data['type'].time().$new_lot['id'].'.'.$image->extension();

                $counter++;

                $imageName = $data['product_category'] . '-' . $new_lot['id'] . '-' . $counter . '.' . $image->extension();
                // dd($imageName);

                // $image->move(public_path('product_images'), $imageName);

                //create string of Year and month curent date
                $timeYm = ('\\') . date('Y-m');


                //create original size image
                $image->move(resource_path('images\product_images\original_images') . $timeYm, $imageName);

                //create micro size image 100x100
                $microImage = ImageIntervention::make(resource_path('images\product_images\original_images') . $timeYm . ('\\') . $imageName);
                $microImage->fit(100, 100);
                if (!file_exists(resource_path('images\product_images\micro_images') . $timeYm . ('\\'))) {
                    mkdir(resource_path('images\product_images\micro_images') . $timeYm . ('\\'), 775, true);
                }
                $microImage->save(resource_path('images\product_images\micro_images') . $timeYm . ('\\') . $imageName, 80, 'png');



                // create thumbnail image 250x250
                $thumbnailImage = ImageIntervention::make(resource_path('images\product_images\original_images') . $timeYm . ('\\') . $imageName);
                $thumbnailImage->fit(250, 250);
                if (!file_exists(resource_path('images\product_images\thumbnail_images') . $timeYm . ('\\'))) {
                    mkdir(resource_path('images\product_images\thumbnail_images') . $timeYm . ('\\'), 775, true);
                }
                $thumbnailImage->save(resource_path('images\product_images\thumbnail_images') . $timeYm . ('\\') . $imageName, 80, 'png');


                // create main image 500x500
                $mainImage = ImageIntervention::make(resource_path('images\product_images\original_images') . $timeYm . ('\\') . $imageName);
                $mainImage->resize(500, 500, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                if (!file_exists(resource_path('images\product_images\main_images') . $timeYm . ('\\'))) {
                    mkdir(resource_path('images\product_images\main_images') . $timeYm . ('\\'), 775, true);
                }
                $mainImage->save(resource_path('images\product_images\main_images') . $timeYm . ('\\') . $imageName, 100, 'png');



                // create large image 1000x1000
                $largeImage = ImageIntervention::make(resource_path('images\product_images\original_images') . $timeYm . ('\\') . $imageName);
                $largeImage->resize(1000, 1000, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                if (!file_exists(resource_path('images\product_images\large_images') . $timeYm . ('\\'))) {
                    mkdir(resource_path('images\product_images\large_images') . $timeYm . ('\\'), 775, true);
                }
                $largeImage->save(resource_path('images\product_images\large_images') . $timeYm . ('\\') . $imageName, 100, 'png');



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

        $products = $product->get()->all();

        return view('pages/dashboard-page/edit-products/edit-products', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    // public function edit(Product $product)


    public function edit($id)
    {

        dd($id);

        $product = DB::table('products')->where('id', $id)->first();

        dd($product);

        return view('pages/dashboard-page/edit-products/edit-product', compact('product'));
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
