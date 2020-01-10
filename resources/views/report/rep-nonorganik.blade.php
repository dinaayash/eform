@extends('layout.main')


@section('title', 'Non Organik')

@section('content') 
@section('subtitle', 'Data Permohonan Hak Akses Non Organik')

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
                <a href=""><button class="btn dark" style="width:100px"><i class="fa fa-refresh"></i>&nbsp;&nbsp;Refresh</button></a>
                <a target="_blank" href=""><button class="btn dark" style="width:100px"><i class="fa fa-print"></i>&nbsp;&nbsp;Print</button></a>
            </div>
        </div>
    </div>

 <div class="row">
                <div class="col-lg-12">
                    <div class="box box-primary bayangan">
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
                                            <td style="text-align:center;">FHA/NO/151/X/2019</td>
                                            <td><b>Taufik Riontona</b><br><small>25 Oktober 2019</small></td>
                                            <td><b>Baroqah Anton Sulaiman</b><br><small>Engineer, Civil Engineering (PMO)</small></td>
                                            <td>
                                            <b>VPN</b><br>
                                            <small>30 Juni 2020</small>
                                            </td>
                                            <td>
                                            <small class="label bg-blue" style="font-size:12px">Sudah disetujui atasan anda</small>
                                            </td>

                                            <td></td>
                                            <td>Sedang dikerjakan oleh PIC layanan</td>
                                            <td style="text-align:center;">
                                                <a target='_blank' href='form/form_nonorganik.php?hash=15132966718'><Button class="btn btn-sm btn-warning button" style="width:100px">Form Hak Akses</Button></a>
                                            </td>
                                        <tr>
                                            <td style="text-align:center;">2</td>
                                            <td style="text-align:center;">FHA/NO/150/X/2019</td>
                                            <td><b>Irianto Sihombing</b><br><small>24 Oktober 2019</small></td>
                                            <td><b>Yatmoko Nugroho</b><br><small>Department Head, Management Information System</small></td>
                                            <td>
                                            <b>VPN</b><br>
                                            <small>31 Oktober 2020</small>
                                            </td>
                                            <td>
                                            <small class="label bg-blue" style="font-size:12px">Sudah disetujui atasan anda</small>
                                            </td>

                                            <td></td>
                                            <td>Sedang dikerjakan oleh PIC layanan</td>
                                            <td style="text-align:center;">
                                            <a target='_blank' href='form/form_nonorganik.php?hash=15073282220'><Button class="btn btn-sm btn-warning button" style="width:100px">Form Hak Akses</Button></a>
                                            </td>
                                        <tr>
                                            <td style="text-align:center;">3</td>
                                            <td style="text-align:center;">FHA/NO/149/X/2019</td>
                                            <td><b>Muhammad Rosyid Ridlo</b><br><small>22 Oktober 2019</small></td>
                                            <td><b>Zulfikar Ali Imran</b><br><small>Department Head, Business Solutions Development</small></td>
                                            <td>
                                            <b>VPN</b><br>
                                            <small>31 Desember 2019</small>
                                            </td>
                                            <td>
                                            <small class="label bg-red" style="font-size:12px">Ditolak PIC layanan ICT</small>
                                            </td>

                                            <td>Yiyip Dwi Sapputra</td>
                                            <td>Untuk Akses VPN requester dari user organik nya </td>
                                            <td style="text-align:center;">
                                            <a target='_blank' href='form/form_nonorganik.php?hash=1493354727'><Button class="btn btn-sm btn-warning button" style="width:100px">Form Hak Akses</Button></a>
                                            </td>
                                        <tr>
                                            <td style="text-align:center;">4</td>
                                            <td style="text-align:center;">FHA/NO/148/X/2019</td>
                                            <td><b>Sigit Sutrisno</b><br><small>22 Oktober 2019</small></td>
                                            <td><b>Irpan</b><br><small>Department Head, Management Solutions Development</small></td>
                                            <td>
                                            <b>VPN</b><br>
                                            <small>01 Oktober 2020</small>
                                            </td>
                                            <td>
                                            <small class="label bg-blue" style="font-size:12px">Sudah disetujui atasan anda</small>
                                            </td>

                                            <td></td>
                                            <td>Sedang dikerjakan oleh PIC layanan</td>
                                            <td style="text-align:center;">
                                                <a target='_blank' href='form/form_nonorganik.php?hash=14869706721'><Button class="btn btn-sm btn-warning button" style="width:100px">Form Hak Akses</Button></a>
                                            </td>
                                            <tr>
                                            <td style="text-align:center;">5</td>
                                            <td style="text-align:center;">FHA/NO/147/X/2019</td>
                                            <td><b>Mohammad Iqbal</b><br><small>11 Oktober 2019</small></td>
                                            <td><b>Yatmoko Nugroho</b><br><small>Department Head, Management Information System</small></td>
                                            <td>
                                            <b>VPN</b><br>
                                            <small>31 Desember 2020</small>
                                            </td>
                                            <td>
                                            <small class="label bg-blue" style="font-size:12px">Sudah disetujui atasan anda</small>
                                            </td>

                                            <td></td>
                                            <td>Sedang dikerjakan oleh PIC layanan</td>
                                            <td style="text-align:center;">
                                                <a target='_blank' href='form/form_nonorganik.php?hash=14742027649'><Button class="btn btn-sm btn-warning button" style="width:100px">Form Hak Akses</Button></a>
                                            </td>
                                        <tr>
                                            <td style="text-align:center;">6</td>
                                            <td style="text-align:center;">FHA/NO/146/X/2019</td>
                                            <td><b>ACHMAD FEBRIYANTO</b><br><small>10 Oktober 2019</small></td>
                                            <td><b>Agus Arifin</b><br><small>Advisor, Quality System Management</small></td>
                                            <td>
                                            <b>VPN</b><br>
                                            <small>10 Oktober 2020</small>
                                            </td>
                                            <td>
                                            <small class="label bg-green" style="font-size:12px">Sudah bisa digunakan</small>
                                            </td>
                                            <td>Riandy Arizon</td>
                                            <td>vpn untuk akses fileshare sudah diaktifkan</td>
                                            <td style="text-align:center;">
                                                <a target='_blank' href='form/form_nonorganik.php?hash=14678907948'><Button class="btn btn-sm btn-warning button" style="width:100px">Form Hak Akses</Button></a>
                                            </td>
             							</tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>  </div>

@endsection

@section('js')
    <script>
        $(document).ready( function () {
                $('#exportTable').DataTable();
        } );
    </script>
@endsection