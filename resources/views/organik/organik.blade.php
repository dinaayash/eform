@extends('layout.main')


@section('title', 'Organik')

@section('content')	
@section('subtitle', 'Hak Akses Organik')
	
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
				<a href="{{ route('data-mahasiswa-baru') }}"><button class="btn dark" style="width:100px"><i class="fa fa-refresh"></i>&nbsp;&nbsp;Refresh</button></a>
						<!-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-file-text"></i>&nbsp;&nbsp;Tambah Data</button> -->
						<a href="/pesan-org" style="float:right; margin-bottom:10px; width:150px" class="btn dark"><i class="fa fa-file-text"></i>&nbsp;&nbsp;Create Request</a>
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
						<th scope="col">Pemohon</th>
						<th scope="col">Nama Atasan</th>
						<th width="70px" scope="col">Layanan</th>
						<th scope="col">Status</th>
						<th scope="col">Dikerjakan oleh</th>
						<th scope="col">Keterangan</th>
						<th scope="col" width="120px" style="text-align:center;">Aksi</th>
					</tr>
				</thead>			
				<tbody>
					@foreach($HakAksesOrganik as $hao)
					<tr>
						<th scope="row">{{$loop->iteration}}</th>
						<td>{{$hao->no_hak_akses}}</td>
						<td>{{$hao->nama_pemohon}}</td>
						<td>{{$hao->nama_atasan}}</td>
						<td>{{$hao->tbl_layanan_ict->nama_layanan}}</td>
						@if ($hao->status_permohonan == 'On Progress')
						<td><small class="label bg-gray" style="font-size:12px">
						{{$hao->status_permohonan}}</small></td>
						@elseif ($hao->status_permohonan == 'Sudah Diterima')
						<td><small class="label bg-green" style="font-size:12px">
						{{$hao->status_permohonan}}</small></td>
						@else
							<td><small class="label bg-red" style="font-size:12px">
							{{$hao->status_permohonan}}</small></td>
						@endif
						<td>{{$hao->done_by}}</td>
						<td>{{$hao->alasan}}</td>
						
						
						<td style="text-align:center;">
							<div class="btn-group-justified">
									<!-- <a href=""><button type= "button" class="btn btn-danger"><i class="fa fa-trash" width="23px;"></i></button></a> -->
									&nbsp;
									<a href="/organik/edit/{{$hao->id_hak_akses}}"><button type= "button" class="btn btn-warning btn-sm" style="width:100px; margin-bottom:5px">Copy</button></a>
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
    

  