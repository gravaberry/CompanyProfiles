@extends('layouts.base')
@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Logo</li>
        </ol>
      </nav>
  <div class="row">

    <div class="col-md-6 text-left">

    </div>
  </div>

  <div class="clearfix"><hr></div>
  <form action="{{ asset('admin/konfigurasi/proses_logo') }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <input type="hidden" name="id_konfigurasi" id="id_konfigurasi" value="{{ $site->id_konfigurasi }}"
        <div class="col-md-6">
            <div class="form-group">
              <label for=""><h1>Logo</h1></label>
              <input type="file" class="form-control" name="logo" id="logo" value= {{ old('logo') }} aria-describedby="helpId" placeholder="input logo ">
              <small id="helpId" class="form-text text-muted">Changer Logo</small>
              @error('logo')
                  <div class="alert alert-success" role="alert">
                    {{ $message }}
                  </div>
              @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <img src="{{ asset('assets2/img/galeri/'.$site->logo ) }}" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" style="max-width:200px;heigt:auto;" alt="">
              </div>
        </div>

    </div>
    <div class="form-group">
        <button class="btn btn-primary" type="submit">Simpan</button>
        <button class="btn btn-warning" type="reset">Reset</button>
    </div>
  </form>

@endsection
