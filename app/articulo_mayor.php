<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class articulo_mayor extends Model
{
    //
    protected $table ='articulo_mayors';
    public $timestamps = false;
    protected $fillable= ['nombre'];



}
