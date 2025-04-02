<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;

    protected $fillable = ['titre', 'description', 'date', 'auteur_id'];

    public function auteur()
    {
        return $this->belongsTo(Auteur::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Categorie::class);
    }
}
