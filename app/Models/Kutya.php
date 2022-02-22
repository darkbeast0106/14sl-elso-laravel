<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kutya extends Model
{
    use HasFactory;

    protected $table = "kutyak";

    protected $hidden = ['created_at', 'updated_at'];

    //protected $visible = ['id', 'nev', 'fajta'];

    protected $fillable = ['nev', 'eletkor', 'fajta', 'gazda_neve'];
}
