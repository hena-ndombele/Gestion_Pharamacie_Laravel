<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categorie;

class Entree extends Model
{
    use HasFactory;
    protected $fillable=[
        'medicament',
        'quantite',
        'prix_unitaire',
        'prix_total',
        'date_entree',
        'expiration',
        'categorie_id'
    ];

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }
}
