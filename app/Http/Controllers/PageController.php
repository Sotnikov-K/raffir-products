<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Image;

class PageController extends Controller{

    public function store(){
        return view('pages/store-page/store');
    }


    public function product($slug){
       
        $product = Product::where('slug', $slug)->first(); 
        $imagesFull = $product->images;
        $imageArray = [];
        foreach($imagesFull as $image){
            $imageArray[] = $image->image;
        }
        $images = $imagesFull[0]->image;
        
        return view('pages/product-page/product', compact('product', 'images', 'imageArray') );
    }

}