@extends('admin.layout.app')


@section('konten')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#">
				<em class="fa fa-home"></em>
			</a></li>
			<li class="active">Dashboard</li>
		</ol>
	</div><!--/.row-->


	<div class="row" style="margin-top: 1%;">
		<div class="col-lg-3 col-md-6">
			<div class="panel">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<img class="img-db" src="{{asset('assets/img/icon-mhs.png')}}">
						</div>
						<div class="col-xs-9 text-right">
							<div style="font-family: arial; font-size: 18px; color: #039BE5" align="center">Mahasiswa</div>
							<div style="font-size: 30px; font-family: arial; color: #039BE5" align="center">246</div>
						</div>
					</div>
				</div>
				<br><br>
				<a href="#">
					<div class="panel-footer" style="padding-bottom: 20px">
						<span class="pull-left" style="color: #9E9E9E">View Details</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-3 col-md-6">
			<div class="panel panel-green">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<img class="img-db" src="{{asset('assets/img/icon-dosen.png')}}">
						</div>
						<div class="col-xs-9 text-right">
							<div style="font-family: arial; font-size: 18px; color: #00E676;" align="center">Dosen</div>
							<div style="font-family: arial; font-size: 30px; color: #00E676;" align="center">12</div>
						</div>
					</div>
				</div>
				<br><br>
				<a href="#">
					<div class="panel-footer" style="padding-bottom: 20px">
						<span class="pull-left" style="color: #9E9E9E">View Details</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-3 col-md-6">
			<div class="panel panel-yellow">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<img class="img-db" src="{{asset('assets/img/icon-admin.png')}}">
						</div>
						<div class="col-xs-9 text-right">
							<div style="font-family: arial; font-size: 18px; color: #FF6D00" align="center">Admin</div>
							<div style="font-family: arial; font-size: 30px; color: #FF6D00" align="center">2</div>
						</div>
					</div>
				</div>
				<br><br>
				<a href="#">
					<div class="panel-footer" style="padding-bottom: 20px">
						<span class="pull-left" style="color: #9E9E9E">View Details</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>


		<div class="col-lg-3 col-md-6">
			<div class="panel panel">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<img class="img-db" src="{{asset('assets/img/icon-admin.png')}}">
						</div>
						<div class="col-xs-9 text-right">
							<div style="font-family: arial; font-size: 18px; color: #FF6D00;" align="center">Admin</div>
							<div style="font-family: arial; font-size: 30px; color: #FF6D00" align="center">2</div>
						</div>
					</div>
				</div>
				<br><br>
				<a href="#">
					<div class="panel-footer" style="padding-bottom: 20px">
						<span class="pull-left" style="color: #9E9E9E">View Details</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>


		<div class="col-lg-6">
			<div class="panel panel-default">
				<div class="panel-heading" style="padding-bottom: 133px">
					<p align="justify" style="font-size: 20px; font-family: arial; color: #039BE5">Selamat Datang Admin</p>
					<p align="left" style="font-size: 12px">Selamat Datang di Dashboard Pengelolaan Data Sistem Presensi Teknik Informatika Politeknik Negeri Indramayu 2018</p>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6">
			<div class="panel panel-yellow">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<img class="img-db" src="{{asset('assets/img/icon-kelas.png')}}">
						</div>
						<div class="col-xs-9 text-right">
							<div style="font-family: arial; font-size: 18px; color: #E53935" align="center">Kelas</div>
							<div style="font-family: arial; font-size: 30px; color: #E53935" align="center">12</div>
						</div>
					</div>
				</div>
				<br><br>
				<a href="#">
					<div class="panel-footer">
						<span class="pull-left" style="color: #9E9E9E">View Details</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>



@endsection