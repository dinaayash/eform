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
						<td><small class="label bg-gray" style="font-size:12px">
							{{$hano->status_permohonan}}</small></td>
						<td>{{$hano->done_by}}</td>
						<td>{{$hano->alasan}}</td>
						
						<td style="text-align:center;">
							<div class="btn-group-justified">
									<a href=""><button type= "button" class="btn btn-warning"><i class="fa fa-trash" width="23px;"></i></button></a>
									&nbsp;
									<a href=""><button type= "button" class="btn btn-success"><i class="fa fa-check" width="23px;"></i></button></a>
									&nbsp;
									<a href=""><button type= "button" class="btn btn-danger"><i class="fa fa-times" width="23px;"></i></button></a>
							</div>

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
    

  