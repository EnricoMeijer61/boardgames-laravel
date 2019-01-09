<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class battle extends Model
{
    protected $table = 'battles';
    protected $fillable = [ 'winnaar', 'lost'];
}
