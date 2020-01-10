<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Layanan extends Model
{
    protected $table = "tbl_layanan_ict";
    protected $primaryKey = "id_layanan";
 
    public function HakAksesOrganik()
    {
    	return $this->hasMany('App\Models\HakAksesOrganik', 'id_hak_akses');
    }
     public function HakAksesNonOrganik()
    {
    	return $this->hasMany('App\Models\HakAksesNonOrganik', 'id_hak_akses_NO');
    }
}