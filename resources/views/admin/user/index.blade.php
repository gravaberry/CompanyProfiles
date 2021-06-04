@extends('layouts.base')
@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">User</li>
        </ol>
      </nav>
  <div class="row">

    <div class="col-md-6">

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#usermodal">
            <i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah
          </button>
      </div>
    </div>
    <div class="col-md-6 text-left">

    </div>
  </div>

  <div class="clearfix"><hr></div>
  <form action="{{ asset('admin/user/create_proses') }}" method="post" accept-charset="utf-8">
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
        <table id="tableuser" class="display table table-bordered table-sm" cellspacing="0" width="100%">
          <thead>
            <tr class="bg-info">
              <th width="5%" class="text-center">
                <div class="mailbox-controls">
                  <!-- Check all button -->
                 <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                  </button>
              </div>
              </th>
              <th width="8%">Gambar</th>
              <th width="20%">Name</th>
              <th width="10%">Email</th>
              <th width="10%">Username</th>
              <th width="10%">Level</th>
              <th width="20%">Action</th>
            </tr>
          </thead>
          <tbody>

            <?php $i=1; foreach($user as $user) { ?>

              <tr class="odd gradeX">
                <td class="text-center">
                  <div class="icheck-primary">
                    <input type="checkbox" name="id_galeri[]" value="<?php echo $user->id_user ?>" id="check<?php echo $i ?>">
                    <label for="check<?php echo $i ?>"></label>
                  </div>
                </td>

                <td><img src="{{ asset('assets2/img/galeri/'.$user->gambar) }}" class="img img-thumbnail img-fluid"></td>
                <td><?php echo $user->name ?></td>
                <td><?php echo $user->email ?></td>
                <td><?php echo $user->username ?></td>
                <td><?php echo $user->akses_level ?></td>
                <td>
                      <div class="btn-group">

                          <a href="{{ asset('admin/user/edit/'.$user->id_user) }}"
                            class="btn btn-warning btn-sm "><i class="fa fa-edit"></i></a>
                            <a href="{{ asset('admin/user/delete/'.$user->id_user) }}" class="btn btn-danger btn-sm delete-link"><i class="fa fa-trash"></i></a>
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
    $('#tableuser').DataTable({
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




  <div class="modal fade" id="usermodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah User..?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

        <form action="{{ asset('admin/user/create_proses') }}" method="post" enctype="multipart/form-data" accept-charset="utf-8">
            @csrf
            <div class="row form-group">
                <label class="col-md-4 text-right">Upload gambar</label>
                    <div class="col-md-8">
                    <input type="file" name="gambar" class="form-control" required="required" placeholder="Upload gambar">
                    @error('gambar')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                </div>
            </div>

            <div class="row form-group">
                <label class="col-md-4 text-right">Name</label>
                    <div class="col-md-8">
                        <input type="text" name="name" class="form-control" placeholder="name" value="{{ old('name') }}">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                            </div>
                                </div>

            <div class="row form-group">
                <label class="col-md-4 text-right">Email</label>
                    <div class="col-md-8">
                        <input type="email" name="email" class="form-control" placeholder="email" value="{{ old('email') }}">
                        @error('email')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                            </div>
                                </div>


            <div class="row form-group">
                <label class="col-md-4 text-right">UserName</label>
                    <div class="col-md-8">
                        <input type="text" name="username" class="form-control" placeholder="username" value="{{ old('username') }}">
                        @error('username')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                            </div>
                                </div>

            <div class="row form-group">
                <label class="col-md-4 text-right">Password</label>
                    <div class="col-md-8">
                        <input type="password" name="password" class="form-control" placeholder="password" value="{{ old('password') }}">
                        @error('password')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                            </div>
                                </div>

            <div class="row form-group">

                <label class="col-md-4 text-right">Akses Level</label>
                    <div class="col-md-8">
                        <select class="form-control"   name="akses_level" value="{{ old('akses_level') }}">
                            <option value="admin">Admin</option>
                            <option value="user">User</option>

                                </select>
                                    </div>
                                        </div>
                                           </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
        </form>
      </div>
    </div>
  </div>
