<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    public function category(){
        return $this->hasOne('App\Category');
    }
    protected $fillable=['name'];
}
