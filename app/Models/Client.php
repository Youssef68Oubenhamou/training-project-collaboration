<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    use HasFactory;

    protected $upload = "/client_uploads/" ; 

    protected $fillable = [

        "client_name" ,
        "client_logo"

    ] ;

    public function getClientLogoAttribute($photo) {

        return $this->upload . $photo ;

    }

}
