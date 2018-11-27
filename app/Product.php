<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];
    
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }

}
