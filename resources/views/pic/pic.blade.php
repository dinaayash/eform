@extends('layout.main')


@section('title', 'PIC Layanan')

@section('content') 
@section('subtitle', 'Data PIC Layanan')

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
                    <a target="_blank" href="cetak\pic-layanan.php"><button type="button" class="btn dark" style="width:100px; margin-bottom:0px;"><i class="fa fa-print"></i>&nbsp;&nbsp;Print</button></a>
                    <a href="{{ route('create-pic') }}"><button type="button" class="btn dark" style="width:150px; float:right; margin-bottom:0px"><i class="fa fa-user-plus"></i>&nbsp;&nbsp;Create New PIC</button></a>
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
                                            <th width="100px" style="text-align:center;">NIPG</th>
                                            <th style="text-align:center;">Nama PIC</th>
                                            <th style="text-align:center;">Layanan ICT</th>
                                            <th width="120px" style="text-align:center;">Aksi</th>
                                         </tr>
                                    </thead>
                                    <tbody>
                                                                                <tr>
                                            <td style="text-align:center;">1</td>
                                            <td style="text-align:center;">0003781901</td>
                                            <td>Teguh Umar Dhanu<br><small>teguh.umar@pgn.co.id</small></td>
                                            <td>
                                                <ol>
                                                    <li>VPN</li><li>New Account (NO)</li><li>Communication</li><li>Extend Account (NO)</li>                                                </ol>
                                            
                                            </td>
                                            <td style="text-align:center;">
                                                <div class="btn-group-justified">
                                                    <a href=""><button type= "button" class="btn btn-danger"><i class="fa fa-trash" width="23px;"></i></button></a>
                                                    &nbsp;
                                                    <a href=""><button type= "button" class="btn btn-warning"><i class="fa fa-edit" width="23px;"></i></button></a>
                                                </div>
                                            </td>
                                                                            <tr>
                                            <td style="text-align:center;">2</td>
                                            <td style="text-align:center;">0004781928</td>
                                            <td>Subandi<br><small>Subandi@pgn.co.id</small></td>
                                            <td>
                                                <ol>
                                                    <li>Fileshare</li>                                                </ol>
                                            
                                            </td>
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
    </section>

@endsection

@section('js')
    <script>
        $(document).ready( function () {
                $('#exportTable').DataTable();
        } );
    </script>
@endsection