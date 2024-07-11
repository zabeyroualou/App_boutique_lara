<?php

namespace App\Http\Controllers;

use App\Models\Produits;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $produits = Produit::orderBy('id', 'DESC')->paginate(5);
        // return view('produits.list', compact('produits'))
        //     ->with('i', ($request->input('page', 1) -1) * 5);

        $produits = DB::table('select * from produits');
        return view('produits.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = DB::table('select * from categories');
        return view('produits.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Produits::create(
            $request->validate([
                'code' => 'required|unique:posts|max:255',
                'nom' => 'required|max:255',
                'quantite' => 'required',
                'prix' => 'require',
                'categorie' => 'require',
                'description' =>'require|max:255'
            ])
        );

        return redirect()->route('produits.index')->with('success', 'New product added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(produits $produits)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(produits $produits)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, produits $produits)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(produits $produits)
    {
        //
    }
}
