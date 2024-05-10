<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{

    use HasFactory;

    protected $fillable = [

        "categorie_name",

    ] ;

    public function works()
    {

        return $this->hasMany(Work::class) ;

    }
}
