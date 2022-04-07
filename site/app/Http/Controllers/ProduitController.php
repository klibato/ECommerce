<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;

class ProduitController extends Controller
{
    public function produit($id)
    {
        $product = Product::find($id);
        return view('produit',['product' => $product]);
    }
    public function addtocart(Request $request){
        $user = User::find(Auth()->user()->id);
        $user->products()->attach($request->id);
        return redirect('panier');
    }
    public function deletefromcart(Request $request){
        $user = User::find(Auth()->user()->id);
        $user->products()->detach($request->id);
        return redirect('panier');
    }
    public function add (Request $request)
    {
        $validate = $request -> validate([
            'nameproduct' => "required",
            'price' => "required|gt:0",
            'stock' => "required|gt:0",
            "description" => "required"

        ]);
        $name = $request->file('picture')->getClientOriginalName();
        $name = time()."_".$name;
        $request->file('picture')->storeAs(
            'public/pictures', $name
        );
        $validate["picture"]=$name;
        Product::create($validate);
        
        return redirect('catalogue');

    }

}




