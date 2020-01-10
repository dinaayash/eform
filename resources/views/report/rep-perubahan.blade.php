@extends('layout.main')


@section('title', 'Perubahan')

@section('content') 
@section('subtitle', 'Data Report Perubahan')

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
                    <a href="index.php?menu=permohonanperubahan"><button class="btn dark" style="width:100px"><i class="fa fa-refresh"></i>&nbsp;&nbsp;Refresh</button></a>
                </div>
            </div>
        </div>

 <div class="row">
                <div class="col-lg-12" style="margin-bottom:-15px">
                    <div class="box box-primary">
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="exportTable" class="table table-bordered table-hover">
                                    <thead style="background-color:#add8e6; color:black;">
                                        <tr>
                                            <th width="5px" style="text-align:center;">No</th>
                                            <th width="50px" style="text-align:center;">No Perubahan</th>
                                            <th width="150px" style="text-align:center;">Pemohon</th>
                                            <th width="150px" style="text-align:center;">Proyek/Module/Aplikasi</th>
                                            <th width="150px" style="text-align:center;">Tipe Perubahan</th>
                                            <th width="50px" style="text-align:center;">Lampiran</th>
                                            <th width="150px" style="text-align:center;">Nama Approval</th>
                                            <th width="50px"style="text-align:center;">Status</th>
                                            <th width="50px"style="text-align:center;">Link</th>
                                         </tr>
                                    </thead>
                                    <tbody>
                                                                                <tr>
                                            <td style="text-align:center;">1</td>
                                            <td style="text-align:center;">FP/00861/III/2019</td>
                                            <td><b>Yiyip Dwi Sapputra</b><br><small>13 Maret 2019</small></td>
                                            <td>Penambahan Network DMZ</td>
                                            <td>
                                                <ol>
                                                    <li>Network</li>                                                </ol>
                                            </td>
                                            <td style="text-align:center;">
                                                    
                                                <a target='_blank' href='attachment/Perubahan/861032019.pdf' data-toggle="tooltip" data-placement="bottom" title="View Lampiran"><img src="img/pdf.png" width="34px"><br><small>Lampiran</small></a>
                                                                                            </td>
                                            <td><b>Cecep Yudi Subiantoro</b><br><small>Department Head, Infrastructure Management</small></td>
                                            <td>
                                            <small class="label bg-green" style="font-size:12px">Silahkan lakukan pengetesan</small>
                                            </td>
                                            <td style="text-align:center;">
                                                <a target='_blank' href='form/formperubahan.php?no=FP/00861/III/2019'><Button class="btn btn-sm btn-warning button" style="width:120px">Form Perubahan</Button></a>
                                            </td>
                                        <tr>
                                            <td style="text-align:center;">2</td>
                                            <td style="text-align:center;">FP/00862/III/2019</td>
                                            <td><b>Baroqah Anton Sulaiman</b><br><small>13 Maret 2019</small></td>
                                            <td>Premier - https://premier.pgn.co.id - 192.169.104.57</td>
                                            <td>
                                                <ol>
                                                    <li>Hardware</li>                                                </ol>
                                            </td>
                                            <td style="text-align:center;">
                                                    
                                                <a target='_blank' href='attachment/Perubahan/862032019.pdf' data-toggle="tooltip" data-placement="bottom" title="View Lampiran"><img src="img/pdf.png" width="34px"><br><small>Lampiran</small></a>
                                            </td>
                                            <td><b>Sigit Dewantoro</b><br><small>Plt. Specialist, Construction (PMO)</small></td>
                                            <td>
                                            <small class="label bg-green" style="font-size:12px">Silahkan lakukan pengetesan</small>
                                            </td>
                                            <td style="text-align:center;">
                                                <a target='_blank' href='form/formperubahan.php?no=FP/00862/III/2019'><Button class="btn btn-sm btn-warning button" style="width:120px">Form Perubahan</Button></a>
                                            </td>
                                        <tr>
                                            <td style="text-align:center;">3</td>
                                            <td style="text-align:center;">FP/00863/III/2019</td>
                                            <td><b>NOC Data Center</b><br><small>13 Maret 2019</small></td>
                                            <td>Pelepasan Server Blade & Storage PMO Surabaya</td>
                                            <td>
                                                <ol>
                                                    <li>Hardware</li>                                                </ol>
                                            </td>
                                            <td style="text-align:center;">
                                                    
                                                <a target='_blank' href='attachment/Perubahan/863032019.pdf' data-toggle="tooltip" data-placement="bottom" title="View Lampiran"><img src="img/pdf.png" width="34px"><br><small>Lampiran</small></a>
                                            </td>
                                            <td><b>Hendi Novianto</b><br><small>Analyst, Data Center</small></td>
                                            <td>
                                           	<small class="label bg-green" style="font-size:12px">Perubahan sudah sudah bisa digunakan</small>
                                            </td>
                                            <td style="text-align:center;">
                                                <a target='_blank' href='form/formperubahan.php?no=FP/00863/III/2019'><Button class="btn btn-sm btn-warning button" style="width:120px">Form Perubahan</Button></a>
                                            </td>
                                        <tr>
                                            <td style="text-align:center;">4</td>
                                            <td style="text-align:center;">FP/00864/III/2019</td>
                                            <td><b>Subandi</b><br><small>14 Maret 2019</small></td>
                                            <td>mynms</td>
                                            <td>
                                                <ol>
                                                    <li>Hardware</li><li>Shutdown Terjadwal</li>                                                </ol>
                                            </td>
                                            <td style="text-align:center;">
                                                    
                                                <a target='_blank' href='attachment/Perubahan/864032019.pdf' data-toggle="tooltip" data-placement="bottom" title="View Lampiran"><img src="img/pdf.png" width="34px"><br><small>Lampiran</small></a>
                                            </td>
                                            <td><b>Cecep Yudi Subiantoro</b><br><small>Department Head, Infrastructure Management</small></td>
                                            <td>
                                            <small class="label bg-green" style="font-size:12px">Silahkan lakukan pengetesan</small>
                                            </td>
                                            <td style="text-align:center;">
                                                <a target='_blank' href='form/formperubahan.php?no=FP/00864/III/2019'><Button class="btn btn-sm btn-warning button" style="width:120px">Form Perubahan</Button></a>
                                            </td>
                                        <tr>
                                            <td style="text-align:center;">5</td>
                                            <td style="text-align:center;">FP/00865/III/2019</td>
                                            <td><b>Moh. Nur Alim</b><br><small>14 Maret 2019</small></td>
                                            <td>Interkoneksi server absen online gagas dengan server absen online pgn easy</td>
                                            <td>
                                                <ol>
                                                    <li>Network</li>                                                </ol>
                                            </td>
                                            <td style="text-align:center;">
                                                    
                                                <a target='_blank' href='attachment/Perubahan/865032019.pdf' data-toggle="tooltip" data-placement="bottom" title="View Lampiran"><img src="img/pdf.png" width="34px"><br><small>Lampiran</small></a>
                                            </td>
                                            <td><b>Cecep Yudi Subiantoro</b><br><small>Department Head, Infrastructure Management</small></td>
                                            <td>
                                            <small class="label bg-green" style="font-size:12px">Silahkan lakukan pengetesan</small>
                                           	</td>	
                                            <td style="text-align:center;">
                                                <a target='_blank' href='form/formperubahan.php?no=FP/00865/III/2019'><Button class="btn btn-sm btn-warning button" style="width:120px">Form Perubahan</Button></a>
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