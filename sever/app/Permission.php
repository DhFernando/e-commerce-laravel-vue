<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $guarded = [];
    public function user(){
        return $this->hasMany(User::class);
    }
}
