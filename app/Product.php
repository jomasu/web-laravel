<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   
    public function categorie() {

        return $this->hasOne(Categorie::class);
    }
}
