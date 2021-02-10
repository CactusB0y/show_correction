<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $store = new Ingredient;
        $store->nom = $request->nom;
        $store->quantite = $request->quantite;
        $store->src = $request->src;
        $store->save();
        return redirect()->back();
    }

    public function show($id)
    {
        $show = Ingredient::find($id);
        return view('show',compact('show'));
    }

    public function destroy($id)
    {
        $destroy = Ingredient::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}
