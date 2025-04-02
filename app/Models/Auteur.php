<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Auteur extends Model
{
    use HasFactory;

    protected $fillable = ['titre', 'nom', 'specialite'];

    public function publications()
    {
        return $this->hasMany(Publication::class);
    }
}
