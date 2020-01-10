<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\HakAksesOrganik;
use App\Models\HakAksesNonOrganik;
use App\Models\Perubahan;
use App\Models\Layanan;
use App\Models\Authentic;
use Exception;

class AdminController extends Controller
{
    public function dashboardAdmin()
   {
		return view('admin.dashboard-adm');
   }
  	public function indexOrg()
   {
   		$HakAksesOrganik = HakAksesOrganik::all();
   		return view('admin.index-org', ['HakAksesOrganik' => $HakAksesOrganik]);
   }
 	public function indexNon()
   {
   		$HakAksesNonOrganik = HakAksesNonOrganik::all();
   		return view('admin.index-non', ['HakAksesNonOrganik' => $HakAksesNonOrganik]);
   }  
   public function indexPerb()
   {
   		$Perubahan = Perubahan::all();
   		return view('admin.index-perb', ['Perubahan' => $Perubahan]);
   }
   public function deleteAdminOrg($id)
	{
    	// menghapus data pegawai berdasarkan id yang dipilih
    	DB::table('hak_akses_organik')->where('id_hak_akses',$id)->delete();
        
    	// alihkan halaman ke halaman pegawai
    	return redirect('/admin-org');
	}
}
