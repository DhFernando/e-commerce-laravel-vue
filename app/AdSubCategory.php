<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdSubCategory extends Model
{
    protected $guarded = [];

    public function adCategory(){
        return $this->belongsTo(AdCategory::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
