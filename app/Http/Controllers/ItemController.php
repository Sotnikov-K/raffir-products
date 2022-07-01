<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Image;

class ItemController extends Controller
{
    public function index(){
        $items = Item::all();
    }

    public function create(){
        return view('create');
    }



    public function store(Request $req)
    {
        $data = $req->validate([
            'lot_type' => 'required',
            'animal_type' => 'required',
            'animal_type_latin' => 'required',
            'lot_origin' => 'required',
            'lot_weight' => 'required',
            'lot_size_length',
            'lot_size_width',
            'lot_size_height',
            'lot_size_diameter',
        ]);


        $new_item = Item::create($data); 

        if ($req->has('images')){
            foreach($req->file('images') as $image){
                $imageName = $data['lot_type']. '-image-'.time().rand(1,1000).'.'.$image->extension();
                $image->move(public_path('product_images'), $imageName);
                Image::create([
                    'item_id'=>$new_item->id,
                    'image'=>$imageName
                ]);
            }
        }
        
        // return back()->with('success', 'Added');
        return back();
    }

}
