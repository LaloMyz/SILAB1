<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class articulo_menor extends Model
{
    protected $table ='articulo_menors';
    
    protected $fillable= ['nombre'];

    public $timestamps = false;

} 

