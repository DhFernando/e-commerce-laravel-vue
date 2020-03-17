<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertisements extends Model
{
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function AdCategory(){
        return $this->belongsTo(AdCategory::class);
    }

    public function scopeGetAds($query){

    }
}

