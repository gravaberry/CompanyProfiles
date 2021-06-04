@extends('layouts.base')
@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Kategori slider</li>
        </ol>
      </nav>
  <div class="row">

    <div class="col-md-6">
      <form action="{{ asset('admin/slider/cari') }}" method="get" accept-charset="utf-8">
      <br>
      <div class="input-group">
        <input type="text" name="keywords" class="form-control" placeholder="Ketik kata kunci pencarian slider...." value="<?php if(isset($_GET['keywords'])) { echo strip_tags($_GET['keywords']); } ?>" required>
        <span class="input-group-btn btn-flat">
          <button type="submit" class="btn btn-info"><i class="fa fa-search"></i> Cari</button>
          <a href="{{ asset('admin/slider/create') }}" class="btn btn-success">
          <i class="fa fa-plus"></i> Tambah Baru</a>
        </span>
      </div>
      </form>
    </div>
    <div class="col-md-6 text-left">

    </div>
  </div>

  <div class="clearfix"><hr></div>
  <form action="{{ asset('admin/slider/proses') }}" method="post" accept-charset="utf-8">
    {{ csrf_field() }}
  <div class="row">
    <div class="col-md-4">
      <div class="input-group">
        <span class="input-group-btn" >
          <button class="btn btn-danger btn-sm" type="submit" name="hapus" onClick="check();" >
            <i class="fa fa-trash"></i>
          </button>
        </span>
        {{-- <select name="id_kategori_slider" class="form-control form-control-sm">
          <?php foreach($slider as $slider) { ?>
            <option value="<?php echo $slider->id_slider ?>"><?php echo $slider->id_slider ?></option>
          <?php } ?>
        </select> --}}
        <span class="input-group-btn" >
          <button type="submit" class="btn btn-info btn-sm btn-flat" name="update">Update</button>
        </span>
      </div>
    </div>

    <div class="col-md-8">
      <div class="btn-group">


           <?php if(isset($pagin)) { echo $pagin; } ?>

          </div>
        </div>
      </div>
      <div class="clearfix"><hr></div>
      <div class="table-responsive mailbox-messages">
        <table id="tableslider" class="tableslider" class="display table table-bordered table-sm" cellspacing="0" width="100%">
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
              <th width="15%">JENIS</th>
              <th width="10%">ISI</th>
              <th width="10%">URUTAN</th>
              <th width="10%">SLIDER_STATUS</th>
              <th width="10%">TAMPILKAN TEKS DI BANNER?</th>
              <th width="20%">Action</th>
            </tr>
          </thead>
          <tbody>


            <?php $i=1; foreach($slider as $slider) { ?>

            <tr class="odd gradeX">
                <td class="text-center">
                  <div class="icheck-primary">
                    <input type="checkbox" name="id_slider[]" value="<?php echo $slider->id_slider ?>" id="check<?php echo $i ?>">
                    <label for="check<?php echo $i ?>"></label>
                  </div>
                </td>

                <td><img src="{{ asset('assets2/img/thumbs/'.$slider->gambar) }}" class="img img-thumbnail img-fluid"></td>
                <td><?php echo $slider->judul ?></td>
                <td><a href="{{ asset('admin/slider/status_slider/'.$slider->jenis_slider) }}">
                    <?php echo $slider->jenis_slider ?></a></td>
                <td>{{ $slider->isi }}</td>
                <td>{{ $slider->urutan }}</td>
                <td>{{ $slider->slider_status }}</td>
                <td>{{ $slider->status_text }}</td>
                <td>
                      <div class="btn-group">

                          <a href="{{ asset('admin/slider/edit/'.$slider->id_slider) }}"
                            class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="{{ asset('admin/slider/delete/'.$slider->id_slider) }}" class="btn btn-danger btn-sm delete-link"><i class="fa fa-trash"></i></a>
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
    $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    var table = $('#tableslider').DataTable({
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
