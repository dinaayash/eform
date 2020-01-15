<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Layanan;
use App\Models\Authentic;
use App\Models\HakAksesNonOrganik;
use Exception;
use Auth;


class HANonorganikController extends Controller
{
    public function dataNonorganik()
    {
        $HakAksesNonOrganik = HakAksesNonOrganik::where('nama_pemohon', Auth::user()->username)->get();
        // dd($HakAksesNonOrganik);
        // dd($HakAksesNonOrganik[0]->tbl_layanan_ict->nama_layanan);
        // $hanonorganik = hanonorganik::where('id_hak_akses_NO', $value->id_hak_akses_NO)->first();
        return view('non organik.nonorganik', ['HakAksesNonOrganik' => $HakAksesNonOrganik]);
    } 
    public function createNonOrganik(Request $request){
        // WES KOPAS SALAH SISAN
        $newNOrganik = new HakAksesNonOrganik;
        $newNOrganik->no_hak_akses_NO = 'FHA/NO/'.random_int(1, 9999).'XII/'.Date('Y');
        $newNOrganik->tanggal_input = date('Y-m-d');
        $newNOrganik->nama_pemohon = $request->pemohon;
        $newNOrganik->jabatan_pemohon = $request->jabatan_p;
        $newNOrganik->satuan_kerja = $request->sat_kerja;
        $newNOrganik->nama_atasan = $request->nama_atasan;
        // $newNOrganik->email_atasan = $request->emailatasan;
        $newNOrganik->jabatan_atasan = $request->jabatan_a;
        
        $newNOrganik->alasan = $request->alasan;
        // $newNOrganik->status_permohonan = 'On Progress';
        

        // $newDetailNOrganik = new hanonorganik;
        // $value->layanan = $detail->deskripsi1;
        // $newDetailNOrganik->id_hak_akses_NO = $newNOrganik->id_hak_akses_NO;
        $newNOrganik->masa_berlaku = $request->masaberlaku;
        // $newDetailNOrganik->hash_code = Hash::make('rahasia');

        // foreach($hanonorganik as $hanon){
        //     $detail = hanonorganik::where('id_hak_akses_NO', $value->id_hak_akses_NO)->first();
        //     $value->layanan = $detail->deskripsi1;
        //     }
        
        if ($request->layanan == 'vpn'){
            $newNOrganik->id_layanan = '2';
            

        } elseif ($request->layanan == 'com') {
            $newNOrganik->id_layanan = '7';
            $newNOrganik->deskripsi1 = $request->jeniscommunication;
        }
        elseif ($request->layanan == 'fileshare') {
            $newNOrganik->id_layanan = '3';
            $newNOrganik->deskripsi1 = $request->namefileshare;
        }
        elseif ($request->layanan == 'oracle') {
            $newNOrganik->id_layanan = '4';
            
            $newNOrganik->deskripsi1 = $request->idaplikasi;
            $newNOrganik->deskripsi2 = $request->responsibiliti;
            $newNOrganik->deskripsi3 = $request->perintah;
        }
        elseif ($request->layanan == 'nonoracle') {
            $newNOrganik->id_layanan = '11';
            
            $newNOrganik->deskripsi1 = $request->idaplikasi2;
        }
        // $newDetailNOrganik->save();
        $newNOrganik->save();

        // $newNOrganik__->hash_code = $request->hash_code;
        // $newNOrganik->hash_code = Hash::make('rahasia');
        
        //$newNOrganik->keterangan = 'Menunggu Approval Atasan New'; //keterangan ora enek ning table non organik
        
  
        // if (!$newNOrganik->save()) {
        //     return back();
        // }  

        return redirect('/non-organik')->with('alert-success','Data berhasil diTAMBAH!');
    }

    public function pesanNon()
    {
        return view('non organik.pesannon');
    } 
    public function createNon()
    {
        return view('non organik.tambahnon');
    } 
     public function editNonOrganik($id, Request $request)
    { 
        $dataAtasan = Authentic::where('status', 'enabled')->orderBy('username')->get();
        $editnon = HakAksesNonOrganik::where('id_hak_akses_NO',$id)->get();
        return view('non organik.editnon', ['dataAtasan' => $dataAtasan, 'editnon' => $editnon]);
        // $user = $request->user();
        // $dataAtasan = Authentic::where('status', 'enabled')->orderBy('username')->get();
        // $editnon = DB::table('hak_akses_non')->where('id_hak_akses_NO',$id)->get();

        // return view('non organik.editnon', ['user' => $user, 'dataAtasan' => $dataAtasan, 'editnon' => $editnon]);
    }

     public function updateNonOrganik(Request $request)
    {
        $query = DB::table('hak_akses_non')->where('id_hak_akses_NO', $request->id)->update([
        'nama_pemohon' => $request->pemohon,
        'jabatan_pemohon' => $request->jabatan_p,
        'satuan_kerja' => $request->sat_kerja,
        'nama_atasan' => $request->nama_atasan,
        'jabatan_atasan' => $request->jabatan_a,
        'id_layanan' => $request->layanan,
        'masa_berlaku' => $request->masaberlaku,
        'alasan' => $request->alasan
    ]);

    // DB::table('hak_akses_non')->where('id_hak_akses_NO',$request->id)->update([
    //     'nipg' => $request->nipg,
    //     'nama_pemohon' => $request->pemohon,
    //     'jabatan_pemohon' => $request->jabatan_p,
    //     'nama_atasan' => $request->nama_atasan,
    //     'jabatan_atasan' => $request->jabatan_a
    // ]);
    // alihkan halaman ke halaman pegawai
    return redirect('/non-organik');
}
public function deleteNonOrganik($id)
{
    // menghapus data pegawai berdasarkan id yang dipilih
    DB::table('hak_akses_non')->where('id_hak_akses_NO',$id)->delete();
        
    // alihkan halaman ke halaman pegawai
    return redirect('/non-organik');
}

}

