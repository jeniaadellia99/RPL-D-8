@extends('admin.layout.edit_app')


<div class="modal fade" id="tambah-dosen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Dosen</h4>
      </div>
      <div class="modal-body">

        <form action="proses/proses_edit.php" class="form-horizontal" method="POST" id="form-save">
          <div class="form-group">
            <input type="hidden" name="id" value='<?php echo"$data[id_biodata]" ?>'>
            <label class="col-sm-3 control-label">Nama</label>
            <input name="email" value='<?php echo"$data[email]" ?>' type="email" class="col-sm-5 form-control"  style="width: 250px" aria-describedby="emailHelp" placeholder="Masukan Email">
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">NIDN</label>
            <input name="password" type="password" class="col-sm-5 form-control" value='<?php echo"$data[password]" ?>' style="width: 250px" placeholder="Masukan Password">
          </div><hr>

          <div class="form-group">
            <label class="col-sm-3 control-label">NIP</label>
            <input name="telephone" type="text" class="col-sm-5 form-control" value='<?php echo"$data[telephone]" ?>' style="width: 250px" placeholder="Masukan Nomer Handphone Anda">
          </div>
@endsection
        
