<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lot;

class PagesController extends Controller
{
    Public function database() {
        $lots = Lot::all();
        return view('database', [
            'lots' => $lots,
        ]);
    }

    

    Public function databaseItem($id) {
        $lot = Lot::find($id); 
        return view('databaseItem', [
            'lot' => $lot,
        ]);
    }


}
