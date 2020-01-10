<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisLayanan extends Model
{
  protected $table = "tbl_layanan_ict";
  protected $primaryKey = "id_layanan";
  protected $guarded = ["id_layanan"];
  protected $fillable = [''];
}
