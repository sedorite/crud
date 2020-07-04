<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class answer extends Model
{
    protected $table = "answers";
    protected $fillable = ["id_pertanyaan","isi"];
}
