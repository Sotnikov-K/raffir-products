<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Lot;
use App\Models\Image;

class LotController extends Controller
{
    public function index(){
        $lots = Lot::all();
    }

    public function create(){
        return view('create');
    }



    public function store(Request $request)
    {
        $data = $request->validate([
            'type' => 'required',
            'lot_weight' => 'required',
            'lot_price' => 'required',
        ]);
       

      


        $data = [
            ['type'=>'lot'],
            ['type'=>'lot'],
           
        ];
        dd($data);




        Lot::insert($data);
        // Lot::insert($data);


        // $new_item = Lot::create($data); 
        

        // if ($req->has('images')){
        //     foreach($req->file('images') as $image){
        //         $imageName = $data['lot_type']. '-image-'.time().rand(1,1000).'.'.$image->extension();
        //         $image->move(public_path('product_images'), $imageName);
        //         Image::create([
        //             'item_id'=>$new_item->id,
        //             'image'=>$imageName
        //         ]);
        //     }
        // }
        
        // return back()->with('success', 'Added');
        // return back();
    }

}
