@extends('admin.layout.app')

@section('css')

<!-- DataTables CSS -->
<link href="{{ asset('assets/datatables-plugins/dataTables.bootstrap.css') }}" rel="stylesheet">

<!-- DataTables Responsive CSS -->
<link href="{{ asset('assets/datatables-responsive/dataTables.responsive.css') }}" rel="stylesheet">
@endsection

@section('konten')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#">
				<span class="fa fa-users"></span>
			</a></li>
			<li class="active">Data Dosen</li>
		</ol>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<?php
						echo "
							<a href='tambah-dosen' class='btn btn-primary pull-right' data-target='#tambah-dosen' data-toggle='modal'>Tambah Dosen</a>";
					
					?>
				</div>
				<!-- /.panel-heading -->
				<div class="panel-body">
					<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
							<tr>
								<th style="width: 10%">No</th>
								<th style="width: 40%">Nama Lengkap</th>
								<th style="width: 15%">NIDN</th>
								<th style="width: 15%">NIP</th>
								<th style="width: 15%">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<tr class="odd gradeX">
								<td>1</td>
								<td>Inah</td>
								<td>0897373</td>
								<td>9877868</td>
								<td>
									<button class="btn btn-success" value="1">Edit</button>
									<button class="btn btn-danger" value="1">Hapus</button>
								</td>
							</tr>
							<tr class="even gradeC">
								<td>2</td>
								<td>LiInah</td>
								<td>2323234</td>
								<td>900877868</td>
								<td>
									<button class="btn btn-success" value="1">Edit</button>
									<button class="btn btn-danger" value="1">Hapus</button>
								</td>
							</tr>
							<tr class="odd gradeA">
								<td>3</td>
								<td>Minah</td>
								<td>23232</td>
								<td>989787</td>
								<td>
									<button class="btn btn-success" value="1">Edit</button>
									<button class="btn btn-danger" value="1">Hapus</button>
								</td>
							</tr>
						</tbody>
					</table>
					<!-- /.table-responsive -->
				</div>
				<!-- /.panel-body -->
			</div>
			<!-- /.panel -->
		</div>
		<!-- /.col-lg-12 -->
	</div>
	
</div>


@endsection

@section('js')
<!-- DataTables JavaScript -->
<script src="{{ asset('assets/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/datatables-plugins/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/datatables-responsive/dataTables.responsive.js') }}"></script>
<script>
	$(document).ready(function() {
		$('#dataTables-example').DataTable({
			responsive: true
		});
	});
</script>

@endsection