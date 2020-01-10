<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perubahan extends Model
{
  protected $table = "tbl_perubahan";
  protected $primaryKey = "id_perubahan";
  protected $guarded = ["id_perubahan"];
  protected $fillable = [''];
}
