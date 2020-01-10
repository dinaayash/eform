@extends('layout.main')


@section('title', 'Aplikasi')

@section('content') 
@section('subtitle', 'Form Aplikasi')


    
<section class="content">
            <div class="row" style="margin-top:10px;">
                <div class="col-md-12">
                    <div class="box box-primary bayangan">
                    <div class="box-body">
                        
                    <form class="form-horizontal" method="post">
                        <div class="form-group">
                            <label class="label-control col-md-2">Nama Aplikasi</label>			
                            <div class="col-md-4"> <input required type="text" class="form-control"  name="namaaplikasi" value="" placeholder="Nama Aplikasi"></div>
                        </div>
                        <div class="form-group">
                            <label class="label-control col-md-2">Kategori</label>			
                            <div class="col-md-4">
                                <select class="form-control" name="kategori" placeholder="Kategori" style="margin-bottom:10px;">
                                <option></option>
                                <option>Oracle</option>
                                <option>Non Oracle</option>
                                </select>
                            </div>
                        </div>
                        
                         <div class="form-group">
                                                         <label class="label-control col-md-2"></label>
                            <div class="col-md-4"> <button type="submit" class="btn btn-primary" name="simpan"><b>Save</b></button></div>
                                                     </div>

                    </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
      </section>
  <!-- /.content-wrapper -->  </div>


 
@endsection

