<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pertanyaan extends Model
{
    protected $table = "questions";
    protected $fillable = ["judul","isi"];
}
