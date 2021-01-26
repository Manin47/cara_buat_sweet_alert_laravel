<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    //
    protected $primarykey = 'id';
    protected $fillable = ['id','nama'];
    protected $table = 'anggota';
}
