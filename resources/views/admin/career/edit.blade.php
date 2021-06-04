@extends('layouts.base')
@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
       <li class="breadcrumb-item active" aria-current="page">Job Career</li>
      <li class="breadcrumb-item active" aria-current="page">Tambah</li>
    </ol>
  </nav>
  <br>

  <div class="row">

    <div class="col-md-6">
      <br>
      <div class="input-group">
        <span class="input-group-btn btn-flat">
          <a href="{{ asset('admin/career') }}" class="btn btn-success">
          <i class="fa fa-plus"></i> Back</a>
        </span>
      </div>
      </form>
    </div>
  </div>

<form action="{{ asset('admin/career/edit_proses') }}" method="post" enctype="multipart/form-data" accept-charset="utf-8">
    @csrf

    <div class="row form-group">
        <input type="hidden" name="id_career" id="id_career" value="{{ $career->id_career }}">
      <label class="col-md-3 text-right">Upload gambar</label>
      <div class="col-md-6">
        <input type="file" name="gambar" id="gambar" value={{ old('gambar') }} class="form-control" placeholder="Upload gambar">
        @error('gambar')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
      </div>
    </div>

    <div class="row form-group">
        <label class="col-md-3 text-right">Title</label>
        <div class="col-md-9">
            <input type="text" name="title" id="title" value="{{ $career->title }}" placeholder="isi title" class="form-control">
          @error('title')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
        </div>
      </div>
    <div class="row form-group">
      <label class="col-md-3 text-right">Deskripsi</label>
      <div class="col-md-9">
        <textarea name="deskripsi" class="form-control" id="kontenku" id="deskripsi" placeholder="keterangan">{{ $career->deskripsi }}</textarea>
        @error('deskripsi')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
      </div>
    </div>

    <div class="row form-group">
        <label class="col-md-3 text-right">Tanggal</label>
        <div class="col-md-3">
            <input type="date" name="tanggal" id="tanggal" value="{{ $career->tanggal }}" class="form-control">
          @error('tanggal')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
        </div>
      </div>

    <div class="row form-group">
      <label class="col-md-3 text-right"></label>
      <div class="col-md-9">
        <div class="form-group">
          <button type="submit" name="submit" class="btn btn-success "><i class="fa fa-save"></i> Update Data</button>
          <input type="reset" name="reset" class="btn btn-info " value="Reset">
        </div>
      </div>
    </div>
    </form>



@endsection

@push('scripts')
    <script src="{{ asset('tinymce/js/tinymce/tinymce.min.js') }}"></script>
    <script type='text/javascript'>
        tinymce.init({ selector:'textarea', menubar:''});
        </script>
@endpush
