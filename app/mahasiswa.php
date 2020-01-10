<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
  protected $table = 'mahasiswa';
  protected $guarded = ["id"];
  //protected $fillable = ['nama', 'nrp', 'email', 'jurusan'];
}
