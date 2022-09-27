<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lot;
use App\Models\Image;
use Illuminate\Support\Facades\DB;
// use Illuminate\Contracts\View\View;

class PagesController extends Controller
{

    Public function home() {
        $lots = Lot::where('lot_status', 'standart')
               ->orderBy('created_at', 'desc')
               ->take(10)
               ->get();

        return view('home', compact('lots') );
    }

    Public function cultHeritage() {
        return view('cultural-heritage');
    }


    Public function database() {
        $lots = Lot::orderBy("id", "desc")->paginate(12);

        $lotsAll = Lot::all();
        $imagesAll = Image::all();
        return view('database', compact('lots', 'lotsAll', 'imagesAll'));
    }

    Public function databaseItem($slug) {
        $lot = Lot::where('slug', $slug)->first(); 
        $imagesFull = $lot->images;
        $imageArray = [];
        foreach($imagesFull as $image){
            $imageArray[] = $image->image;
        }
        $images = $imagesFull[0]->image;
        return view('databaseItem', compact('lot', 'images', 'imageArray'));
    }
 
}


