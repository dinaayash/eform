<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HakAksesOrganik extends Model
{
  protected $table = "hak_akses_organik";
  protected $primaryKey = "id_hak_akses";
  // protected $guarded = ["id_hak_akses"];
  // protected $fillable = [
  // 	''];
  public function tbl_layanan_ict()
    {
    	return $this->hasOne('App\Models\Layanan', 'id_layanan', 'id_layanan');
    }
    protected $attributes = [
  	'status_permohonan' => 'On Progress',
  ];
}
