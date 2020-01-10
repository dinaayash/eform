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
 		 $newPreventive->no_perubahan = 'FP/'.random_int(1, 9999).'XII/'.Date('Y');
         $newPreventive->nama_pemohon = $request->namapemohon;
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
         $newPreventive->keyboard_mouse = $request->keyboard;
         $newPreventive->power_supply = $request->powersupply;
         $newPreventive->monitor = $request->monitor;
         $newPreventive->baterai = $request->battery;
         $newPreventive->extension = $request->extension;
         $newPreventive->merk_jenis = $request->jenisipphone;
         $newPreventive->merk_tipe = $request->tipeipphone;
         $newPreventive->handset = $request->handset;
         $newPreventive->test_call = $request->testcall;
         $newPreventive->mic = $request->mic;
         $newPreventive->speaker = $request->speaker;
         $newPreventive->mac_address = $request->macaddress;
         $newPreventive->ip_address = $request->ipaddress;
         $newPreventive->test_ping = $request->pingproxy;
         $newPreventive->system_operasi = $request->systemoperasi;
         $newPreventive->type_so = $request->jenisos;
         $newPreventive->instal_ulang_so = $request->instalos;
         $newPreventive->office = $request->office;
         $newPreventive->type_office = $request->tipeoffice;
         $newPreventive->instal_ulang_office = $request->instaloffice;
         $newPreventive->browser = $request->browser;
         $newPreventive->fusion = $request->fusion;
         $newPreventive->zip = $request->zip;
         $newPreventive->adobe = $request->adobe;
         $newPreventive->anti_virus = $request->antivirus;
         $newPreventive->cookies = $request->cookies;
         $newPreventive->software_tambahan = $request->softwarestambahan;
         $newPreventive->tahun_prev = $request->tahun;
       
       $newPreventive->tipe_perubahan = json_encode($request->tipe_perubahan, JSON_PRETTY_PRINT);

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

