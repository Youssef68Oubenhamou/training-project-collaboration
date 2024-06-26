<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $img = "/uploads/" ;

    protected $fillable = [
        "categorie_id",
        "img",
        "brand_name",
        "brand_description"
    ];

    public function categorie()
    {

        return $this->belongsTo(Categorie::class);
    }

    public function getImgAttribute($photo) {

        return $this->img . $photo ;

    }

}
