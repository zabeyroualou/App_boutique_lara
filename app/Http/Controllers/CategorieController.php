<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $catgeories = DB::select('select * from categories');
        return view('Categories.divers');
    }

    public function checkCat(){
        $products = DB::select('select * from produits where categorie_id = ?', [1]);
        return view('produits.index', compact('products'));
    }

    public function checkCat2(){
        $products = DB::select('select * from produits where categorie_id = ?', [2]);
        return view('produits.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Categories $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categories $categories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categories $categories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categories $categories)
    {
        //
    }
}
