@extends('layout.main')


@section('title', 'Organik')

@section('content') 
@section('subtitle', 'Data Permohonan Hak Akses Organik')

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
                <a href="index.php?menu=datahakaksesorganik"><button class="btn dark" style="width:100px"><i class="fa fa-refresh"></i>&nbsp;&nbsp;Refresh</button></a>
                <a target="_blank" href="cetak\laporanhakakses.php"><button class="btn dark" style="width:100px"><i class="fa fa-print"></i>&nbsp;&nbsp;Print</button></a>
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
                                            <th width="120px" style="text-align:center">No Hak Akses</th>
                                            <th width="150px" style="text-align:center">Pemohon</th>
                                            <th width="150px" style="text-align:center;">Nama Atasan</th>
                                            <th width="120px" style="text-align:center;">Layanan</th>
                                            <th width="70px" style="text-align:center;">Status</th>
                                            <th width="150px" style="text-align:center;">Dikerjakan Oleh</th>
                                            <th width="150px" style="text-align:center;">Keterangan</th>
                                            <th width="50px" style="text-align:center;">Link</th>
                                         </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="text-align:center;">1</td>
                                            <td style="text-align:center;">FHA/O/2362/X/2019</td>
                                            <td>
                                                <b>Arief Nurrachman</b><br>
                                                Sales Area Head, Pekanbaru merangkap Sales Area Head, Dumai<br>
                                                <small>28 Oktober 2019</small>
                                            </td>
                                            <td><b></b><br><small></small></td>
                                            <td>
                                                    <b>New Account (NO)</b><br>
                      						<td>
                                                <small class="label bg-aqua" style="font-size:12px">Menunggu persetujuan atasan</small>
                                            </td>
                                            <td></td>
                                            <td>Menunggu Approval Atasan</td>
                                            <td style="text-align:center;">
                                                <a target='_blank' href='form/form_organik.php?hash=236254387181'><Button class="btn btn-sm btn-warning button" style="width:100px">Form Hak Akses</Button></a>
                                            </td>
                                                                            <tr>
                                            <td style="text-align:center;">2</td>
                                            <td style="text-align:center;">FHA/O/2361/X/2019</td>
                                            <td>
                                                <b>Mahesa Krishna Raditya</b><br>
                                                Sr. Analyst, Marketing Excellence<br>
                                                <small>26 Oktober 2019</small>
                                            </td>
                                            <td><b>Fitria Agristina Wijaya</b><br><small>Department Head, Marketing Excellence and Communication</small></td>
                                            <td>
                                                    <b>VPN</b><br>
                                            </td>
                                            <td>
                                            <small class="label bg-aqua" style="font-size:12px">Menunggu persetujuan atasan</small>
                                            </td>
                                            <td></td>
                                            <td>Menunggu Approval Atasan</td>
                                            <td style="text-align:center;">
                                                <a target='_blank' href='form/form_organik.php?hash=236156501101'><Button class="btn btn-sm btn-warning button" style="width:100px">Form Hak Akses</Button></a>
                                            </td>
           	 						</tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>
  </div>

@endsection

@section('js')
    <script>
        $(document).ready( function () {
                $('#exportTable').DataTable();
        } );
    </script>
@endsection