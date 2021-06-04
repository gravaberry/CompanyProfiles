@extends('layouts.base')
@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
       <li class="breadcrumb-item active" aria-current="page">User Edit</li>
      <li class="breadcrumb-item active" aria-current="page">Edit</li>

    <hr>
    </ol>
    <p class="text-right">
        <a href="{{ asset('admin/user') }}" class="btn btn-success btn-sm">
            <i class="fa fa-backward"></i> Kembali
        </a>
    </p>
  </nav>
  <br>
  <form action="{{ asset('admin/user/update_proses') }}" method="post" enctype="multipart/form-data" accept-charset="utf-8">
      @csrf
      <div class="row form-group">
          <input type="hidden" name="id_user" id="id_user"  value="{{ $user->id_user }}">
          <label class="col-md-4 text-right">Upload gambar</label>
              <div class="col-md-8">
              <input type="file" name="gambar" class="form-control" value="{{ old('gambar') }}" placeholder="Upload gambar">
              @error('gambar')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
          </div>
      </div>

      <div class="row form-group">
          <label class="col-md-4 text-right">Name</label>
              <div class="col-md-8">
                  <input type="text" name="name" class="form-control" placeholder="name" value="<?php echo $user->name ?>">
                  @error('name')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
                      </div>
                          </div>

      <div class="row form-group">
          <label class="col-md-4 text-right">Email</label>
              <div class="col-md-8">
                  <input type="email" name="email" class="form-control" placeholder="email" value="<?php echo $user->email ?>">
                  @error('email')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
                      </div>
                          </div>


      <div class="row form-group">
          <label class="col-md-4 text-right">UserName</label>
              <div class="col-md-8">
                  <input type="text" name="username" class="form-control" placeholder="username" value="<?php echo $user->username ?>">
                  @error('username')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
                      </div>
                          </div>

      <div class="row form-group">
          <label class="col-md-4 text-right">Password</label>
              <div class="col-md-8">
                  <input type="password" name="password" class="form-control" placeholder="password" value="<?php echo $user->password ?>">
                  @error('password')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
                      </div>
                          </div>

      <div class="row form-group">

          <label class="col-md-4 text-right">Akses Level</label>
              <div class="col-md-8">
                  <select class="form-control"   name="akses_level">
                      <option value="Admin">Admin</option>
                      <option value="User" <?php if($user->akses_level == "User") {echo "selected";}?>>User</option>

                          </select>
                              </div>
                                  </div>
                                     </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Save</button>
  </div>
  </form>

@endsection
