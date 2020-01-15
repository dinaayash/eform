<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Preventive;
use Exception;
use Auth;

class PreventiveController extends Controller
{
   public function dataPreventive()
    {
        return view('.mahasiswa.preventive');
    } 

public function createPreventive(Request $request)
    {
        // return view('mahasiswa.create-perubahan');
        $newPreventive = new Preventive;
 		 $newPreventive->no_preventive = 'FP/'.random_int(1, 9999).'XII/'.Date('Y');
         $newPreventive->nama_user = $request->namauser;
         $newPreventive->satuan_kerja = $request->divisi;
         $newPreventive->tgl_preventive = date('Y-m-d');
         $newPreventive->no_hbb = $request->nohbb;
         $newPreventive->computer_name = $request->comname;
         $newPreventive->jenis_perangkat = $request->jenisperangkat;
         $newPreventive->tahun = $request->tahunperolehan;
         $newPreventive->brand = $request->brand;
         $newPreventive->tipe = $request->tipe;
         $newPreventive->serial_number = $request->serialnumber;
         $newPreventive->memory = $request->memory;
         $newPreventive->hardisk = $request->hardisk;
         $newPreventive->processor = $request->processor;

         if ($request->keyboard == null){
            $newPreventive->keyboard_mouse = 'tidak';
         }else{
            $newPreventive->keyboard_mouse = 'ok';
         }
         if ($request->powersupply == null){
            $newPreventive->power_supply = 'tidak';
         }else{
            $newPreventive->power_supply = 'ok';
         }
         if ($request->monitor == null){
            $newPreventive->monitor = 'tidak';
         }else{
            $newPreventive->monitor = 'ok';
         }
         if ($request->battery == null){
            $newPreventive->baterai = 'tidak';
         }else{
            $newPreventive->baterai = 'ok';
         }
         if ($request->handset == null){
            $newPreventive->handset = 'tidak';
         }else{
            $newPreventive->handset = 'ok';
         }
         if ($request->testcall == null){
            $newPreventive->test_call = 'tidak';
         }else{
            $newPreventive->test_call = 'ok';
         }
         if ($request->mic == null){
            $newPreventive->mic = 'tidak';
         }else{
            $newPreventive->mic = 'ok';
         }
         if ($request->speaker == null){
            $newPreventive->speaker = 'tidak';
         }else{
            $newPreventive->speaker = 'ok';
         }
         if ($request->pingproxy == null){
            $newPreventive->test_ping = 'tidak';
         }else{
            $newPreventive->test_ping = 'ok';
         }
         if ($request->fusion == null){
            $newPreventive->fusion = 'tidak';
         }else{
            $newPreventive->fusion = 'ok';
         }
         if ($request->zip == null){
            $newPreventive->zip = 'tidak';
         }else{
            $newPreventive->zip = 'ok';
         }
         if ($request->adobe == null){
            $newPreventive->adobe = 'tidak';
         }else{
            $newPreventive->adobe = 'ok';
         }
         if ($request->antivirus == null){
            $newPreventive->anti_virus = 'tidak';
         }else{
            $newPreventive->anti_virus = 'ok';
         }
         if ($request->cookies == null){
            $newPreventive->cookies = 'tidak';
         }else{
            $newPreventive->cookies = 'ok';
         }

         
         $newPreventive->extension = $request->extension;
         $newPreventive->merk_jenis = $request->jenisipphone;
         $newPreventive->merk_tipe = $request->tipeipphone;


         $newPreventive->mac_address = $request->macaddress;
         $newPreventive->ip_address = $request->ipaddress;

         $newPreventive->system_operasi = $request->systemoperasi;
         $newPreventive->type_so = $request->jenisos;
         $newPreventive->instal_ulang_so = $request->instalos;
         $newPreventive->office = $request->office;
         $newPreventive->type_office = $request->tipeoffice;
         $newPreventive->instal_ulang_office = $request->instaloffice;
         $newPreventive->browser = $request->browser;


         $newPreventive->software_tambahan = $request->softwarestambahan;
         $newPreventive->tahun_prev = $request->tahun;
       
       // $newPreventive->tipe_perubahan = json_encode($request->tipe_perubahan, JSON_PRETTY_PRINT);

         if ($request->semester == 'Semester 1') {
             $newPreventive->tahap = 'Semester 1';
        }
         elseif ($request->semester == 'Semester 2') {
             $newPreventive->tahap = 'Semester 2';
        }
        
         $newPreventive->save();

        return redirect('/preventive')->with('alert-success','Data berhasil diTAMBAH!');
    }   
}

