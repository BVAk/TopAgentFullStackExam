<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{
    //
    function index()
    {
        $all=DB::table('items')->paginate(15);
        return view('item',['all' => $all]);
     
    }

    public function store(Request $request)
    {
 $all=DB::table('items')->paginate(15);
       
       $item_name = $request->input('item_name');

    DB::table('items')->insert(['item_name'=> $item_name]);
        return redirect()->action('ItemController@index',['all' => $all]);

       
   }

}
