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

    <div class="col-md-6 text-left">

    </div>
  </div>

  <div class="clearfix"><hr></div>
  <form action="{{ asset('admin/slider/proses') }}" method="post" accept-charset="utf-8">
    @csrf
    <div class="col-md-8">
      <div class="btn-group">
           <?php if(isset($pagin)) { echo $pagin; } ?>
          </div>
        </div>
      </div>
      <div class="clearfix"><hr></div>
      <div class="table-responsive mailbox-messages">
        <table id="tablecontact" class="tablecontact" class="display table table-bordered table-sm" cellspacing="0" width="100%">
          <thead>
            <tr class="bg-info">
              <th width="5%" class="text-center">
                <div class="mailbox-controls">
                  <!-- Check all button -->
                 <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                  </button>
              </div>
              </th>
              <th width="8%">Nama</th>
              <th width="20%">Email</th>
              <th width="15%">Subject</th>
              <th width="30%">Pesan Masuk</th>
              <th width="5%">Action</th>
            </tr>
          </thead>
          <tbody>


            <?php $i=1; foreach($contact as $contact) { ?>

            <tr class="odd gradeX">
                <td class="text-center">
                  <div class="icheck-primary">
                    <input type="checkbox" name="id_slider[]" value="<?php echo $contact->id_contact ?>" id="check<?php echo $i ?>">
                    <label for="check<?php echo $i ?>"></label>
                  </div>
                </td>

                <td><?php echo $contact->name ?></td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->subject }}</td>
                <td>{{ $contact->message }}</td>
                <td>
                      <div class="btn-group">
                            <a href="{{ asset('admin/pesan/delete/'.$contact->id_contact) }}" class="btn btn-danger btn-sm delete-link"><i class="fa fa-trash"></i></a>
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
    var table = $('#tablecontact').DataTable({
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
