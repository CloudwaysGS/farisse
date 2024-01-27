<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repas extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'categorie', 'description', 'prix', 'image'];

}
