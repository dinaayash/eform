<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Perubahan;
use Exception;

class PerubahanController extends Controller
{
    public function dataPerubahan()
    {
        $Perubahan = Perubahan::all();
        return view('mahasiswa.perubahan', ['Perubahan' => $Perubahan]);
    }
    public function createPerubahan(Request $request)
    {
        // return view('mahasiswa.create-perubahan');
        $newPerubahan = new Perubahan;
        $newPerubahan->no_perubahan = 'FP/'.random_int(1, 9999).'XII/'.Date('Y');
        $newPerubahan->nama_pemohon = $request->namapemohon;
        $newPerubahan->tanggal_input = date('Y-m-d');
        $newPerubahan->jabatan_pemohon = $request->jabatanpemohon;
        $newPerubahan->satuan_kerja = $request->divisipemohon;
        $newPerubahan->nama_atasan = $request->nipgatasan;
        $newPerubahan->jabatan_atasan = $request->jabatanatasan;
        $newPerubahan->nama_proyek = $request->namaproyek;
        $newPerubahan->desc_perubahan = $request->deskripsi;
        $newPerubahan->masa_perubahan = $request->tanggal;
        $newPerubahan->alasan_perubahan = $request->alasan;
        $newPerubahan->lingkungan = $request->lingkungan;
        $newPerubahan->desc_plantest = $request->deskripsitest;
        $newPerubahan->desc_rollback = $request->deskripsirollback;
        $newPerubahan->status_permohonan = 'On Progress';
       
       $newPerubahan->tipe_perubahan = json_encode($request->tipe_perubahan, JSON_PRETTY_PRINT);
        // ($request->tipe_perubahan);
   //      {
   //      ($request->tipe_perubahan[] == 'apk';
			// $newPerubahan->id_tipe = '1';
   //          $newPerubahan->deskripsi1 = 'Aplikasi');

   //      ($request->tipe_perubahan[] == 'hard') {
   //          $newPerubahan->id_tipe  = '2';
   //          $newPerubahan->deskripsi1 = 'Hardware');
        
   //       ($request->tipe_perubahan[] == 'shut') {
   //          $newPerubahan->id_tipe  = '3';
   //          $newPerubahan->deskripsi1 = 'Shutdown Terjadwal');
        
   //      ($request->tipe_perubahan[] == 'db') {
   //          $newPerubahan->id_tipe  = '4';
   //          $newPerubahan->deskripsi1 = 'Database');
        
   //      ($request->tipe_perubahan[] == 'net'){
   //          $newPerubahan->id_tipe  = '5';
   //          $newPerubahan->deskripsi1 = 'Network');
        
   //      ($request->tipe_perubahan[] == 'proced') {
   //          $newPerubahan->id_tipe  = '6';
   //          $newPerubahan->deskripsi1 = 'Procedure');
        
   //      ($request->tipe_perubahan[] == 'sec') {
			// $newPerubahan->id_tipe  = '7';
   //          $newPerubahan->deskripsi1 = 'Security');
   //      }

         if ($request->optprioritas == 'Penting') {
            $newPerubahan->id_tipe = '1';
            $newPerubahan->prioritas_perubahan = 'Penting';
        }
         elseif ($request->optprioritas == 'Tinggi') {
            $newPerubahan->id_tipe = '2';
            $newPerubahan->prioritas_perubahan = 'Tinggi';
        }
         elseif ($request->optprioritas == 'Menengah') {
            $newPerubahan->id_tipe = '3';
            $newPerubahan->prioritas_perubahan = 'Menengah';
        }
         elseif ($request->optprioritas == 'Rendah') {
            $newPerubahan->id_tipe = '4';
            $newPerubahan->prioritas_perubahan = 'Rendah';
        }
         if ($request->optdampak == 'Kecil') {
            $newPerubahan->id_tipe = '5';
            $newPerubahan->dampak_perubahan = 'Kecil';
        }
         elseif ($request->optdampak == 'Menengah') {
            $newPerubahan->id_tipe = '6';
            $newPerubahan->dampak_perubahan = 'Menengah';
        }
         elseif ($request->optdampak == 'Besar') {
            $newPerubahan->id_tipe = '7';
            $newPerubahan->dampak_perubahan = 'Besar';
        }
        // $newDetailNOrganik->save();
        $newPerubahan->save();

        // $newNOrganik__->hash_code = $request->hash_code;
        // $newNOrganik->hash_code = Hash::make('rahasia');
        
        //$newNOrganik->keterangan = 'Menunggu Approval Atasan New'; //keterangan ora enek ning table non organik
        
  
        // if (!$newNOrganik->save()) {
        //     return back();
        // }  

        return redirect('/perubahan')->with('alert-success','Data berhasil diTAMBAH!');
    }   
}
