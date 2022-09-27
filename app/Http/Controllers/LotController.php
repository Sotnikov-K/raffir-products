<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Lot;
use App\Models\Image;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\ImageIntervention;

class LotController extends Controller
{
    public function index(){
        $lots = Lot::all();
    }

    public function create(){
        return view('partials/admin-page/admin-lot-create/create');
    }

    public function store(Request $request){
        // dd($request);
        // dd($request->has('images'));

        //получаем в Дату поля с инпутов.
        $data = $request->validate([
            'type' => 'required',
            'lot_weight' => 'required',
            'lot_price' => 'required',
            'lot_origin' => 'required',
            'lot_status' => 'required',
            'lot_size_title' => 'required',
            'lot_count' => 'required',
            'lot_annotation' => 'required',    
        ]);
        
        $userId = auth()->id();
        $data['user_id'] = $userId;

        $currentId = DB::table('lots')->max('id') + 1;
        $setItemOrItems = ($data['lot_count'] > 1) ? 'S' : '';
        $data['slug'] = $data['type'] . '-id' . $currentId; 
      
        $new_lot = Lot::create($data);

        
        

        if($request->has('images')){
            $counter = 0;
            foreach($request->file('images') as $image){

                // $imageName = $data['type'].time().$new_lot['id'].'.'.$image->extension();
                
                $counter++;
                $imageName = $data['type'].'-'.$new_lot['id'].'-'.$counter.'.'.$image->extension();
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
                $microImage->save(resource_path('images\product_images\micro_images').$timeYm.('\\').$imageName, 80, 'jpg');

                //create thumbnail image 200x200
                $thumbnailImage = ImageIntervention::make(resource_path('images\product_images\original_images').$timeYm.('\\').$imageName);
                $thumbnailImage->fit(200, 200);
                if (!file_exists(resource_path('images\product_images\thumbnail_images').$timeYm.('\\'))) {
                    mkdir(resource_path('images\product_images\thumbnail_images').$timeYm.('\\'), 775, true);
                }
                $thumbnailImage->save(resource_path('images\product_images\thumbnail_images').$timeYm.('\\').$imageName, 80, 'jpg');

                //create main image 500
                $mainImage = ImageIntervention::make(resource_path('images\product_images\original_images').$timeYm.('\\').$imageName);
                $mainImage->resize(500, 500, function($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                if (!file_exists(resource_path('images\product_images\main_images').$timeYm.('\\'))) {
                    mkdir(resource_path('images\product_images\main_images').$timeYm.('\\'), 775, true);
                }
                $mainImage->save(resource_path('images\product_images\main_images').$timeYm.('\\').$imageName, 100, 'jpg');

                //create large image 1500
                $largeImage = ImageIntervention::make(resource_path('images\product_images\original_images').$timeYm.('\\').$imageName);
                $largeImage->resize(1500, 1500, function($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                if (!file_exists(resource_path('images\product_images\large_images').$timeYm.('\\'))) {
                    mkdir(resource_path('images\product_images\large_images').$timeYm.('\\'), 775, true);
                }
                $largeImage->save(resource_path('images\product_images\large_images').$timeYm.('\\').$imageName, 100, 'jpg');



                Image::create([
                    'lot_id' => $new_lot->id,
                    'image' => $imageName,
                ]);
            }
        }

        $input = $request->request->all();
        // dd($input);
        $insert = array();

            foreach($input['animal_type'] as $key => $animal_type) {
                $insert[$key]['animal_type'] = $animal_type;
            }

            foreach($input['item_type'] as $key => $item_type) {
                $insert[$key]['item_type'] = $item_type;
            }

            foreach($input['item_grade'] as $key => $item_grade) {
                $insert[$key]['item_grade'] = $item_grade;
            }

            foreach($input['item_rarity'] as $key => $item_rarity) {
                $insert[$key]['item_rarity'] = $item_rarity;
            }
            
            foreach($input['item_color'] as $key => $item_color) {
                $insert[$key]['item_color'] = $item_color;
            }

            foreach($input['item_condition'] as $key => $item_condition) {
                $insert[$key]['item_condition'] = $item_condition;
            }

            foreach($input['item_weight'] as $key => $item_weight) {
                $insert[$key]['item_weight'] = $item_weight;
            }

            foreach($input['lot_id'] as $key => $lot_id) {
                $insert[$key]['lot_id'] = $new_lot->id;
            }

        Item::insert($insert);


        return redirect()->route('user.private');;
    }

}
