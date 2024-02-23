<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tramite extends Model
{
    //
    protected $table ='tramites';
    
    protected $fillable= ['id'];

    public $timestamps = false;

}
