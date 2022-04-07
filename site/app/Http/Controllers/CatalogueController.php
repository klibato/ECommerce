<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatalogueController extends Controller
{
    public function catalogue()
    {
     $products = DB::table('products')->get();

     return view('catalogue' , ['products' => $products]);  
    }
}
