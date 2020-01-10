@extends('layout.main')

@section('title', 'Profil')

@section('content')
@section('subtitle', 'Data Profil')

<div class="col-md-9">
            
          <div class="box box-primary bayangan">
                    <div class="box-body">
                        
                    <form class="form-horizontal" method="post">
                        <div class="form-group">
                            <label class="label-control col-md-2">Email</label>			
                            <div class="col-md-4"> <input   type="text" class="form-control" name="email" value="{{ Auth::user()->email }}"></div>
                        </div>
                        <div class="form-group">
                            <label class="label-control col-md-2">Nama</label>			
                            <div class="col-md-4"> <input   type="text" class="form-control" name="nama" value="{{ Auth::user()->name }}"></div>
                        </div>
                        <div class="form-group">
                            <label class="label-control col-md-2">Jabatan</label>			
                            <div class="col-md-4"> <input   type="text" class="form-control" name="jabatan" value="{{ Auth::user()->jabatan }}"></div>
                        </div>
                        <div class="form-group">
                            <label class="label-control col-md-2">Satuan Kerja</label>			
                            <div class="col-md-4"> <input   type="text" class="form-control" name="divisi" value="{{ Auth::user()->satuan_kerja }}"></div>
                        </div>
                        <div class="form-group">
                            <label class="label-control col-md-2">Perusahaan</label>			
                            <div class="col-md-4"> <input   type="text" class="form-control" name="perusahaan" value="{{ Auth::user()->perusahaan }}"></div>
                        </div>
                        
                         <div class="form-group">
                                                         <label class="label-control col-md-2"></label>
                            <div class="col-md-4"> <button type="submit" class="btn btn-primary" name="simpan" style="width:100px"><i class="fa fa-edit"></i> <b>Update</b></button></div>
                                                     </div>

                    </form>
                        </div>
                    </div>
                    </div>
@endsection