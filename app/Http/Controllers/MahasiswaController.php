<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\mahasiswa;
use App\Models\HakAksesOrganik;
use App\Models\Authentic;
// use App\Http\Requests\InsertMahasiswa;
use Exception;

class MahasiswaController extends Controller
{
    
    public function index()
    {
        $mahasiswa = mahasiswa::all();
        return view('mahasiswa.index', ['mahasiswa' => $mahasiswa]);
    }

    public function dataMahasiswa(Request $request)
    {
        $mahasiswa = mahasiswa::all();
        return view('organik.organik', ['organik' => $organik]);
    }
    public function dataNonOrganik()
    {
        return view('non organik.nonorganik');
    }
    // public function pesanbaru()
    // {
    //     return view('mahasiswa.pesanbaru');
    // }
    // public function pesanlama()
    // {
    //     return view('mahasiswa.pesanlama');
    // }
    public function CreateNonOrganik(Request $request)
    {
        $user = $request->user();
        $dataAtasan = Authentic::where('status', 'enabled')->orderBy('username')->get();

        return view('non organik.tambahnon',[
            'user' => $user,
            'dataAtas' => $dataAtasan
        ]);
    }
    public function createku(Request $request)
    {
        $user = $request->user();
        $dataAtasan = Authentic::where('status', 'enabled')->orderBy('username')->get();

        return view('organik.tambahorg',[
            'nipg' => '123456',
            'user' => $user,
            'dataAtas' => $dataAtasan
        ]);
    }
    public function createperubahan(Request $request)
    {
        $user = $request->user();
        $dataAtasan = Authentic::where('status', 'enabled')->orderBy('username')->get();

        return view('mahasiswa.create-perubahan',[
            'user' => $user,
            'dataAtas' => $dataAtasan
        ]);
    }
    
    
    public function dataUser()
    {
        return view('.master.user');
    } 
     public function createUser()
    {
        return view('.master.tambahuser');
    } 
     public function dataPIC()
    {
        return view('.pic.pic');
    } 
    public function createPIC()
    {
        return view('.pic.tambahpic');
    } 

    public function create(InsertMahasiswa $request)
    {
            // $dataMahasiswa = [
            //     'nama' => $request->nama,
            //     'nrp' => $request->nrp,
            //     'email' => $request->email,
            //     'jurusan' => $request->jurusan
            $createku = [
                'nama' => $request->nama,
                'nrp' => $request->nrp,
                'email' => $request->email,
                'jurusan' => $request->jurusan
            ];

             mahasiswa::create($dataMahasiswa);
            return redirect()->route('data-mahasiswa-baru')->with('status','Data Berhasil Ditambahkan');

            $dataPerubahan = [
                'nama' => $request->nama,
                'nrp' => $request->nrp,
                'email' => $request->email,
                'jurusan' => $request->jurusan
            ];

            mahasiswa::create($dataPerubahan);
            return redirect()->route('data-perubahan')->with('status','Data Berhasil Ditambahkan');

    }

    public function store(Request $request)
    {
      

    }

    
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $edit = mahasiswa::find($id);
         return view('mahasiswa.edit')
         ->with([
            'dataMahasiswa' => $edit
         ]);
    }

    
    public function update(Request $request)
    {
        $dataMahasiswa = [
            'nama' => $request->nama,
            'nrp' => $request->nrp,
            'email' => $request->email,
            'jurusan' => $request->jurusan
        ];

        $update = mahasiswa::where('id', $request->id)->update($dataMahasiswa);
        return redirect()->route('data-mahasiswa-baru');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
         $delete = mahasiswa::find($id);
         $delete->delete($delete);
         return redirect()->route('data-mahasiswa-baru');
    }
}
