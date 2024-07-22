<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Produit extends Model
{
    use HasFactory;

    public function findAll(){
        $produits = DB::table('produits')
            ->select('code' ,'nom', 'prix', 'quantite')
            ->get();
    }


    protected $fillable = [
        'code',
        'nom',
        'quantite',
        'prix',
        'description'
    ];



}
