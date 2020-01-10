@extends('layout.main')


@section('title', 'Perubahan')

@section('content')	
@section('subtitle', 'Perubahannn')

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary" style="margin-bottom:-10px">
                <div class="box-header with-border">
                    <h1 class="box-title"><b>Lengkapi Form Dibawah Iniiii</b></h1>
                </div>
                 <form action="/perubahan" method="post" id="myform" onSubmit="return validasi()">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="box-body">
                                <div class="box box-default bayangan">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Data Pemohon</h3><img src="template/dist/img/one.png" width="20px"
                                                                                    style="float:right">
                                    </div>
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Nama Pemohon</label>
                                            <!-- <input style="display:none" type="text" class="form-control" name="nipg"
                                                   value="PGASCOM2" > -->
                                            <input type="text" class="form-control" name="namapemohon"
                                                   placeholder="" value="{{$user->username}}" readonly>
                                        </div>
                                        <!-- <div class="form-group">
                                            <input type="email" class="form-control" name="emailpemohon"
                                                   value="sigit.sutrisno@pgascom.co.id" 
                                                   style="display:none">
                                        </div> -->
                                        <div class="form-group">
                                            <label>Jabatan</label>
                                            <input type="text" class="form-control" name="jabatanpemohon" placeholder="Staff Profesional Developer" >
                                        </div>
                                        <div class="form-group">
                                            <label>Divisi</label>
                                            <input type="text" class="form-control" name="divisipemohon" placeholder="Information Communication Technology" >
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
        <table width="100%">
        	<tr>
                <td width="100%">
                	<input name="nipgatasan" id="nipgatasan" value="" type="text" class="form-control">
                <td>
                    <button class="btn btn-default btn-flat" type="button" data-toggle="modal" data-target="#myModal" style="background-color:#4B515D; color:white"><iclass="fa fa-search"></i>&nbsp; Cari
                	</button>
               	</td>
            </tr>
      	</table>
    </div>
    <!-- <div class="form-group">
                    <input name="emailatasan" id="emailatasan" value="" type="text" class="form-control" placeholder="Email Atasan" style="display:none;">
    </div> -->
    <div class="form-group">
        		<label>Jabatan</label>
        			<input name="jabatanatasan" id="jabatanatasan" placeholder="Jabatan" value="" type="text" class="form-control">
                    <input name="satuankerja" id="satuankerja" value="" type="text" class="form-control" placeholder="Satuan Kerja" style="display:none;">
    </div>
        </div>
            </div>
            <div class="box box-default bayangan">
                <div class="box-header with-border">
                    <h3 class="box-title">Permintaan</h3><img src="template/dist/img/three.png" width="20px"style="float:right">
                </div>
        <div class="panel-body">
            <div class="form-group">
                <label>Proyek/Module <b style="color:red;">*</b></label>
                    <input type="text" name="namaproyek" id="namaproyek" class="form-control"placeholder="">
    	</div>
        <div class="form-group">
           	<label>Deskripsi Perubahan <b style="color:red;">*</b></label>
                <textarea class="form-control" maxlength="500" rows="3" placeholder="" id="deskripsi" name="deskripsi"></textarea>
        </div>
		<div class="form-group">
            <label>Perubahan Diharapkan Pada Tanggal <b style="color:red;">*</b></label>
               	<div class="input-group date">
                    <div class="input-group-addon">
                      	<i class="fa fa-calendar"></i>
                    </div>
					<input type="text" class="form-control datepicker" id="datepicker" name="tanggal">
                </div>
        </div>
		<div class="form-group">
            <label>Alasan Perubahan <b style="color:red;">*</b></label>
                <textarea class="form-control" rows="3" placeholder="" name="alasan" id="alasan"></textarea>
 		</div>
            </div>
               	</div>
                    </div>
                        </div>
	<div class="col-lg-6">
        <div class="box-body">
            <div class="box box-default bayangan">
                <div class="box-header with-border">
                    <h3 class="box-title">Evaluasi Implikasi Perubahan</h3><img src="template/dist/img/four.png" width="20px" style="float:right">
                </div>
    <div class="panel-body">
        <div class="table-responsive">
           	<table class="table">
                <tr>
                	<td class="bayangan" colspan="3" style="background-color:#428bca; color:white;">&nbsp;&nbsp;Tipe Perubahan
                    </td>
                </tr>
    <tbody>
        <tr>
            <td width="50%">
            	<label class="checkbox-inline"><input name="tipe_perubahan[]" value="Aplikasi" id="tipeperubahan" type="checkbox">Aplikasi</label>
            </td>
            <td width="50%">    
            <label class="checkbox-inline"><input name="tipe_perubahan[]" value="Hardware" id="tipeperubahan" type="checkbox">Hardware</label>
            </td>
        </tr>
        <tr>   
        	<td width="50%"><label class="checkbox-inline"><input name="tipe_perubahan[]" value="Shutdown Terjadwal" id="tipeperubahan" type="checkbox">Shutdown Terjadwal</label></td>  

        	<td width="50%"><label class="checkbox-inline"><input name="tipe_perubahan[]" value="Database" id="tipeperubahan" type="checkbox">Database</label>
        	</td>
        </tr> 
        <tr>
            <td width="50%"><label class="checkbox-inline"><input name="tipe_perubahan[]" value="Network" id="tipeperubahan" type="checkbox">Network</label></td>
            <td width="50%"><label class="checkbox-inline"><input name="tipe_perubahan[]" value="Procedure" id="tipeperubahan" type="checkbox">Procedure</label></td>
        </tr>
        <tr>
        	<td width="50%"><label class="checkbox-inline"><input name="tipe_perubahan[]" value="Security" id="tipeperubahan" type="checkbox">Security</label></td>
        	<td width="50%">&nbsp;</td>
       	</tr>
    </tbody>
        </table>
            </div>
    <div class="table-responsive">
        <table class="table">
            <tr>
               	<td colspan="2" class="bayangan" style="background-color:#428bca; color:white;">&nbsp;&nbsp;Prioritas Perubahan
                </td>
            </tr>
            <tr> 
				<td width="50%"><label class="radio-inline"><input type="radio" name="optprioritas" id="prioritas" value="Penting">Penting</label>
				</td>
                <td width="50%"><label class="radio-inline"><input type="radio" name="optprioritas" id="prioritas" value="Tinggi">Tinggi</label>
                </td>
            </tr>
            <tr>
            	<td width="50%"><label class="radio-inline"><input type="radio" name="optprioritas" id="prioritas" value="Menengah">Menengah</label>
             	</td>     
     			<td width="50%"><label class="radio-inline"><input type="radio" name="optprioritas" id="prioritas" value="Rendah">Rendah</label>
     			</td>
            </tr>
        </table>
    </div>
    <div class="table-responsive">
        <table class="table">
            <tr>  
            	<td colspan="3" class="bayangan" style="background-color:#428bca; color:white;">&nbsp;&nbsp;Dampak Perubahan
                </td>  
            </tr>
            <tr>
                <td width="50%"><label class="radio-inline"><input type="radio" name="optdampak" id="dampak" value="Kecil">Kecil</label> 
                </td> 
            	<td width="50%"><label class="radio-inline"><input type="radio" name="optdampak" id="dampak" value="Menengah">Menengah</label>
    			</td>
            </tr>
            <tr>
    			<td colspan="2"><label class="radio-inline"><input type="radio" name="optdampak" id="dampak"value="Besar">Besar</label>
    			</td>
            </tr>
        </table>
    </div>
 	<div class="form-group">
                <label>Lingkungan Yang Terkena Dampak</label>
                    <input type="text" class="form-control" placeholder="" name="lingkungan">
  	</div>
  	<div class="form-group">
                <label>Diskripsi Rencana Test</label>
                    <textarea class="form-control" rows="3" placeholder="" name="deskripsitest"></textarea>
    </div>
    <div class="form-group">
                <label>Diskripsi Rencana Rollback</label>
                    <textarea class="form-control" rows="3" placeholder="" name="deskripsirollback"></textarea>
    </div>
    </div>
   	</div>
   		<button name="simpan" type="submit" class="btn btn-primary btn-flat"
                                        style="margin-bottom:10px;">Submit Form
        </button>
    					</div>
                    </div>
                </div>
            </form>
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
                        @foreach($dataAtas as $key => $data)
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
        $('#nipgatasan').val($(this).data('namaapproval'));
        $('#jabatanatasan').val($(this).data('jabatanapproval'));
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
    </script>
@endsection
