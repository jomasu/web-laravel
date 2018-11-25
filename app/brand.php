<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    public function product() {

        return $this->belongTo(Product::class, 'brand_id');
    }
}
