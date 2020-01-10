<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HakAksesNonOrganik extends Model
{
  protected $table = "hak_akses_non";
  protected $primaryKey = "id_hak_akses_NO";
  // protected $guarded = ["id_hak_akses_NO"];
  // protected $fillable = [''];

  public function tbl_layanan_ict()
    {
    	return $this->hasOne('App\Models\Layanan', 'id_layanan', 'id_layanan');
    }

  protected $attributes = [
  	'status_permohonan' => 'On Progress',
  ];
}

