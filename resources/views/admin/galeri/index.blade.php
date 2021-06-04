@extends('layouts.base')
@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Galeri</li>
        </ol>
      </nav>
  <div class="row">

    <div class="col-md-6">

          <a href="{{ asset('admin/galeri/create') }}" class="btn btn-success">
          <i class="fa fa-plus"></i> Tambah Baru</a>

      </div>
    </div>
    <div class="col-md-6 text-left">

    </div>
  </div>

  <div class="clearfix"><hr></div>
  <form action="{{ asset('admin/galeri/proses') }}" method="post" accept-charset="utf-8">
    {{ csrf_field() }}
  <div class="row">

    <div class="col-md-8">
      <div class="btn-group">


           <?php if(isset($pagin)) { echo $pagin; } ?>

          </div>
        </div>
      </div>
      <div class="clearfix"><hr></div>
      <div class="table-responsive mailbox-messages">
        <table id="tablegaleri" class="display table table-bordered table-sm" cellspacing="0" width="100%">
          <thead>
            <tr class="bg-info">
              <th width="5%" class="text-center">
                <div class="mailbox-controls">
                  <!-- Check all button -->
                 <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                  </button>
              </div>
              </th>
              <th width="8%">GAMBAR</th>
              <th width="20%">JUDUL</th>
              <th width="10%">JENIS</th>
              <th width="10%">STATUS</th>
              <th width="10%">URUTAN</th>
              <th width="20%">Action</th>
            </tr>
          </thead>
          <tbody>

            <?php $i=1; foreach($galeris as $galeri) { ?>

              <tr class="odd gradeX">
                <td class="text-center">
                  <div class="icheck-primary">
                    <input type="checkbox" name="id_galeri[]" value="<?php echo $galeri->id_galeri ?>" id="check<?php echo $i ?>">
                    <label for="check<?php echo $i ?>"></label>
                  </div>
                </td>

                <td><img src="{{ asset('assets2/img/galeri/'.$galeri->gambar) }}" class="img img-thumbnail img-fluid"></td>
                <td><?php echo $galeri->judul_galeri ?></td>
                <td><a href="{{ asset('admin/galeri/status_galeri/'.$galeri->jenis_galeri) }}">
                    <?php echo $galeri->jenis_galeri ?></a></td>
                <td><?php echo $galeri->popup_status ?> </td>
                <td><?php echo $galeri->urutan ?> </td>
                <td>
                      <div class="btn-group">

                          <a href="{{ asset('admin/galeri/edit/'.$galeri->id_galeri) }}"
                            class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="{{ asset('admin/galeri/delete/'.$galeri->id_galeri) }}" class="btn btn-danger btn-sm delete-link"><i class="fa fa-trash"></i></a>
                          </div>
                        </td>
                      </tr>

                      <?php $i++; } ?>

                    </tbody>
                  </table>
                </div>

                </form>

                <div class="clearfix"><hr></div>
                <div class="pull-right"><?php if(isset($pagin)) { echo $pagin; } ?></div>

@endsection

@push('scripts')

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.23/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.23/datatables.min.js"></script>
<script>
$(document).ready( function () {
    $('#tablegaleri').DataTable({
        "paging" :true,
                "lengtchange" :false,
                "searching" :true,
                "ordering" :true,
                "info" :true,
                "autowidth" :false,
    });

});
</script>
@endpush
