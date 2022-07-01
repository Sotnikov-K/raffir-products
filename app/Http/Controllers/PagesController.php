<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class PagesController extends Controller
{
    Public function database() {
        $items = Item::all();
        return view('database', [
            'items' => $items,
        ]);
    }

    

    Public function databaseItem($id) {
        $item = Item::find($id); 
        return view('databaseItem', [
            'item' => $item,
        ]);
    }


}
