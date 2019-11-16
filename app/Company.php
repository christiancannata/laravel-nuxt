<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use SoftDeletes;

    protected $guarded = [];


    public function users()
    {
        return $this->belongsToMany('App\User','users_companies');
    }

    public function briefs()
    {
        return $this->hasMany('App\Brief');
    }


}
