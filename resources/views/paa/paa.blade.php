@extends('layout.main')


@section('title', 'PAA')

@section('content') 
@section('subtitle', 'Data Pemilik dan Admin Aplikasi')

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
                <div class="col-md-12">
                    <div class="form-group">
                        <a href="{{ route('create-paa') }}"><button type="button" class="btn dark" style="width:150px; float:right; margin-bottom:10px"><i class="fa fa-user-plus"></i>&nbsp;&nbsp;Create New</button></a>
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
                 		<th width="20px" style="text-align:center;">No</th>
                        <th style="text-align:center;">Nama Aplikasi</th>
                        <th style="text-align:center;">Pemilik</th>
                        <th style="text-align:center;">Penanggung Jawab</th>
                       	<th style="text-align:center;">Admin Aplikasi</th>
                        <th width="120px" style="text-align:center;">Aksi</th>
					 <tbody>
                                                                            <tr>
                                            <td style="text-align:center;">1</td>
                                            <td>Hyperion</td>
                                            <td>Financial & Control Budgeting</td>
                                            <td>Siti Yanti Mulyanti<br><small>siti.mulyanti@pgn.co.id</small></td>
                                            <td>Miftakh Arkhan Zein Taptozani<br><small>miftakh.zein@pgn.co.id</small></td>
                                            <td style="text-align:center;">
                                                <div class="btn-group-justified">
                                                    <a href=""><button type= "button" class="btn btn-danger"><i class="fa fa-trash" width="23px;"></i></button></a>
                                                    &nbsp;
                                                    <a href=""><button type= "button" class="btn btn-warning"><i class="fa fa-edit" width="23px;"></i></button></a>
                                                </div>
                                            </td>
                                                                            <tr>
                                            <td style="text-align:center;">2</td>
                                            <td>GASPEX</td>
                                            <td>Financial & Control Budgeting</td>
                                            <td>Siti Yanti Mulyanti<br><small>siti.mulyanti@pgn.co.id</small></td>
                                            <td>Miftakh Arkhan Zein Taptozani<br><small>miftakh.zein@pgn.co.id</small></td>
                                            <td style="text-align:center;">
                                                <div class="btn-group-justified">
                                                    <a href=""><button type= "button" class="btn btn-danger"><i class="fa fa-trash" width="23px;"></i></button></a>
                                                    &nbsp;
                                                    <a href=""><button type= "button" class="btn btn-warning"><i class="fa fa-edit" width="23px;"></i></button></a>
                                                </div>
                                            </td>
			</tr>
			</thead>
		</table>
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