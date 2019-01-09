<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gamedetail extends Model
{
    protected $table = 'gamedetails';
    protected $fillable = [ 'table', 'round','playtime','description','user01','points01','user02','points02','user03','points03','user04','points04'];
}
