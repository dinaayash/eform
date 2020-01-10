<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Preventive extends Model
{
  protected $table = "preventive";
  protected $primaryKey = "id_preventive";
  protected $guarded = ["id_preventive"];
  protected $fillable = [''];
}
