@extends('layout.main')


@section('title', 'Tipe Perubahan')

@section('content') 
@section('subtitle', 'Data Tipe Perubahan')

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
                    <a href="{{ route('create-tp') }}"><button type="button" class="btn dark" style="float:right; margin-bottom:10px"><i class="fa fa-plus"></i>&nbsp;&nbsp;Create New </button></a>
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
                                            <th width="400px" style="text-align:center;">Tipe Perubahan</th>
                                            <th width="500px" style="text-align:center;">PIC Perubahan</th>
                                            <th width="100px" style="text-align:center;">Aksi</th>
                                         </tr>
                                    </thead>
                                    <tbody>
                                                                            <tr>
                                            <td style="text-align:center;">1</td>
                                            <td>Aplikasi</td>
                                            <td>Irpan<br><small>irpan@pgn.co.id</small></td>
                                            <td style="text-align:center;">
                                                <div class="btn-group-justified">
                                                <a href=""><button type= "button" class="btn btn-danger"><i class="fa fa-trash" width="23px;"></i></button></a>
                                                    &nbsp;
                                                <a href=""><button type= "button" class="btn btn-warning"><i class="fa fa-edit" width="23px;"></i></button></a>
                                            </div>
                                            </td>
                                                                            <tr>
                                            <td style="text-align:center;">2</td>
                                            <td>Hardware</td>
                                            <td>Cecep Yudi Subiantoro<br><small>cecep.subiantoro@pgn.co.id</small></td>
                                            <td style="text-align:center;">
                                                <div class="btn-group-justified">
                                                <a href=""><button type= "button" class="btn btn-danger"><i class="fa fa-trash" width="23px;"></i></button></a>
                                                    &nbsp;
                                                <a href=""><button type= "button" class="btn btn-warning"><i class="fa fa-edit" width="23px;"></i></button></a>
                                            </div>
                                            </td>
                                                                            <tr>
                                            <td style="text-align:center;">3</td>
                                            <td>Network</td>
                                            <td>Cecep Yudi Subiantoro<br><small>cecep.subiantoro@pgn.co.id</small></td>
                                            <td style="text-align:center;">
                                                <div class="btn-group-justified">
                                                <a href=""><button type= "button" class="btn btn-danger"><i class="fa fa-trash" width="23px;"></i></button></a>
                                                    &nbsp;
                                                <a href=""><button type= "button" class="btn btn-warning"><i class="fa fa-edit" width="23px;"></i></button></a>
                                            </div>
                                            </td>
                                                                            <tr>
                                            <td style="text-align:center;">4</td>
                                            <td>OS/Aplikasi Pendukung</td>
                                            <td>Elfan Triawan<br><small>elfan.triawan@pgn.co.id</small></td>
                                            <td style="text-align:center;">
                                                <div class="btn-group-justified">
                                                <a href=""><button type= "button" class="btn btn-danger"><i class="fa fa-trash" width="23px;"></i></button></a>
                                                    &nbsp;
                                                <a href=""><button type= "button" class="btn btn-warning"><i class="fa fa-edit" width="23px;"></i></button></a>
                                            </div>
                                            </td>
                                                                            <tr>
                                            <td style="text-align:center;">5</td>
                                            <td>Database</td>
                                            <td>Zulfikar Ali Imran<br><small>zulfikar.imran@pgn.co.id</small></td>
                                            <td style="text-align:center;">
                                                <div class="btn-group-justified">
                                                <a href=""><button type= "button" class="btn btn-danger"><i class="fa fa-trash" width="23px;"></i></button></a>
                                                    &nbsp;
                                                <a href=""><button type= "button" class="btn btn-warning"><i class="fa fa-edit" width="23px;"></i></button></a>
                                            </div>
                                            </td>
                                                                            <tr>
                                            <td style="text-align:center;">6</td>
                                            <td>Prosedur</td>
                                            <td>Elfan Triawan<br><small>elfan.triawan@pgn.co.id</small></td>
                                            <td style="text-align:center;">
                                                <div class="btn-group-justified">
                                                <a href=""><button type= "button" class="btn btn-danger"><i class="fa fa-trash" width="23px;"></i></button></a>
                                                    &nbsp;
                                                <a href=""><button type= "button" class="btn btn-warning"><i class="fa fa-edit" width="23px;"></i></button></a>
                                            </div>
                                            </td>
                                                                            <tr>
                                            <td style="text-align:center;">7</td>
                                            <td>Security</td>
                                            <td>Cecep Yudi Subiantoro<br><small>cecep.subiantoro@pgn.co.id</small></td>
                                            <td style="text-align:center;">
                                                <div class="btn-group-justified">
                                                <a href=""><button type= "button" class="btn btn-danger"><i class="fa fa-trash" width="23px;"></i></button></a>
                                                    &nbsp;
                                                <a href=""><button type= "button" class="btn btn-warning"><i class="fa fa-edit" width="23px;"></i></button></a>
                                            </div>
                                            </td>
                                                                            <tr>
                                            <td style="text-align:center;">8</td>
                                            <td>Shutdown Terjadwal</td>
                                            <td>Cecep Yudi Subiantoro<br><small>cecep.subiantoro@pgn.co.id</small></td>
                                            <td style="text-align:center;">
                                                <div class="btn-group-justified">
                                                <a href=""><button type= "button" class="btn btn-danger"><i class="fa fa-trash" width="23px;"></i></button></a>
                                                    &nbsp;
                                                <a href=""><button type= "button" class="btn btn-warning"><i class="fa fa-edit" width="23px;"></i></button></a>
                                            </div>
                                            </td>
                                                                            <tr>
                                            <td style="text-align:center;">9</td>
                                            <td>Aplikasi</td>
                                            <td>Zulfikar Ali Imran<br><small>zulfikar.imran@pgn.co.id</small></td>
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