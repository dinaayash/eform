@extends('layout.main')


@section('title', 'User Akses')

@section('content') 
@section('subtitle', 'Form User Akses')

<style>
.link{
    text-decoration: none;
}
.link:hover{
    text-decoration: none;
}
.dark{
    background-color: #37474F;
    color: white;
}
.dark:hover{
    background-color: #263238;
    color: white;
}
</style>

<section class="content">
            <div class="row" style="margin-top:10px;">
                <div class="col-md-12">
                    <div class="box box-primary bayangan">
                    <div class="box-body">
                        
                    <form class="form-horizontal" method="post">
                        <div class="form-group">
                            <label class="label-control col-md-2">NIPG</label>			
                            <div class="col-md-4"> <input  type="text" class="form-control" name="nipg" value="" placeholder="NIPG" autofocus></div>
                        </div>
                        <div class="form-group">
                            <label class="label-control col-md-2">Username</label>			
                            <div class="col-md-4"> <input type="text" class="form-control" name="username" value="" placeholder="Username"></div>
                        </div>
                        <div class="form-group">
                            <label class="label-control col-md-2">Email</label>			
                            <div class="col-md-4"> <input   type="text" class="form-control" name="email" value="" placeholder="Email"></div>
                        </div>
                        <div class="form-group">
                            <label class="label-control col-md-2">Nama</label>			
                            <div class="col-md-4"> <input   type="text" class="form-control" name="nama" value="" placeholder="Nama"></div>
                        </div>
                        <div class="form-group">
                            <label class="label-control col-md-2">Jabatan</label>			
                            <div class="col-md-4"> <input   type="text" class="form-control" name="jabatan" value="" placeholder="Jabatan"></div>
                        </div>
                        <div class="form-group">
                            <label class="label-control col-md-2">Unit Kerja</label>			
                            <div class="col-md-4"> <input   type="text" class="form-control" name="unitkerja" value="" placeholder="Unit Kerja"></div>
                        </div>
                        <div class="form-group">
                            <label class="label-control col-md-2">Divisi</label>			
                            <div class="col-md-4"> <input   type="text" class="form-control" name="divisi" value="" placeholder="Divisi"></div>
                        </div>
                        <div class="form-group">
                            <label class="label-control col-md-2">Password</label>			
                            <div class="col-md-4"> <input   type="text" class="form-control" name="password" value="" placeholder="Password"></div>
                        </div>
                        <div class="form-group">
                            <label class="label-control col-md-2">Level</label>			
                            <div class="col-md-4"> <input   type="text" class="form-control" name="level" value="" placeholder="Level"></div>
                        </div>
                        
                         <div class="form-group">
                                                         <label class="label-control col-md-2"></label>
                            <div class="col-md-4"> <button type="submit" class="btn btn-primary" name="simpan" style="width:100px">Save</button></div>
                                                     </div>

                    </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
      </section>
  <!-- /.content-wrapper -->

</div>

@endsection

