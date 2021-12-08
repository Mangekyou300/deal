<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habilidade extends Model
{
    protected $table = 'habilidades';

    protected $fillable = ['nome'];
}
