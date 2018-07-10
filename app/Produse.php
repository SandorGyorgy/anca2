<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produse extends Model
{
    protected $fillable = ['nume','descriere','pret','poza'];
}
