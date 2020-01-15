<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perubahan extends Model
{
  protected $table = "tbl_perubahan";
  protected $primaryKey ="id_perubahan";  
  // public function TipePerubahan()
  //   {
  //   	return $this->hasOne('App\Models\TipePerubahan', 'id_tipe', 'id_tipe');
  //   }
    protected $attributes = [
  	'status_permohonan' => 'On Progress',
  ];
}
