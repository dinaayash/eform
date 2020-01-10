@extends('layout.main')


@section('title', 'Preventive')

@section('content') 
@section('subtitle', 'Form Preventive')

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
    
</head>

<style>
    .lobster { 
        font-family: Lobster; 
    }    
    .fontsaya{   
        font-family: 'Fredoka One', cursive;
    }
    .bayangan{
        box-shadow: 0 0 10px #aaa;
    }
    .link{
        text-decoration: none;
    }

</style>

    
 <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
            <div class="box box-primary bayangan" style="margin-bottom:4px;">
                <div class="box-header with-border">
                    <h1 class="box-title"><b>Lengkapi Form Dibawah Ini</b></h1>
                </div>
                <!-- FORM -->
                <form action="/preventive" method="post" id="myform" onSubmit="return validasi()">
                     {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-6">
                          <div class="box-body">
                            <div class="box box-default bayangan">
                            <div class="box-header with-border">
                              <h3 class="box-title">Data Pengguna</h3><img src="template/dist/img/one.png" width="30px" style="float:right;">
                            </div>
                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Nama Pengguna</label><br>
                                         <input type="text" class="form-control" name="namauser" placeholder="" value="{{ Auth::user()->username }}" readonly>
                                    </div>

                                    <div class="form-group">
                                      <label>NIPG</label>
                                      <input name="nipg" value="{{ Auth::user()->nipg }}" type="text" class="form-control" placeholder="NIPG" readonly>
                                    </div>
                                    <div class="form-group">
                                      <label>Jabatan</label>
                                      <input name="jabatanpengguna" value="{{ Auth::user()->jabatan }}" type="text" class="form-control" placeholder="Jabatan"readonly>
                                    </div>
                                    <div class="form-group">
                                      <label>Satuan Kerja</label>
                                      <input name="divisi" value="{{ Auth::user()->satuan_kerja }}" type="text" class="form-control" placeholder=""readonly>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="box box-default bayangan">
                                <div class="box-header with-border">
                                  <h3 class="box-title">Hardware</h3><img src="template/dist/img/two.png" width="30px" style="float:right;">
                                </div>
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>No HBB</label>
                                            <input type="text" class="form-control" value="" placeholder="No HBB" name="nohbb" id="nohbb">
                                        </div>
                                        <div class="form-group">
                                            <label>Computer Name</label>
                                            <input type="text" class="form-control" value="" placeholder="Computer Name" name="comname" id="comname">
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Perangkat</label><br>
                                            <input type="text" class="form-control" value="" placeholder="Jenis Perangkat" name="jenisperangkat" id="jenisperangkat">
                                        </div>
                                        <div class="form-group">
                                            <label>Tahun Perolehan</label>
                                            <input type="text" class="form-control" value="" placeholder="Tahun Perolehan" name="tahunperolehan" id="tahunperolehan">
                                        </div>
                                        <div class="form-group">
                                            <label>Brand</label>
                                            <input type="text" class="form-control" value="" placeholder="Brand" name="brand" id="brand">
                                        </div>
                                        <div class="form-group">
                                            <label>Type</label>
                                            <input type="text" value="" class="form-control" placeholder="Type" name="tipe" id="tipe">
                                        </div>
                                        <div class="form-group">
                                            <label>Serial Number</label>
                                            <input class="form-control" value="" placeholder="Serial Number" name="serialnumber" id="serialnumber">
                                        </div>
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label>Memory</label>
                                                <input class="form-control" value="" placeholder="Memory" name="memory" id="memory">
                                            </div>
                                            <div class="form-group">
                                                <label>Hardisk</label>
                                                <input class="form-control" value="" placeholder="Hardisk" name="hardisk" id="hardisk">
                                            </div>
                                            <div class="form-group">
                                                <label>Processor</label>
                                                <input class="form-control" value="" placeholder="Processor" name="processor" id="processor">
                                            </div>
                                            <div class="form-group">
                                                <label>Keyboard / Mouse :</label>
                                                <div class="checkbox" style="margin-top:-5px; margin-left:5px;">
                                                <label><input type="checkbox" name="keyboard" id="keyboard" value="OK">OK</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Power Supply / Charger :</label>
                                                <div class="checkbox" style="margin-top:-5px; margin-left:5px;">
                                                  <label><input type="checkbox" name="powersupply" id="powersupply" value="OK">OK</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Monitor :</label>
                                                <div class="checkbox" style="margin-top:-5px; margin-left:5px;">
                                                  <label><input type="checkbox" name="monitor" id="monitor" value="OK">OK</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Battery :</label>
                                                <div class="checkbox" style="margin-top:-5px; margin-left:5px;">
                                                  <label><input type="checkbox" name="battery" id="battery" value="OK">OK</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              
                              <div class="box box-default bayangan">
                                <div class="box-header with-border">
                                  <h3 class="box-title">IP Phone</h3><img src="template/dist/img/three.png" width="30px" style="float:right;">
                                </div>
                                    <div class="box-body">
                                            <div class="form-group">
                                              <label>Extension</label>
                                              <input type="text" class="form-control" value="" placeholder="Extension" name="extension" id="extension">
                                            </div>
                                            <div class="form-group">
                                                <label>Merk</label><br>
                                                <input type="text" class="form-control" value="" placeholder="Jenis IP Phone" name="jenisipphone" id="jenisipphone">
                                            </div>
                                            <div class="form-group">
                                                <label>Merk</label><br>
                                                <input type="text" class="form-control" value="" placeholder="Tipe IP Phone" name="tipeipphone" id="tipeipphone">
                                            </div>
                                            <div class="form-group">
                                                <label>Handset :</label>
                                                <div class="checkbox" style="margin-top:-5px; margin-left:5px;">
                                                  <label><input type="checkbox" name="handset" value="OK">OK</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Test Call :</label>
                                                <div class="checkbox" style="margin-top:-5px; margin-left:5px;">
                                                  <label><input type="checkbox" name="testcall" value="OK" id="testcall">OK</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Mic :</label>
                                                <div class="checkbox" style="margin-top:-5px; margin-left:5px;">
                                                  <label><input type="checkbox" name="mic" value="OK" id="mic">OK</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Speaker :</label>
                                                <div class="checkbox" style="margin-top:-5px; margin-left:5px;">
                                                  <label><input type="checkbox" name="speaker" value="OK" id="speaker">OK</label>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                          <div class="box-body">
                            <div class="box box-default bayangan">
                                <div class="box-header with-border">
                                  <h3 class="box-title">Network</h3><img src="template/dist/img/four.png" width="30px" style="float:right;">
                                </div>
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Mac Address Wifi</label>
                                            <input type="text" class="form-control" value="" placeholder="Mac Address" name="macaddress" id="macaddress">
                                        </div>
                                        <div class="form-group">
                                            <label>IP Address</label>
                                            <input type="text" class="form-control" placeholder="IP Adrress" value="" name="ipaddress" id="ipaddress" >
                                        </div>
                                        <div class="form-group">
                                            <label>Test Ping Proxy</label>
                                            <div class="checkbox" style="margin-top:-5px; margin-left:5px;">
                                            <label><input type="checkbox" name="pingproxy" value="OK" id="pingproxy">OK</label>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                              <div class="box box-default bayangan">
                                <div class="box-header with-border">
                                  <h3 class="box-title">Software</h3><img src="template/dist/img/five.png" width="30px" style="float:right;">
                                </div>
                                    <div class="box-body">
                                        <div class="form-group">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th style="background-color:#428bca; color:white;"><center>Sistem Operasi</center></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control" placeholder="Sistem Operasi" value="" name="systemoperasi" id="systemoperasi">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tipe</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control" placeholder="Tipe" value="" name="jenisos" id="jenisos" >
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Instal Ulang</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control" placeholder="Instal Ulang" value="" name="instalos" id="instalos">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        
                                        <div class="form-group">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th style="background-color:#428bca; color:white;"><center>Microsoft Office</center></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control" placeholder="Office" value="" name="office" id="office">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tipe</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control" placeholder="Tipe" value="" name="tipeoffice" id="tipeoffice">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Instal Ulang</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control" placeholder="Instal Ulang" value="" name="instaloffice" id="instaloffice">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            
                                        <div class="form-group">
                                            <label>Browser</label><br>
                                            <input type="text" class="form-control" value="" placeholder="Browser" name="browser" id="browser">
                                        </div>
                                        <div class="form-group">
                                                <label>Fusion</label>
                                                <div class="checkbox" style="margin-top:-5px; margin-left:5px;">
                                                  <label><input type="checkbox" name="fusion" id="fusion" value="Instal">Instal</label>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <label>7 zip</label>
                                                <div class="checkbox" style="margin-top:-5px; margin-left:5px;">
                                                  <label><input type="checkbox" name="zip" id="zip" value="Instal">Instal</label>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <label>Adobe</label>
                                                <div class="checkbox" style="margin-top:-5px; margin-left:5px;">
                                                  <label><input type="checkbox" name="adobe" id="adobe" value="Instal">Instal</label>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <label>Antivirus</label>
                                                <div class="checkbox" style="margin-top:-5px; margin-left:5px;">
                                                  <label><input type="checkbox" name="antivirus" id="antivirus" value="Instal">Instal</label>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <label>Cookies / Temp</label>
                                                <div class="checkbox" style="margin-top:-5px; margin-left:5px;">
                                                  <label><input type="checkbox" name="cookies" id="cookies" value="Clear">Clear</label>
                                                </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Softwares Tambahan</label>
                                            <textarea class="form-control" rows="3" name="softwarestambahan" id="softwarestambahan" placeholder="Softwares Tambahan"></textarea>
                                        </div>
                                    </div>
                                  
                            </div>
                              
                            <div class="form-group">
                              <input type="hidden" class="form-control" name="namateknisi" value="Sigit Sutrisno" placeholder="Nama Teknisi">
                            </div>
                            <div class="form-group">
                              <input type="hidden" class="form-control" name="emailteknisi" value="sigit.sutrisno@pgascom.co.id" placeholder="Email Teknisi">
                            </div>
                        </div>
                    </div>
                              <div class="box box-default bayangan">
                                <div class="box-header with-border">
                                  <h3 class="box-title">Tahap Preventive</h3><img src="template/dist/img/six.png" width="30px" style="float:right;">
                                </div>
                                <div class="box-body">
                                    <div class="form-group">
                                    <label>Tahap</label>
                                    <select class="form-control" id="semester" name="semester" placeholder="semester">
                                        <option></option>
                                        <option>Semester 1</option>
                                        <option>Semester 2</option>
                                    </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Tahun</label>
                                        <input type="text" class="form-control" placeholder="Tahun" name="tahun" id="tahun">
                                    </div>
                                </div>
                            </div>
                           <div class="form-group">
                            <div class="col-md-2" style="margin-left:-15px;"> <button type="submit" class="btn btn-success" name="simpan"><b>Submit Form</b></button></div>
                              </div>
                            </div>
                    </div>
                </div>
                </form>    
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