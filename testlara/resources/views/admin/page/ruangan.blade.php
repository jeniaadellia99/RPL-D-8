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
				<span class="fa fa-university"></span>
			</a></li>
			<li class="active">Ruangan</li>
		</ol>
	</div><!--/.row-->

	<div class="row" style="margin-top: 1%;">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<a href="#" class="btn btn-primary pull-right">Tambah Ruangan</a>
				</div>
				<!-- /.panel-heading -->
				<div class="panel-body">
					<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
							<tr>
								<th style="width: 7%">No</th>
								<th style="width: 75%">Nama Ruangan</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<tr class="odd gradeX">
								<td>1</td>
								<td>Lab Eldas</td>
								<td> 
									<button class="btn btn-success" value="1">Detail</button>
									<button class="btn btn-danger" value="1">Hapus</button>
								</td>
							</tr>
							<tr class="even gradeC">
								<td>2</td>
								<td>Lab SO</td>
								<td>
									<button class="btn btn-success" value="1">Detail</button>
									<button class="btn btn-danger" value="1">Hapus</button>
								</td>
							</tr>
							<tr class="odd gradeA">
								<td>3</td>
								<td>Lab Multimedia</td>
								<td>
									<button class="btn btn-success" value="1">Detail</button>
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