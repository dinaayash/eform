@extends('layout.main')


@section('title', 'Aplikasi')

@section('content') 
@section('subtitle', 'Data Aplikasi')

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
        <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                          
                       <button type="button" class="btn dark" data-toggle="modal" data-target="#myModal"><i class="fa fa-print" style="width:23px;"></i>&nbsp;Cetak</button></a>   

                       <a href="{{ route('create-apk') }}"> <button type="button" class="btn dark" style="float:right;" ><i class="fa fa-file-text"></i> &nbsp;Tambah Aplikasi</button>
                        <!-- Modal -->

                        <!-- Modal -->
                        <form method="post" action="laporan_aplikasi.php">
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">
                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header" style="background-color:#3498db;">
                                  <button type="button" class="close" data-dismiss="modal"><img src="img/close-icon.png" width="24px"></button>
                                  <center><h3 class="modal-title" style="color:white;"><b>Cetak Data Aplikasi</b></h3></center>
                                </div>
                                <div class="modal-body">
                                    <div class="checkbox">
                                        <label><input name="chkall" type="checkbox" value="all">All</label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input name="chkkategori2" type="checkbox" class="chkkategori" onchange="chkkategori()" value="1">Berdasarkan Kategori
                                        </label>
                                        <select name="kategori" class="form-control kategori" id="kategori" style="margin-top:10px; display:none" autofocus>
                                        <option value="Non Oracle" >Non Oracle</option>
                                      	<option value="Oracle" >Oracle</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                <a href="http://localhost/eform/report/laporan_aplikasi.php" target="_blank"><button type="button" class="btn btn-success">Cetak</button></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        <!---->
                        </form>
                    </div>
                </div>
        </div>
            <!-- /.row -->
           <div class="row">
                <div class="col-lg-12">
                    <div class="box box-primary bayangan">
                        <div class="box-body">
                        <div class="table-responsive">
                          <table id="exportTable" class="table table-bordered table-hover">
                                <thead style="background-color:#add8e6; color:black;">
                                    <tr>
                                        <th width="20px" style="text-align:center;">No</th>
                                        <th style="text-align:center;">Nama Aplikasi</th>
                                        <th style="text-align:center;">Kategori</th>
                                        <th width="120px" style="text-align:center;">Aksi</th>
                                     </tr>
                                </thead>
                                <tbody>
                                                                        <tr>
                                        <td style="text-align:center;">1</td>
                                        <td>Hyperion</td>
                                        <td>Oracle</td>
                                        <td style="text-align:center;">
                                            <div class="btn-group-justified">
                                                <a href=""><button type= "button" class="btn btn-danger"><i class="fa fa-trash" width="23px;"></i></button></a>
                                                    &nbsp;
                                                <a href=""><button type= "button" class="btn btn-warning"><i class="fa fa-edit" width="23px;"></i></button></a>
                                            </div>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td style="text-align:center;">2</td>
                                        <td>GASPEX</td>
                                        <td>Non Oracle</td>
                                        <td style="text-align:center;">
                                            <div class="btn-group-justified">
                                                <a href=""><button type= "button" class="btn btn-danger"><i class="fa fa-trash" width="23px;"></i></button></a>
                                                    &nbsp;
                                                <a href=""><button type= "button" class="btn btn-warning"><i class="fa fa-edit" width="23px;"></i></button></a>
                                            </div>
                                        </td>
                                    </tr>
                                                                        <tr>
                                        <td style="text-align:center;">3</td>
                                        <td>Oracle HRMS</td>
                                        <td>Oracle</td>
                                        <td style="text-align:center;">
                                            <div class="btn-group-justified">
                                                <a href=""><button type= "button" class="btn btn-danger"><i class="fa fa-trash" width="23px;"></i></button></a>
                                                    &nbsp;
                                                <a href=""><button type= "button" class="btn btn-warning"><i class="fa fa-edit" width="23px;"></i></button></a>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
            </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

@endsection

@section('js')
    <script>
        $(document).ready( function () {
                $('#exportTable').DataTable();
        } );
    </script>
@endsection