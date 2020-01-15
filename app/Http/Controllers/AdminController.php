<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\HakAksesOrganik;
use App\Models\HakAksesNonOrganik;
use App\Models\Perubahan;
use App\Models\Layanan;
use App\Models\Authentic;
use App\Models\ProfilAdm;
use Auth;
use Exception;

class AdminController extends Controller
{
    public function dashboardAdmin()
   {
    // ORGANIK//
    $Organik = DB::table('hak_akses_organik')
    ->select(DB::raw('count(id_layanan) as total'))
    
    ->first();

    if ($Organik->total == ''){
      $jumlahOrganik = 0;
    }else{
      $jumlahOrganik = $Organik->total;
    }
    // NON ORGANIK//
    $NonOrganik = DB::table('hak_akses_non')
    ->select(DB::raw('count(id_layanan) as total'))
    
    ->first();

    if ($NonOrganik->total == ''){
      $jumlahNonOrganik = 0;
    }else{
      $jumlahNonOrganik = $NonOrganik->total;
    }
    // PREVENTIVE
    $Preventive = DB::table('preventive')
    ->select(DB::raw('count(id_preventive) as total'))
    
    ->first();

    if ($Preventive->total == ''){
      $jumlahPreventive = 0;
    }else{
      $jumlahPreventive = $Preventive->total;
    }
    // PERUBAHAN//
    $Perubahan = DB::table('tbl_perubahan')
    ->select(DB::raw('count(id_perubahan) as total'))
    
    ->first();

    if ($Perubahan->total == ''){
      $jumlahPerubahan = 0;
    }else{
      $jumlahPerubahan = $Perubahan->total;
    }

    // OFFICE//
    $Office = DB::table('hak_akses_organik')
    ->select(DB::raw('count(id_layanan) as total'))
    ->where('id_layanan', '1')
    //->where('nipg', session('user')->nipg)-> UNTUK DI USER
    ->first();

    if ($Office->total == '') {
      $jumlahOffice = 0;
    }else{
      $jumlahOffice = $Office->total;
    }

    $Office2 = DB::table('hak_akses_non')
    ->select(DB::raw('count(id_layanan) as total'))
    ->where('id_layanan', '1')
    ->first();

    if ($Office2->total == '') {
      $jumlahOffice2 = 0;
    }else{
      $jumlahOffice2 = $Office2->total;
    }
    //dd($jumlahOffice);
    $totalOffice = $jumlahOffice + $jumlahOffice2;

    // VPN //
    $VPN = DB::table('hak_akses_organik')
    ->select(DB::raw('count(id_layanan)as total'))
    ->where('id_layanan', '2')
    ->first();

    if($VPN->total == ''){
      $jumlahVPN = 0;
    }else{
      $jumlahVPN = $VPN->total;
    }

    $VPN2 = DB::table('hak_akses_non')
    ->select(DB::raw('count(id_layanan)as total'))
    ->where('id_layanan', '2')
    ->first();

    if($VPN2->total == ''){
      $jumlahVPN2 = 0;
    }else{
      $jumlahVPN2 = $VPN2->total;
    }

    $totalVPN = $jumlahVPN + $jumlahVPN2;

    // FILESHARE//
    $Fileshare = DB::table('hak_akses_organik')
    ->select(DB::raw('count(id_layanan) as total'))
    ->where('id_layanan', '3')
    ->first();

    if ($Fileshare->total == '') {
      $jumlahFileshare = 0;
    }else{
      $jumlahFileshare = $Fileshare->total;
    }

    $Fileshare2 = DB::table('hak_akses_non')
    ->select(DB::raw('count(id_layanan) as total'))
    ->where('id_layanan', '3')
    ->first();

    if ($Fileshare2->total == '') {
      $jumlahFileshare2 = 0;
    }else{
      $jumlahFileshare2 = $Fileshare2->total;
    }

    $totalFileshare = $jumlahFileshare + $jumlahFileshare2;

    // ORACLE//
    $Oracle = DB::table('hak_akses_organik')
    ->select(DB::raw('count(id_layanan) as total'))
    ->where('id_layanan', '4')
    ->first();

    if ($Oracle->total == '') {
      $jumlahOracle = 0;
    }else{
      $jumlahOracle = $Oracle->total;
    }

    $Oracle2 = DB::table('hak_akses_non')
    ->select(DB::raw('count(id_layanan) as total'))
    ->where('id_layanan', '4')
    ->first();

    if ($Oracle2->total == '') {
      $jumlahOracle2 = 0;
    }else{
      $jumlahOracle2 = $Oracle2->total;
    }

    $totalOracle = $jumlahOracle + $jumlahOracle2;

    // NON ORACLE//
    $NonOracle = DB::table('hak_akses_organik')
    ->select(DB::raw('count(id_layanan) as total'))
    ->where('id_layanan', '11')
    ->first();

    if ($NonOracle->total == '') {
      $jumlahNonOracle = 0;
    }else{
      $jumlahNonOracle = $NonOracle->total;
    }

    $NonOracle2 = DB::table('hak_akses_non')
    ->select(DB::raw('count(id_layanan) as total'))
    ->where('id_layanan', '11')
    ->first();

    if ($NonOracle2->total == '') {
      $jumlahNonOracle2 = 0;
    }else{
      $jumlahNonOracle2 = $NonOracle2->total;
    }

    $totalNonOracle = $jumlahNonOracle + $jumlahNonOracle2;

    // NEW ACCOUNT (O)
    $NewAcc_O = DB::table('hak_akses_organik')
    ->select(DB::raw('count(id_layanan)as total'))
    ->where('id_layanan', '5')
    ->first();

    if($NewAcc_O->total == ''){
      $jumlahNewAcc_O = 0;
    }else{
      $jumlahNewAcc_O = $NewAcc_O->total;
    }

    $NewAcc_O2 = DB::table('hak_akses_non')
    ->select(DB::raw('count(id_layanan)as total'))
    ->where('id_layanan', '5')
    ->first();

    if($NewAcc_O2->total == ''){
      $jumlahNewAcc_O2 = 0;
    }else{
      $jumlahNewAcc_O2 = $NewAcc_O2->total;
    }

    $totalNewAcc_O = $jumlahNewAcc_O + $jumlahNewAcc_O2;

    // NEW ACCOUNT (NO)//
    $NewAcc_NO = DB::table('hak_akses_organik')
    ->select(DB::raw('count(id_layanan)as total'))
    ->where('id_layanan', '6')
    ->first();

    if($NewAcc_NO->total == ''){
      $jumlahNewAcc_NO = 0;
    }else{
      $jumlahNewAcc_NO = $NewAcc_NO->total;
    }

    $NewAcc_NO2 = DB::table('hak_akses_non')
    ->select(DB::raw('count(id_layanan)as total'))
    ->where('id_layanan', '6')
    ->first();

    if($NewAcc_NO2->total == ''){
      $jumlahNewAcc_NO2 = 0;
    }else{
      $jumlahNewAcc_NO2 = $NewAcc_NO2->total;
    }

    $totalNewAcc_NO = $jumlahNewAcc_NO + $jumlahNewAcc_NO2;

    // COMMUNICATION//
    $Communication = DB::table('hak_akses_organik')
    ->select(DB::raw('count(id_layanan) as total'))
    ->where('id_layanan', '7')
    ->first();

    if ($Communication->total == '') {
      $jumlahCommunication = 0;
    }else{
      $jumlahCommunication = $Communication->total;
    }

    $Communication2 = DB::table('hak_akses_non')
    ->select(DB::raw('count(id_layanan) as total'))
    ->where('id_layanan', '7')
    ->first();

    if ($Communication2->total == '') {
      $jumlahCommunication2 = 0;
    }else{
      $jumlahCommunication2 = $Communication2->total;
    }

    $totalCommunication = $jumlahCommunication + $jumlahCommunication2;

    // MAIL GROUP//
    $Mailgroup = DB::table('hak_akses_organik')
    ->select(DB::raw('count(id_layanan) as total'))
    ->where('id_layanan', '8')
    ->first();

    if ($Mailgroup->total == '') {
      $jumlahMailgroup = 0;
    }else{
      $jumlahMailgroup = $Mailgroup->total;
    }

    $Mailgroup2 = DB::table('hak_akses_non')
    ->select(DB::raw('count(id_layanan) as total'))
    ->where('id_layanan', '8')
    ->first();

    if ($Mailgroup2->total == '') {
      $jumlahMailgroup2 = 0;
    }else{
      $jumlahMailgroup2 = $Mailgroup2->total;
    }

    $totalCommunication = $jumlahCommunication + $jumlahCommunication2;

    // EXTEND ACCOUNT (NO)
    $ExAcc_NO = DB::table('hak_akses_organik')
    ->select(DB::raw('count(id_layanan)as total'))
    ->where('id_layanan', '10')
    ->first();

    if($ExAcc_NO->total == ''){
      $jumlahExAcc_NO = 0;
    }else{
      $jumlahExAcc_NO = $ExAcc_NO->total;
    }

    $ExAcc_NO2 = DB::table('hak_akses_non')
    ->select(DB::raw('count(id_layanan)as total'))
    ->where('id_layanan', '10')
    ->first();

    if($ExAcc_NO2->total == ''){
      $jumlahExAcc_NO2 = 0;
    }else{
      $jumlahExAcc_NO2 = $ExAcc_NO2->total;
    }

    $totalExAcc_NO = $jumlahExAcc_NO + $jumlahExAcc_NO2;

     // VIEW//
		return view('admin.dashboard-adm')
    ->with([
      'Office' => $jumlahOffice,
      'Fileshare' => $totalFileshare,
      'VPN' => $totalVPN,
      'Oracle' => $totalOracle,
      'NonOracle' => $totalNonOracle  ,
      'NewAcoountO' => $totalNewAcc_O,
      'NewAcoountNO' => $totalNewAcc_NO,
      'Communication' => $totalCommunication,
      'Mailgroup' => $totalCommunication,
      'ExtendAcc' => $totalExAcc_NO,
      'jumlahOrganik' => $jumlahOrganik,
      'jumlahNonOrganik' => $jumlahNonOrganik,
      'jumlahPreventive' => $jumlahPreventive,
      'jumlahPerubahan' => $jumlahPerubahan,
    ]);
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

   public function createNon(Request $request)
   {
      $AdminNon = new HakAksesNonOrganik;
      $AdminNon->done_by = $request->pic;
      $AdminNon->save();
      return redirect('/admin-non');
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

  public function AppvOrg($id)
  {
      $HakAksesOrganik = HakAksesOrganik::where('id_hak_akses', $id)->first();
      $HakAksesOrganik->status_permohonan = "Sudah Diterima";
      $HakAksesOrganik->save();
      return back();
  }

  public function DecOrg($id)
  {
      $HakAksesOrganik = HakAksesOrganik::where('id_hak_akses', $id)->first();
      $HakAksesOrganik->status_permohonan = "Sudah Ditolak";
      $HakAksesOrganik->save();
      return back();
  }

   public function AppvNon($id)
  {
      $HakAksesNonOrganik = HakAksesNonOrganik::where('id_hak_akses_NO', $id)->first();
      $HakAksesNonOrganik->status_permohonan = "Sudah Diterima";
      $HakAksesNonOrganik->save();
      return back();
  }

  public function DecNon($id)
  {
      $HakAksesNonOrganik = HakAksesNonOrganik::where('id_hak_akses_NO', $id)->first();
      $HakAksesNonOrganik->status_permohonan = "Sudah Ditolak";
      $HakAksesNonOrganik->save();
      return back();
  }

  public function profilAdmin()
   {
    // $ProfilAdm = ProfilAdm::where('id', Auth::user()->username)->get();
    return view('admin.index-profil');
   }

   public function detailAdmin()
    // {
    //     return view('admin.index-detail');
    // }
    { 
        // $dataAtasan = Authentic::where('status', 'enabled')->orderBy('username')->get();
        // mengambil data pegawai berdasarkan id yang dipilih
        // $editadm = ProfilAdm::where('id',$id)->first();
         // passing data pegawai yang didapat ke view edit.blade.php
        return view('admin.index-detail');
    }

   public function updateAdmin(Request $request)
{
    $query = DB::table('users')->where('id', $request->id)->update([
        'email' => $request->email,
        'name' => $request->nama,
        'jabatan' => $request->jabatan,
        'satuan_kerja' => $request->divisi,
        'perusahaan' => $request->perusahaan
    ]);

    // alihkan halaman ke halaman profil
   return redirect('/admin-profil');
} 
}
