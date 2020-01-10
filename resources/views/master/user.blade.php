@extends('layout.main')


@section('title', 'User Akses')

@section('content') 
@section('subtitle', 'Data User')

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
                    <a target="_blank" href="cetak\laporan-user-organik.php"><button type="button" class="btn dark" style="width:100px; margin-bottom:0px;"><i class="fa fa-print"></i>&nbsp;&nbsp;Print</button></a>
                    <a href="{{ route('create-u') }}"><button type="button" class="btn dark" style="width:150px; float:right; margin-bottom:0px"><i class="fa fa-user-plus"></i>&nbsp;&nbsp;Create New User</button></a>
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
                                            <th width="5px" style="text-align:center;">No</th>
                                            <th width="100px" style="text-align:center;">NIPG</th>
                                            <th width="100px" style="text-align:center;">Username</th>
                                            <th width="300px" style="text-align:center;">Nama</th>
                                            <th width="300px" style="text-align:center;">Jabatan</th>
                                            <th width="300px" style="text-align:center;">Divisi</th>
                                            <th width="20px" style="text-align:center;">Level</th>
                                            <th width="120px" style="text-align:center;">Aksi</th>
                                         </tr>
                                    </thead>
                                    <tbody>
                                    	<tr>
                                            <td style="text-align:center;">1</td>
                                            <td style="text-align:center;">-</td>
                                            <td>Muhamad.Iqbal</td>
                                            <td>Mohammad Iqbal<br><small>mohamad.iqbal@pgascom.co.id</small></td>
                                            
                                            <td>Tenaga Jasa Profesi Datamart MIS</td>
                                            <td>Information Communication Technology</td>
                                            <td style="text-align:center;">6</td>

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
            </div>
      <!-- /.row -->
    </section>  </div>

@endsection

@section('js')
    <script>
        $(document).ready( function () {
                $('#exportTable').DataTable();
        } );
    </script>
@endsection