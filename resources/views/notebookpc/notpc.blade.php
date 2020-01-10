@extends('layout.main')


@section('title', 'Notebook dan PC')

@section('content') 
@section('subtitle', 'Data Notebook dan PC')

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
                    <a target=""><button type="button" class="btn dark" style="width:100px; margin-bottom:0px;"><i class="fa fa-print"></i>&nbsp;&nbsp;Cetak</button></a>
                    <a href="{{ route('create-notpc') }}"><button type="button" class="btn dark" style="width:150px; float:right; margin-bottom:0px"><i class="fa fa-file-text"></i>&nbsp;&nbsp;Tambah Data</button></a>
                </div>
            </div>
        </div>

<div class="row">
        <div class="col-lg-12">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="exportTable" class="table table-bordered table-hover">

                    <thead style="background-color:#add8e6; color:black;">
                                    <tr>
                                        <th width="3%" style="text-align:center;">No</th>
                                        <th width="15%" style="text-align:center;">Pengguna</th>
                                        <th width="12%" style="text-align:center;">Hardware</th>
                                        <th width="12%" style="text-align:center;" width="100px">IP Phone</th>
                                        <th width="12%" style="text-align:center;">Network</th>
                                        <th width="18%" style="text-align:center;">Software</th>
                                        <th width="18%" style="text-align:center;">Keterangan</th>
                                        <th width="10%" width="100px" style="text-align:center;">Aksi</th>
                                     </tr>
                    </thead>

 <tbody>
                			<tr>
                				<td style="text-align:center;">1</td>
                                        <td>
                                            <b>NIPG :</b><br>
                                            0009832381<br>
                                            <b>Nama :</b><br>
                                            Arif Istiadi<br>
                                            <b>Jabatan :</b><br>
                                            Perbantuan PT PGAS Solution - <br>
                                            <b>Divisi :</b><br>
                                            Perbantuan PT PGAS Solution<br>
                                            <b>Area Kerja :</b><br>
                                            RD1 RT<br>
                                        </td>
                                        <td>
                                            <b>No HBB :</b><br>
                                            602150100<br>
                                            <b>Computername :</b><br>
                                            PGN4PC20150011<br>
                                            <b>Jenis :</b><br>
                                            Komputer<br>
                                            <b>Tahun :</b><br>
                                            2016<br>
                                            <b>Brand :</b><br>
                                            Lenovo<br>
                                            <b>Tipe :</b><br>
                                            M93z<br>
                                            <b>Serial Number :</b><br>
                                            PC07UB7X<br>
                                            <b>Memory :</b><br>
                                            8 GB<br>
                                            <b>Hardisk :</b><br>
                                            1 TB<br>
                                            <b>Processor :</b><br>
                                            Intel i7<br>
                                            <b>UPS :</b><br>
                                            <br>
                                        </td>
                                        <td>
                                            <b>Extension :</b><br>
                                            <br>
                                            <b>Merk :</b><br>
                                            Polycom<br>
                                            <b>Tipe :</b><br>
                                            CX-300<br>
                                        </td>
                                        <td>
                                            <b>Mac Address :</b><br>
                                            44-39-C4-36-F2-B3<br>
                                            <b>IP Address :</b><br>
                                            192.168.96.7<br>
                                        </td>
                                        <td>
                                            <b>Sistem Operasi :</b><br>
                                            Windows 8<br>
                                            <b>Tipe :</b><br>
                                            64 Bit<br>
                                            <b>Instal Ulang :</b><br>
                                            Belum Pernah<br>
                                            <b>Microsoft Office :</b><br>
                                            Office 2013<br>
                                            <b>Tipe :</b><br>
                                            64 Bit<br>
                                            <b>Instal Ulang :</b><br>
                                            Belum Pernah<br>
                                            <b>Browser :</b><br>
                                            Google Chrome, Mozilla Firefox dan Internet Explor<br>
                                            <b>Software Standar :</b><br>
                                            7 Zip, Adobe Flash, Adobe Reader, Ms. Office 2013, Lync, Symantec, Firefox, Fussion Inventory, Tight VNC, Silverlight<br>
                                            <b>Software Tambahan :</b><br>
                                            ELO 2011, Auto CAD 2013<br>
                                        </td>
                                        <td>
                                            Digunakan Oleh Team Jaringan Section 6<br>
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
                                        <td>
                                            <b>NIPG :</b><br>
                                            0009832381<br>
                                            <b>Nama :</b><br>
                                            Arif Istiadi<br>
                                            <b>Jabatan :</b><br>
                                            Perbantuan PT PGAS Solution - <br>
                                            <b>Divisi :</b><br>
                                            Perbantuan PT PGAS Solution<br>
                                            <b>Area Kerja :</b><br>
                                            RD1 RT<br>
                                        </td>
                                        <td>
                                            <b>No HBB :</b><br>
                                            602110473<br>
                                            <b>Computername :</b><br>
                                            PGN4PC20110030<br>
                                            <b>Jenis :</b><br>
                                            Komputer<br>
                                            <b>Tahun :</b><br>
                                            2011<br>
                                            <b>Brand :</b><br>
                                            Dell<br>
                                            <b>Tipe :</b><br>
                                            Optiplex 990<br>
                                            <b>Serial Number :</b><br>
                                            F6R492S<br>
                                            <b>Memory :</b><br>
                                            4 GB<br>
                                            <b>Hardisk :</b><br>
                                            1 TB<br>
                                            <b>Processor :</b><br>
                                            Intel i7<br>
                                            <b>UPS :</b><br>
                                            APC 625 VA<br>
                                        </td>
                                        <td>
                                            <b>Extension :</b><br>
                                            <br>
                                            <b>Merk :</b><br>
                                            -<br>
                                            <b>Tipe :</b><br>
                                            -<br>
                                        </td>
                                        <td>
                                            <b>Mac Address :</b><br>
                                            78-2B-CB-A1-C3-13<br>
                                            <b>IP Address :</b><br>
                                            192.168.96.203<br>
                                        </td>
                                        <td>
                                            <b>Sistem Operasi :</b><br>
                                            Windows 7 Pro<br>
                                            <b>Tipe :</b><br>
                                            64 Bit<br>
                                            <b>Instal Ulang :</b><br>
                                            Belum Pernah<br>
                                            <b>Microsoft Office :</b><br>
                                            Office 2013<br>
                                            <b>Tipe :</b><br>
                                            64 Bit<br>
                                            <b>Instal Ulang :</b><br>
                                            Belum Pernah<br>
                                            <b>Browser :</b><br>
                                            Google Chrome, Mozilla Firefox dan Internet Explor<br>
                                            <b>Software Standar :</b><br>
                                            7 Zip, Adobe Flash, Adobe Reader, Ms. Office 2013, Lync, Symantec, Firefox, Fussion Inventory, Tight VNC, Silverlight<br>
                                            <b>Software Tambahan :</b><br>
                                            <br>
                                        </td>
                                        <td>
                                            Digunakan Oleh Team Jaringan Section 6<br>
                                        </td>
                                        <td style="text-align:center;">
                                            <div class="btn-group-justified">
                                                <a href=""><button type= "button" class="btn btn-danger"><i class="fa fa-trash" width="23px;"></i></button></a>
                                                    &nbsp;
                                                <a href=""><button type= "button" class="btn btn-warning"><i class="fa fa-edit" width="23px;"></i></button></a>
                                            </div>
                                        </td>
  </tbody>
                            </table>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
      <!-- /.row -->
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