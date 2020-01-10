@extends('layout.main')

@section('title', 'Profil')

@section('content')
@section('subtitle', 'Data Profil')

 <section class="content">

      <div class="row">
        <div class="col-md-4">

          <!-- Profile Image -->

          <div class="box box-primary">
            <div class="box-body box-profile">

              <img class="profile-user-img img-responsive img-circle" src="template/dist/img/user1.jpg" alt="User profile picture">
              
              <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>

              <p class="text-muted text-center">{{ Auth::user()->jabatan }}</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>NIPG</b> <a class="pull-right">{{ Auth::user()->nipg }}</a>
                </li>
                <li class="list-group-item">
                  <b>Username</b> <a class="pull-right">{{ Auth::user()->username }}</a>
                </li>
                <li class="list-group-item">
                  <b>Email</b> <a class="pull-right">{{ Auth::user()->email }}</a>
                </li>
                 <li class="list-group-item">
                  <b>Jabatan</b> <a class="pull-right">{{ Auth::user()->jabatan }}</a>
                </li>
                 <li class="list-group-item">
                  <b>Satuan Kerja</b> <a class="pull-right">{{ Auth::user()->satuan_kerja }}</a>
                </li>
                <li class="list-group-item">
                  <b>Perusahaan</b> <a class="pull-right">{{ Auth::user()->perusahaan }}</a>
                </li>
              </ul>
                        <a href="/profil-detail" class="btn btn-primary btn-block"><b>Update Profile</b></a>
              </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          
        </div>
        <!-- /.col -->
        <div class="col-md-9">
                </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
@endsection