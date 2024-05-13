<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    
    use HasFactory;

    protected $fillable = [

        "address" ,
        "email" ,
        "mobile" ,
        "fix_1" ,
        "fix_2" ,
        "fix_3" ,
        "fax"

    ] ;

}
