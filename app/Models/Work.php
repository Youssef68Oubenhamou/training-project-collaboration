<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $fillable = [

        "brand_name" ,
        "path" ,
        "categorie_id"

    ] ;

    public function categorie() {

        return $this->belongsTo(\App\Models\Categorie::class) ;

    }

}
