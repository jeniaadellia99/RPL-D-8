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
     <em class="fa fa-users"></em>
   </a></li>
   <li class="active">Data Mahasiswa</li>
 </ol>
</div><!--/.row-->


<div class="row" style="margin-top: 1%;">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <a href="#" class="btn btn-primary pull-right">Edit Mahasiswa</a>
      </div>
      <!-- /.panel-heading -->
      <div class="panel-body">
        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Kelas</th>
              <th>Platform(s)</th>
              <th>Engine version</th>
              <th>CSS grade</th>
            </tr>
          </thead>
          <tbody>
            <tr class="odd gradeX">
              <td>Trident</td>
              <td>Internet Explorer 4.0</td>
              <td>Win 95+</td>
              <td class="center">4</td>
              <td class="center">X</td>
            </tr>
            <tr class="even gradeC">
              <td>Trident</td>
              <td>Internet Explorer 5.0</td>
              <td>Win 95+</td>
              <td class="center">5</td>
              <td class="center">C</td>
            </tr>
            <tr class="odd gradeA">
              <td>Trident</td>
              <td>Internet Explorer 5.5</td>
              <td>Win 95+</td>
              <td class="center">5.5</td>
              <td class="center">A</td>
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