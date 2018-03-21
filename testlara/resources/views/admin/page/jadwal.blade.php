@extends('admin.layout.app')


@section('konten')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#">
				<em class="fa fa-calendar"></em>
			</a></li>
			<li class="active">Jadwal</li>
		</ol>
	</div><!--/.row-->
	
	<div class="panel panel-container" style="margin-top: 1%;">
		
		<div class="panel panel-orange panel-widget ">
			<button type="button" class="btn btn-success btn-lg">Lihat Jadwal</button>

			<br><br><br><br><button type="button" class="btn btn-secondary btn-lg">Ubah Jadwal</button>
		</div>
		
		<!--/.row-->
	</div>
</div>
@endsection