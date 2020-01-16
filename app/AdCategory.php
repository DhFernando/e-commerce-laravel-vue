<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdCategory extends Model
{
    public function adSubCategory(){
        return $this->hasMany(AdSubCategory::class);
    }
    public function user(){
        return $this->belongsTo(User::class);

    }
}
