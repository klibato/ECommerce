<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PanierController extends Controller
{
    public function panier()
    {
        $products = DB::table('products')->get();
        $panier_item = DB::table('paniers')->get();
        $panier_item_sort = DB::table('paniers')->distinct()->get();
        return view('panier',['products' => $products,'panier_item' => $panier_item,'panier_item_sort' => $panier_item_sort]);
    }
}
