<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{

    use HasFactory;

    public function works()
    {

        return $this->hasMany(\App\Models\Work::class);
    }
}
