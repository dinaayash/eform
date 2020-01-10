@extends('layout.main')


@section('title', 'Non Organik')

@section('content')	
@section('subtitle', 'Edit Form Hak Aksess Non File Baru')

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
 

 <section class="content">
      <div class="row">
        <div class="col-md-12">
            <div class="box box-primary" style="margin-bottom:5px;">
                <div class="box-header with-border">
                    <h1 class="box-title"><b>Lengkapi Form Dibawah Ini</b></h1>
                </div>
                @foreach($editnon as $updt)
                <form action="/non-organik" method="post" id="myform" onSubmit="return validasi()">
                   {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $updt->id_hak_akses_NO }}"> <br/>
                <div class="row">
                    <div class="col-md-6">
                        <div class="box-body">
                        <div class="box box-default bayangan">
                            <div class="box-header with-border">
                              <h3 class="box-title">Data Pemohon</h3><img src="template/dist/img/one.png" width="20px" style="float:right;">
                            </div>
                                <div class="box-body">
                                <div class="form-group">
                                <label>Nama Pemohon</label>
                                <input type="text" class="form-control" id="nama_pemohon" name="pemohon" placeholder="" value="{{$user->username}}" readonly>
                                @if($errors->has('pemohon'))
                                <small class ="text-danger">harus diisi</small>
                                @endif
                                </div>
                                <!-- <div class="form-group">
                                  <input type="email" class="form-control" name="emailpemohon" placeholder="Email Pemohon" value="sigit.sutrisno@pgascom.co.id" readonly style="display:none">
                                </div> -->
                                <div class="form-group">
                                  <label>Jabatan</label>
                                  <input type="text" class="form-control" id="jabatan_p" name="jabatan_p" placeholder="Staff Profesional Developer" value="{{$updt->jabatan_pemohon}}">
                                  @if($errors->has('jabatan_p'))
                                  <small class ="text-danger">harus diisi</small>
                                  @endif
                                </div>
                                <div class="form-group">
                                <label>Satuan Kerja</label>
                                <input type="text" name="sat_kerja" id="sat_kerja" value=""  class="form-control" placeholder="" value="{{$updt->satuan_kerja}}">
                                </div>
                                
                                </div>
                            </div>
	<div class="box box-default bayangan">
    	<div class="box-header with-border">
    	<h3 class="box-title">Atasan Langsung</h3> <img src="template/dist/img/two.png" width="20px" style="float:right;">
    	</div>
    	<div class="panel-body">
   		<div class="form-group">
   		<label>Nama Atasan <b style="color:red;">*</b></label><br>
	    <table width="100%" >
    	<tr>
			<td width="100%">
 			<input name="nama_atasan" id="nama_atasan" value="{{$updt->nama_atasan}}" type="text" class="form-control">
            @if($errors->has('nama_atasan'))
            <small class ="text-danger">harus diisi</small>
            @endif
			</td>
 		<td><button class="btn btn-default" type="button" data-toggle="modal" data-target="#myModal" style="background-color:#4B515D; color:white"><i class="fa fa-search"></i>&nbsp; Cari</button></td>
 		 </tr>
        </table>
        </div>
        <!-- <div class="form-group">
        	<input name="emailatasan" id="emailatasan" value="" type="text" class="form-control" placeholder="Email Atasan" readonly style="display:none;">
        </div> -->
        <div class="form-group">
        <label>Jabatan</label>
        	<input name="jabatan_a" id="jabatan_a" placeholder="Jabatan" value="{{$updt->jabatan_atasan}}" type="text" class="form-control">
            @if($errors->has('jabatan_a'))
            <small class ="text-danger">harus diisi</small>
            @endif
            
        </div>
        </div>
        </div>
                            
        </div>
        </div>

        <div class="col-md-6">
        <div class="box-body">
        <div class="box box-default bayangan">
        <div class="box-header with-border">
        	<h3 class="box-title">Layanan ICT Yang Dibutuhkan</h3> <img src="template/dist/img/three.png" width="20px" style="float:right;">
        </div>
        <div class="panel-body">
        <div class="form-group">
        <label class="radio-inline">
    &nbsp;&nbsp;<input name="layanan" id="layanan" type="radio" class="vpn" value="vpn" onchange="cekLayanan($(this).val())" {{ $updt->layanan == 'vpn' ? 'checked' : '' }}>VPN
        </label>
        </div>
        <hr>
        <div class="form-group">
        <label class="radio-inline">
    &nbsp;&nbsp;<input name="layanan" id="layanan" type="radio" class="com2" value="com" onchange="cekLayanan($(this).val())" {{ $updt->layanan == 'com' ? 'checked' : '' }}>Communication
        </label>
        &nbsp;&nbsp;<select  name="jeniscommunication" id="jeniscommunication2" class="form-control jeniscommunication2" placeholder="Nama Fileshare" style="margin-top:10px; text-transform: capitalize; display:none" autofocus>
        <option>Office Communication</option>
        <option>IP Public</option>
        </select>
        </div>
        <hr>
        <div class="form-group">
        <label class="radio-inline">
    &nbsp;&nbsp;<input name="layanan" id="layanan" type="radio" class="fileshare2" value="fileshare" onchange="cekLayanan($(this).val())" {{ $updt->layanan == 'fileshare' ? 'checked' : '' }}>Fileshare
        </label>
     &nbsp;&nbsp;<input name="namafileshare" type="text" id="namafileshare2" class="form-control namafileshare2" placeholder="Nama Fileshare" style="margin-top:10px; text-transform: capitalize; display:none" autofocus>
      	</div>
		
        <table class="table table-bordered">
            <thead>
            <tr>
        <td style="background-color:#428bca; color:white;">&nbsp;&nbsp;Aplikasi</td>
            </tr>
            </thead>
            <tbody>
            <tr>
        <td>
         <div class="panel-body">
         	<label class="radio-inline">
                <input name="layanan" id="layanan" type="radio" class="oracle" value="oracle" onchange="cekLayanan($(this).val())" {{ $updt->layanan == 'oracle' ? 'checked' : '' }}>Oracle
            </label>
            	<select name="idaplikasi" type="text" id="namaaplikasi" class="form-control namaaplikasi pilih4" value="" placeholder="Nama Aplikasi" style="margin-top:10px; display:none">
        <option value="CRM Siebel">CRM Siebel</option>
        <option value="Eprocurement ">Eprocurement </option>
        <option value="Hyperion">Hyperion</option>
        <option value="Oracle - Account Payables">Oracle - Account Payables</option>
        <option value="Oracle - Account Receivables">Oracle - Account Receivables</option>
        <option value="Oracle - AR EBS">Oracle - AR EBS</option>
        <option value="Oracle - Arus Kas">Oracle - Arus Kas</option>
        <option value="Oracle - Cash Management">Oracle - Cash Management</option>
        <option value="Oracle - Cash Management  EBS">Oracle - Cash Management  EBS</option>
        <option value="Oracle - Fixed Asset">Oracle - Fixed Asset</option>
        <option value="Oracle - General Ledger">Oracle - General Ledger</option>
        <option value="Oracle - General Ledger Budget">Oracle - General Ledger Budget</option>
        <option value="Oracle - Inventory">Oracle - Inventory</option>
        <option value="Oracle - Purchasing">Oracle - Purchasing</option>
        <option value="Oracle HRMS">Oracle HRMS</option>
        </select>
        <input name="responsibiliti" type="text" id="respon" class="form-control respon" placeholder="Responsibility" style="margin-top:10px; display:none">
        
        <br>
        <label class="radio-inline" style="margin-top:10px;">
        	<input name="layanan" type="radio" class="nonoracle" value="nonoracle" onchange="cekLayanan($(this).val())" {{$updt->layanan == 'nonoracle' ? 'checked' : ''}}>Non Oracle
        </label>
        <select name="idaplikasi2" type="text" id="namaaplikasi2" class="form-control namaaplikasi2" value="" placeholder="Nama Aplikasi" style="margin-top:10px; display:none">
        	<option value="GASPEX">GASPEX</option>
        	<option value="Business Intelligence App">Business Intelligence App</option>
        	<option value="E-Auction">E-Auction</option>
        	<option value="Popay">Popay</option>
        	<option value="Enterprise Asset Management">Enterprise Asset Management</option>
        	<option value="AMI / Payment Engine">AMI / Payment Engine</option>
        	<option value="Simari">Simari</option>
        	<option value="On SPEED">On SPEED</option>
        	<option value="E-SMS">E-SMS</option>
        </select>
    	</div>
    	</td>
        </tr>
        </tbody>
        </table>
         <div class="form-group">
                <label>Masa Berlaku <b style="color:red;">*</b></label>
                <div class="input-group date">
                <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
                </div>
                <input name="masaberlaku" type="text" class="form-control datepicker" id="datepicker">
                </div>
                </div>
        <div class="form-group">
        <label>Keterangan, Keperluan atau Alasan <b style="color:red;">*</b></label>
            <textarea class="form-control" rows="3" maxlength="1000" name="alasan" id="alasan">{{$updt->alasan}}</textarea>
        </div>
        </div>
        </div>
        <button name="simpan" type="submit" class="btn btn-primary" style="margin-bottom:10px; width:100px">Submit Form</button>
        </div>
        </div>
      	</div>
        </form>
        @endforeach
        </div>
        </div>
        </div>
    </section>


    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" style="background-color:#0099CC; color:white;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><b>Data Pegawai</b></h4>
        </div>
        <div class="modal-body">
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-hover table-striped">
                    <thead style="background-color:#bbdefb; color:black;">
                        <tr>
                          <th width="5px" style="text-align:center;">No</th>
                          <th width="50px" style="text-align:center;">NIPG</th>
                          <th width="100px">Nama</th>
                          <th width="150px">Jabatan</th>
                          <th width="10px" style="text-align:center;">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($dataAtasan as $key => $data)
                        <tr>
                          <td style="text-align:center;">{{$key+1}}</td>
                          <td style="text-align:center;">{{$data->nipg!='-'?$data->nipg:$data->username}}</td>
                          <td>{{$data->nama}}</td>
                          <td>{{$data->jabatan}}</td>
                          <td style="text-align:center;">
                              <button class="btn btn-success btn-sm pilih2" data-namaapproval="{{$data->nama}}" data-jabatanapproval="{{$data->jabatan}}" data-emailapproval="{{$data->email}}" data-satkerapproval="">Pilih</button>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                </table>
                </div>    
        </div>
      </div>
    </div>
  </div>    
@endsection


@section('js')
    <script>

        $(document).ready( function () {
                $('#example1').DataTable();
        });

        $('.pilih2').on('click', function(){
            $('#nama_atasan').val($(this).data('namaapproval'));
            $('#jabatan_a').val($(this).data('jabatanapproval'));
            $('#emailatasan').val($(this).data('emailapproval'));
            $('#myModal').modal('hide');
        });


        $(function(){
        $(".datepicker").datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
        });
    });


    function cekLayanan(value) {
        if(value == "vpn") {
            $(".namafileshare2").hide(500);
            $(".namaaplikasi").hide(500);
            $(".owners").hide(500);
            $(".respon").hide(500);
            $(".cari").hide(500);
            $(".namaaccount").hide(500);
            $(".namajabatan").hide(500);
            $(".namaaccount2").hide(500);
            $(".namajabatan2").hide(500);
            $(".tanggal").hide(500);
            $(".namaperpanjang").hide(500);
            $(".jabatanperpanjang").hide(500);
            $(".tanggal2").hide(500);
            $(".namaaplikasi2").hide(500);
            $(".software").hide(500);
            $(".emailgroup").hide(500);
            $(".group").hide(500);
            $(".jeniscommunication2").hide(500);
            $(".perintah").hide(500);
            document.getElementById("namafileshare2").focus(1);
        } else if(value == "com") {
            $(".namafileshare2").hide(500);
            $(".namaaplikasi").hide(500);
            $(".owners").hide(500);
            $(".respon").hide(500);
            $(".cari").hide(500);
            $(".namaaccount").hide(500);
            $(".namajabatan").hide(500);
            $(".namaaccount2").hide(500);
            $(".namajabatan2").hide(500);
            $(".tanggal").hide(500);
            $(".namaperpanjang").hide(500);
            $(".jabatanperpanjang").hide(500);
            $(".tanggal2").hide(500);
            $(".namaaplikasi2").hide(500);
            $(".software").hide(500);
            $(".emailgroup").hide(500);
            $(".group").hide(500);
            $(".perintah").hide(500);
            $(".jeniscommunication2").show(500);
            document.getElementById("namafileshare2").focus(1);
        } else if(value == "fileshare") {
            $(".namafileshare2").show(500);
            $(".namaaplikasi").hide(500);
            $(".owners").hide(500);
            $(".respon").hide(500);
            $(".cari").hide(500);
            $(".namaaccount").hide(500);
            $(".namajabatan").hide(500);
            $(".namaaccount2").hide(500);
            $(".namajabatan2").hide(500);
            $(".tanggal").hide(500);
            $(".namaperpanjang").hide(500);
            $(".jabatanperpanjang").hide(500);
            $(".tanggal2").hide(500);
            $(".namaaplikasi2").hide(500);
            $(".software").hide(500);
            $(".emailgroup").hide(500);
            $(".group").hide(500);
            $(".perintah").hide(500);
            $(".jeniscommunication2").hide(500);
        } else if(value == "oracle") {
            $(".namafileshare2").hide(500);
            $(".namaaplikasi").show(500);
            $(".owners").hide(500);
            $(".respon").show(500);
            $(".cari").hide(500);
            $(".namaaccount").hide(500);
            $(".namajabatan").hide(500);
            $(".namaaccount2").hide(500);
            $(".namajabatan2").hide(500);
            $(".tanggal").hide(500);
            $(".namaperpanjang").hide(500);
            $(".jabatanperpanjang").hide(500);
            $(".tanggal2").hide(500);
            $(".namaaplikasi2").hide(500);
            $(".software").hide(500);
            $(".emailgroup").hide(500);
            $(".group").hide(500);
            $(".perintah").show(500); 
            $(".jeniscommunication2").hide(500);
        } else if(value == "nonoracle") {
            $(".namafileshare2").hide(500);
            $(".namaaplikasi").hide(500);
            $(".owners").hide(500);
            $(".respon").hide(500);
            $(".cari").hide(500);
            $(".namaaccount").hide(500);
            $(".namajabatan").hide(500);
            $(".namaaccount2").hide(500);
            $(".namajabatan2").hide(500);
            $(".tanggal").hide(500);
            $(".namaperpanjang").hide(500);
            $(".jabatanperpanjang").hide(500);
            $(".tanggal2").hide(500);
            $(".namaaplikasi2").show(500);
            $(".software").hide(500);
            $(".emailgroup").hide(500);
            $(".group").hide(500);
            $(".perintah").hide(500); 
            $(".jeniscommunication2").hide(500);
            document.getElementById("namaaplikasi2").focus(1);
        } else {
            $(".namafileshare2").hide(500);
            $(".namaaplikasi").hide(500);
            $(".owners").hide(500);
            $(".respon").hide(500);
            $(".cari").hide(500);
            $(".namaaccount").hide(500);
            $(".namajabatan").hide(500);
            $(".namaaccount2").hide(500);
            $(".namajabatan2").hide(500);
            $(".tanggal").hide(500);
            $(".namaperpanjang").hide(500);
            $(".jabatanperpanjang").hide(500);
            $(".tanggal2").hide(500);
            $(".namaaplikasi2").hide(500);
            $(".software").hide(500);
            $(".emailgroup").hide(500);
            $(".group").hide(500);
            $(".perintah").hide(500);
            $(".jeniscommunication2").hide(500);
        }
    }
    </script>
@endsection


