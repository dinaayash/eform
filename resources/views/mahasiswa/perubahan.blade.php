@extends('layout.main')

@section('title', 'Perubahan')

@section('content')	
@section('subtitle', 'Perubahan')

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



&nbsp;
<section class="content">
	<div class="row">
		<div class="col-lg-12">
				<div class="form-group">
				<a href="{{ route('data-mahasiswa-baru') }}"><button class="btn dark" style="width:100px"><i class="fa fa-refresh"></i>&nbsp;&nbsp;Refresh</button></a>
						<!-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-file-text"></i>&nbsp;&nbsp;Tambah Data</button> -->
						<a href="{{ route('create-perubahan') }}" style="float:right; margin-bottom:10px; width:150px" class="btn dark "><i class="fa fa-file-text"></i>&nbsp;&nbsp;Create Request</a>
				</div>
		</div>
	</div>
	
	&nbsp;
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
                   	<th width="20px" style="text-align:center;">No</th>
                    <th width="100px" style="text-align:center;">No Perubahan</th>
                    <th style="text-align:center;">Pemohon</th>
                    <th style="text-align:center;">Proyek/Module/Aplikasi</th>
                    <th  style="text-align:center;">Tipe Perubahan</th>
                    <th  style="text-align:center;">Dikerjakan oleh</th>
                    <th  style="text-align:center;">Status</th>
                    <!-- <th  style="text-align:center;">Link</th> -->
                    <th  width="100px" style="text-align:center;">Aksi</th>
                </tr>
				<!-- <th scope="col">#</th>
				<th scope="col">Nama</th>
				<th scope="col">NRP</th>
				<th scope="col">Email</th>
				<th scope="col">Jurusan</th>
				<th scope="col">Aksi</th> -->
			</tr>
			</thead>

			<tbody>
	@foreach($Perubahan as $peb)
	<tr>
		<th scope="row">{{$loop->iteration}}</th>
		<td>{{$peb -> no_perubahan}}</td>
		<td><b>{{$peb -> nama_pemohon}}</b>
			<br><small>{{$peb->tanggal_input}}</small></td>
		<td>{{$peb -> desc_perubahan}}</td>
		
	<td>
		<ol>
	@foreach(json_decode($peb->tipe_perubahan) as $perb)
		<li>{{$perb}}</li>
	@endforeach
		</ol>
	</td>

		<td>{{$peb -> done_by}}</td>
		<td><small class="label bg-gray" style="font-size:12px">
			{{$peb -> status_permohonan}}</small></td>
		<!-- <td>{{$peb -> ket}}</td>
		<td>{{$peb -> link}}</td> -->
		<td>
			<div class="btn-group-justified" style="text-align:center;">
                <a href=""><button type= "button" class="btn btn-danger"><i class="fa fa-trash" width="23px;"></i></button></a>
                                                    &nbsp;
                <a href=""><button type= "button" class="btn btn-warning"><i class="fa fa-edit" width="23px;"></i></button></a>
            </div>
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


@endsection

@section('js')
	<script>
		$(document).ready( function () {
				$('#exportTable').DataTable();
		} );
	</script>
@endsection

    

  