<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfilAdm extends Model
{
  protected $table = "users";
  protected $primaryKey = "id";
  protected $guarded = ["id"];
  protected $fillable = [''];
}

