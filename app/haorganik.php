<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class haorganik extends Model
{
  protected $table = "hak_akses_organik";
  protected $primaryKey = "id_hak_akses";
  protected $guarded = ["id_hak_akses"];
}
