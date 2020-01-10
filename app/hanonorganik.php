<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hanonorganik extends Model
{
  protected $table = "detail_hak_akses_nons";
  protected $primaryKey = "id_hak_akses_NO";
  protected $guarded = ["id_hak_akses_NO"];
  
}
