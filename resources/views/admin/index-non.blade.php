@extends('layout.main-adm')

@section('title', 'Form Non Organik Admin')

@section('contentadm')
@section('subtitle', 'Report Hak Akses Non Organik Admin')
	
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
                <a href="/admin-non"><button class="btn dark" style="width:100px"><i class="fa fa-refresh"></i>&nbsp;&nbsp;Refresh</button></a>
                <a target="_blank" href="cetak\laporanhakakses.php"><button class="btn dark" style="width:100px"><i class="fa fa-print"></i>&nbsp;&nbsp;Print</button></a>
            </div>
        </div>
    </div>
    
		<br>
		@if (session('status'))
			<div class="alert alert-success">
				{{ session('status') }}
			</div>
		@endif

		@if (count($errors) > 0)
			<div class="alert alert-danger">
				Data yang anda isi belum lengkap
			</div>
		<br>
		@endif


<div class="row">
        <div class="col-lg-12">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="table-responsive">
        <table id="exportTable" class="table table-bordered table-hover">
                            
                <thead style="background-color:#add8e6; color:black;">
					<tr>
						<th width="20px" scope="col">No</th>
						<th scope="col">No Hak Akses</th>
						<th scope="col" width="100px">Pemohon</th>
						<th scope="col">Nama Atasan</th>
						<th width="70px" scope="col">Layanan</th>
						<th scope="col">Status</th>
						<th scope="col">Dikerjakan oleh</th>
						<th scope="col">Keterangan</th>
						<th scope="col" width="120px" style="text-align:center;">Aksi</th>
					</tr>
				</thead>			
				<tbody>
					@foreach($HakAksesNonOrganik as $hano)
					<tr>
						<th scope="row">{{$loop->iteration}}</th>
						<td>{{$hano->no_hak_akses_NO}}</td>
						<td><b>{{$hano->nama_pemohon}}</b>
							@php
							$date=date_create_from_format("Y-m-d H:i:s", $hano->tanggal_input);
							@endphp
						<br><small>{{date_format($date,"d M Y")}}
							<!-- <br><small>{{$hano->tanggal_input}}</small></td> -->
						<td><b>{{$hano->nama_atasan}}</b>
							<br><small>{{$hano->jabatan_atasan}}</small></td>
						<td><b>{{$hano->tbl_layanan_ict ? $hano->tbl_layanan_ict->nama_layanan : 'kosong' }}</b>
							<br><small>Masa Berlaku
							<br>{{$hano->masa_berlaku}}</small></td>

							@if ($hano->status_permohonan == 'On Progress')
						<td><small class="label bg-gray" style="font-size:12px">
							{{$hano->status_permohonan}}</small></td>
							@elseif ($hano->status_permohonan == 'Sudah Diterima')
						<td><small class="label bg-green" style="font-size:12px">
						{{$hano->status_permohonan}}</small></td>
						@else
							<td><small class="label bg-red" style="font-size:12px">
							{{$hano->status_permohonan}}</small></td>
						@endif

						<td>{{$hano->done_by}}</td>
						<td>{{$hano->alasan}}</td>
						
						<td style="text-align:center;">
							<div class="btn-group-justified">
									<a href="/admin-non/hapus/{{$hano->id_hak_akses_NO}}"><button type= "button" class="btn btn-warning"><i class="fa fa-trash" width="23px;"></i></button></a>
									&nbsp;
									<a href="#"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-check" width="23px;"></i></button></a>
									<!-- <a href="/admin-non/approve/{{$hano->id_hak_akses_NO}}"><button type= "button" class="btn btn-success"><i class="fa fa-check" width="23px;"></i></button></a> -->
									&nbsp;
									<a href="#"><button type= "button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-times" width="23px;"></i></button></a>
							</div>

						</td>
					</tr>
					@endforeach
				</tbody>
		</table>
		<!-- MODAL KETERANGAN -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    			<div class="modal-content">
      				<div class="modal-header">
        				<h5 class="modal-title" id="exampleModalLabel">Dikerjakan Oleh</h5>
        				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				<span aria-hidden="true">&times;</span>
        				</button>
      				</div>
      		<div class="modal-body">
      			<form action="/admin-non" method="POST" enctype="multipart/form-data">
      				{{csrf_field()}}
      				<div class="modal-body">
                		<p class="statusMsg"></p>
                		<form role="form">
                    <div class="form-group" name="pic">
                        <select class="form-control">
  							<option selected>Sigit Sutrisno</option>
  							<option>Agus Cucu</option>
  							<option>Cecep Yudi Subiantoro</option>
  							<option>Bagus Fernata</option>
  							<option>Rikhi Narang</option>
  							<option>Miftakh Arkhan Zein Taptozani</option>
  							<option>Subandi</option>
  							<option>Riandy Arizon</option>
  							<option>Yiyip Dwi Saputra</option>
  							<option>Hendi Novianto</option>
						</select>
                    </div>
                	</form>
           		</div>
			</div>
	      	<div class="modal-footer">
	        	<a href="/admin-non"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></a>
	        	<button name="simpan" type="submit" class="btn btn-primary">Save changes</button>
	        </form>
	     		</div>
	    		</div>
	 		</div>
				</div>
				</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>


@endsection

@section('js')
	<script>
		$(document).ready( function () {
				$('#exportTable').DataTable();
		} );
	</script>
@endsection
    

  