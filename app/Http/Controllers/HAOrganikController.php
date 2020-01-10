<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\HakAksesOrganik;
use App\Models\Layanan;
use App\Models\Authentic;
use Exception;
use Auth;

class HAOrganikController extends Controller
{
    public function dataMahasiswa()
    {
        
    	$HakAksesOrganik = HakAksesOrganik::all();
        // dd($HakAksesOrganik[0]->tbl_layanan_ict);
    	return view('organik.organik', ['HakAksesOrganik' => $HakAksesOrganik]); 
    }
    public function pesanorganik()
    {
        return view('organik.pesan');
    }

    public function createOrganik(Request $request){



    	$newOrganik = new HakAksesOrganik;
    	$newOrganik->no_hak_akses = 'FHA/O/'.random_int(1, 9999).'XII/'.date('Y');
    	$newOrganik->Tanggal_input = date('Y-m-d');
    	$newOrganik->nipg = $request->nipg;
        $newOrganik->nama_pemohon = $request->pemohon;
        $newOrganik->jabatan_pemohon = $request->jabatan_p;
        // $newOrganik->sat_kerja = $request->sat_kerja;

    	$newOrganik->nama_atasan = $request->nama_atasan;
    	$newOrganik->jabatan_atasan = $request->jabatan_a;
    	$newOrganik->alasan = $request->alasan;
    	// $newOrganik->done_by =  null;
    	// $newOrganik->status_permohonan = 'On Progress';
        // $newOrganik->masa_berlaku = $request->masaberlaku;
    	// $newOrganik->keterangan = 'Menunggu Approval Atasan';

    	if ($request->layanan == 'vpn'){
    		$newOrganik->id_layanan = '2';

    	} elseif ($request->layanan == 'fileshare') {
    		$newOrganik->id_layanan = '3';
            $newOrganik->deskripsi1 = $request->namefileshare;
    	}
    	elseif ($request->layanan == 'email') { 
    		$newOrganik->id_layanan = '8';
            $newOrganik->deskripsi1 = $request->emailgroup;
            $newOrganik->deskripsi2 = $request->member;
    	}
    	elseif ($request->layanan == 'newaccount') {
    		$newOrganik->id_layanan = '5';
            $newOrganik->deskripsi1 = $request->keteranganuserbaru;
            $newOrganik->deskripsi2 = $request->namajabatan;
    	}
    	elseif ($request->layanan == 'newaccountno') {
    		$newOrganik->id_layanan = '6';
            $newOrganik->deskripsi1 = $request->keteranganuserbaru2;
            $newOrganik->deskripsi2 = $request->namajabatan2;
            $newOrganik->deskripsi3 = $request->masaberlaku;
    	}
        elseif ($request->layanan == 'perpanjang') {
            $newOrganik->id_layanan = '10';
            $newOrganik->deskripsi1 = $request->namaperpanjang;
            $newOrganik->deskripsi2 = $request->jabatanperpanjang;
            $newOrganik->deskripsi3 = $request->masaberlakuperpanjang;
        }
        elseif ($request->layanan == 'oracle') {
            $newOrganik->id_layanan = '4';
            $newOrganik->deskripsi1 = $request->idaplikasi;
            $newOrganik->deskripsi2 = $request->responsibiliti;
            $newOrganik->deskripsi3 = $request->perintah;
        }
        elseif ($request->layanan == 'nonoracle') {
            $newOrganik->id_layanan = '4';
            $newOrganik->deskripsi1 = $request->idaplikasi2;
        }

    	if (!$newOrganik->save()) {
    		return back();
    	}

    	return redirect('/organik');
    }

    public function editOrganik($id)
    { 
        // $edit = HakAksesOrganik::find($id);
        //  return view('organik.editorg')->with(['edit' => $edit]);

        // $user = $request->user();
        $dataAtasan = Authentic::where('status', 'enabled')->orderBy('username')->get();

       
        // mengambil data pegawai berdasarkan id yang dipilih
        $edit = HakAksesOrganik::where('id_hak_akses',$id)->get();
        // dd($edit);
         // passing data pegawai yang didapat ke view edit.blade.php
        

        return view('organik.editorg', ['dataAtasan' => $dataAtasan, 'edit' => $edit]);
    }

    public function updateOrganik(Request $request)
{
    // $dataMahasiswa = [
    //     'nipg' => $request->nipg,
    //     'nama_pemohon' => $request->pemohon,
    //     'jabatan_pemohon' => $request->jabatan_p,
    //     'nama_atasan' => $request->nama_atasan,
    //     'jabatan_atasan' => $request->jabatan_a
    // ];

    //     $update = HakAksesOrganik::where('id_hak_akses', $request->id)->update($dataMahasiswa);
    //     return redirect()->route('data-mahasiswa-baru');

    // update data pegawai
    $query = DB::table('hak_akses_organik')->where('id_hak_akses', $request->id)->update([
        'nipg' => $request->nipg,
        'nama_pemohon' => $request->pemohon,
        'jabatan_pemohon' => $request->jabatan_p,
        'nama_atasan' => $request->nama_atasan,
        'jabatan_atasan' => $request->jabatan_a,
        'alasan' => $request->alasan
    ]);
    // $hak_akses_organik                = HakAksesOrganik::Find($request->id);
    // $hak_akses_organik->nipg          = $request->nipg;
    // $hak_akses_organik->nama_pemohon          = $request->pemohon;
    // $hak_akses_organik->jabatan_pemohon          = $request->jabatan_p;
    // $hak_akses_organik->nama_atasan          = $request->nama_atasan;
    // $hak_akses_organik->jabatan_atasan          = $request->jabatan_a;
    // $hak_akses_organik->save();

    // alihkan halaman ke halaman pegawai
    return redirect('/organik');
}

}
