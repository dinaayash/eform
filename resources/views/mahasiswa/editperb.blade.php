@extends('layout.main')


@section('title', 'Perubahan')

@section('content') 
@section('subtitle', 'Perubahannn')

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary" style="margin-bottom:-10px">
                <div class="box-header with-border">
                    <h1 class="box-title"><b>Lengkapi Form Dibawah Ini</b></h1>
                </div>
                 @foreach($editperb as $epd)
                 <form action="/perubahan/update" method="post" id="myform" onSubmit="return validasi()">
                    <input type="hidden" name="id" value="{{$epd->id_perubahan}}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="box-body">
                                <div class="box box-default bayangan">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Data Pemohon</h3><img src="/template/dist/img/one.png" width="20px"
                                                                                    style="float:right">
                                    </div>
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Nama Pemohon</label>
                                            <!-- <input style="display:none" type="text" class="form-control" name="nipg"
                                                   value="PGASCOM2" > -->
                                            <input type="text" class="form-control" name="namapemohon"
                                                   placeholder="" value="{{$epd->nama_pemohon}}" readonly>
                                        </div>
                                        <!-- <div class="form-group">
                                            <input type="email" class="form-control" name="emailpemohon"
                                                   value="sigit.sutrisno@pgascom.co.id" 
                                                   style="display:none">
                                        </div> -->
                                        <div class="form-group">
                                            <label>Jabatan</label>
                                            <input type="text" class="form-control" name="jabatanpemohon" placeholder="Staff Profesional Developer" value="{{$epd->jabatan_pemohon}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Divisi</label>
                                            <input type="text" class="form-control" name="divisipemohon" placeholder="Information Communication Technology" value="{{$epd->satuan_kerja}}">
                                        </div>

                                    </div>
                                </div>
<div class="box box-default bayangan">
    <div class="box-header with-border">
        <h3 class="box-title">Atasan Langsung</h3> <img src="/template/dist/img/two.png" width="20px" style="float:right;">
    </div>
<div class="panel-body">
    <div class="form-group">
        <label>Nama Atasan <b style="color:red;">*</b></label><br>
        <table width="100%">
            <tr>
                <td width="100%">
                    <input name="nipgatasan" id="nipgatasan" type="text" class="form-control" value="{{$epd->nama_atasan}}">
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
                    <input name="jabatanatasan" id="jabatanatasan" placeholder="Jabatan" value="{{$epd->jabatan_atasan}}" type="text" class="form-control">
    </div>
        </div>
            </div>
            <div class="box box-default bayangan">
                <div class="box-header with-border">
                    <h3 class="box-title">Permintaan</h3><img src="/template/dist/img/three.png" width="20px"style="float:right">
                </div>
        <div class="panel-body">
            <div class="form-group">
                <label>Proyek/Module <b style="color:red;">*</b></label>
                    <input type="text" name="namaproyek" id="namaproyek" class="form-control"placeholder="" value="{{$epd->nama_proyek}}">
        </div>
        <div class="form-group">
            <label>Deskripsi Perubahan <b style="color:red;">*</b></label>
                <textarea class="form-control" maxlength="500" rows="3" placeholder="" id="deskripsi" name="deskripsi">{{$epd->desc_perubahan}}</textarea>
        </div>
        <div class="form-group">
            <label>Perubahan Diharapkan Pada Tanggal <b style="color:red;">*</b></label>
                <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control datepicker" id="datepicker" name="tanggal" value="{{$epd->masa_perubahan}}">
                </div>
        </div>
        <div class="form-group">
            <label>Alasan Perubahan <b style="color:red;">*</b></label>
                <textarea class="form-control" rows="3" placeholder="" name="alasan" id="alasan">{{$epd->alasan_perubahan}}</textarea>
        </div>
            </div>
                </div>
                    </div>
                        </div>
    <div class="col-lg-6">
        <div class="box-body">
            <div class="box box-default bayangan">
                <div class="box-header with-border">
                    <h3 class="box-title">Evaluasi Implikasi Perubahan</h3><img src="/template/dist/img/four.png" width="20px" style="float:right">
                </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <td class="bayangan" colspan="3" style="background-color:#428bca; color:white;">&nbsp;&nbsp;Tipe Perubahan
                    </td>
                </tr>
    <tbody>
        @php
            $dataperubahan = json_decode($epd->tipe_perubahan);
        @endphp
        <tr>
            <td width="50%">
                <label class="checkbox-inline"><input name="tipe_perubahan[]" value="Aplikasi" id="tipeperubahan" type="checkbox" {{  in_array('Aplikasi', $dataperubahan) ? 'checked' : '' }}>Aplikasi</label>
            </td>
            <td width="50%">    
            <label class="checkbox-inline"><input name="tipe_perubahan[]" value="Hardware" id="tipeperubahan" type="checkbox" {{ in_array('Hardware', $dataperubahan) ? 'checked' : '' }}>Hardware</label>
            </td>
        </tr>
        <tr>   
            <td width="50%"><label class="checkbox-inline"><input name="tipe_perubahan[]" value="Shutdown Terjadwal" id="tipeperubahan" type="checkbox" {{ in_array('Shutdown Terjadwal', $dataperubahan) ? 'checked' : '' }}>Shutdown Terjadwal</label></td>  

            <td width="50%"><label class="checkbox-inline"><input name="tipe_perubahan[]" value="Database" id="tipeperubahan" type="checkbox" {{ in_array('Database', $dataperubahan) ? 'checked' : '' }}>Database</label>
            </td>
        </tr> 
        <tr>
            <td width="50%"><label class="checkbox-inline"><input name="tipe_perubahan[]" value="Network" id="tipeperubahan" type="checkbox" {{ in_array('Network', $dataperubahan) ? 'checked' : '' }}>Network</label></td>
            <td width="50%"><label class="checkbox-inline"><input name="tipe_perubahan[]" value="Procedure" id="tipeperubahan" type="checkbox" {{ in_array('Procedure', $dataperubahan) ? 'checked' : '' }}>Procedure</label></td>
        </tr>
        <tr>
            <td width="50%"><label class="checkbox-inline"><input name="tipe_perubahan[]" value="Security" id="tipeperubahan" type="checkbox" {{ in_array('Security', $dataperubahan) ? 'checked' : '' }}>Security</label></td>
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
                <td width="50%"><label class="radio-inline"><input type="radio" name="optprioritas" id="prioritas" value="Penting" {{ $epd->prioritas_perubahan == 'Penting' ? 'checked' : '' }}>Penting</label>
                </td>
                <td width="50%"><label class="radio-inline"><input type="radio" name="optprioritas" id="prioritas" value="Tinggi" {{ $epd->prioritas_perubahan == 'Tinggi' ? 'checked' : '' }}>Tinggi</label>
                </td>
            </tr>
            <tr>
                <td width="50%"><label class="radio-inline"><input type="radio" name="optprioritas" id="prioritas" value="Menengah" {{ $epd->prioritas_perubahan == 'Menengah' ? 'checked' : '' }}>Menengah</label>
                </td>     
                <td width="50%"><label class="radio-inline"><input type="radio" name="optprioritas" id="prioritas" value="Rendah" {{ $epd->prioritas_perubahan == 'Rendah' ? 'checked' : '' }}>Rendah</label>
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
                <td width="50%"><label class="radio-inline"><input type="radio" name="optdampak" id="dampak" value="Kecil" {{ $epd->dampak_perubahan == 'Kecil' ? 'checked' : '' }}>Kecil</label> 
                </td> 
                <td width="50%"><label class="radio-inline"><input type="radio" name="optdampak" id="dampak" value="Menengah" {{ $epd->dampak_perubahan == 'Menengah' ? 'checked' : '' }}>Menengah</label>
                </td>
            </tr>
            <tr>
                <td colspan="2"><label class="radio-inline"><input type="radio" name="optdampak" id="dampak"value="Besar" {{ $epd->dampak_perubahan == 'Besar' ? 'checked' : '' }}>Besar</label>
                </td>
            </tr>
        </table>
    </div>
    <div class="form-group">
                <label>Lingkungan Yang Terkena Dampak</label>
                    <input type="text" class="form-control" placeholder="" name="lingkungan" value="{{$epd->lingkungan}}">
    </div>
    <div class="form-group">
                <label>Diskripsi Rencana Test</label>
                    <textarea class="form-control" rows="3" placeholder="" name="deskripsitest" value="">{{$epd->desc_plantest}}</textarea>
    </div>
    <div class="form-group">
                <label>Diskripsi Rencana Rollback</label>
                    <textarea class="form-control" rows="3" placeholder="" name="deskripsirollback" value="">{{$epd->desc_rollback}}</textarea>
    </div>
    </div>
    </div>
        <button name="simpan" type="submit" class="btn btn-primary btn-flat"
                                        style="margin-bottom:10px;">Update Form
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
@endforeach                                                                          
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
