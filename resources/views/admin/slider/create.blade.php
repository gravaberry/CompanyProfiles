@extends('layouts.base')
@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
       <li class="breadcrumb-item active" aria-current="page">Kategori Galeri</li>
      <li class="breadcrumb-item active" aria-current="page">Tambah</li>
    </ol>
  </nav>
  <br>


<form action="{{ asset('admin/slider/create_proses') }}" method="post" enctype="multipart/form-data" accept-charset="utf-8">
    @csrf
    <div class="row form-group">
        {{-- <input type="hidden" name="id_slider" id="id_slider" value="{{ old('id_slider') }}"> --}}
      <label class="col-md-3 text-right">Judul Slider</label>
      <div class="col-md-6">
        <input type="text" name="judul" id="judul" class="form-control form-control-lg" placeholder="Judul Slider" value="{{ old('judul') }}">
        @error('judul')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
      </div>
    </div>
    <div class="row form-group">
      <label class="col-md-3 text-right">Jenis Slider</label>
      <div class="col-md-6">
        <select name="jenis_slider" id="jenis_slider" value="{{ old('jenis_slider') }}" class="form-control select2">

           <option value="Homepage">Home Page</option>
           <option value="Galeri">Galeri</option>
        </select>
        <small class="text-success">Kategori konten</small>
      </div>
    </div>

    <div class="row form-group">
      <label class="col-md-3 text-right">Upload gambar &amp; Urutan</label>
      <div class="col-md-3">
        <input type="file" name="gambar" id="gambar" value={{ old('gambar') }} class="form-control" placeholder="Upload gambar">
        @error('gambar')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
      </div>
      <div class="col-md-3">
        <input type="number" name="urutan" id="urutan" class="form-control" placeholder="Urutan" value="{{ old('urutan') }}">
        @error('urutan')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
      </div>
    </div>


    <div class="row form-group">
      <label class="col-md-3 text-right">Isi</label>
      <div class="col-md-9">
        <textarea name="isi" class="form-control" id="kontenku" id="isi" placeholder="Isi Slider">{{ old('isi') }}</textarea>
        @error('isi')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
      </div>
    </div>

    <div class="row form-group">
      <label class="col-md-3 text-right">Status, Tanggal</label>
      <div class="col-md-2">
        <select name="slider_status" id="slider_status" value="{{ old('slider_status') }}" class="form-control select2">
          <option value="Publish">Publikasikan</option>
          <option value="Draft">Simpan sebagai draft</option>}
        </select>
      </div>
      <div class="col-md-2">
        <input type="date" name="tanggal_publish" id="tanggal_publish" class="form-control tanggal" placeholder="Tanggal publikasi"  data-date-format="dd-mm-yyyy">
        @error('tanggal_publish')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
    </div>
    </div>

    <div class="row form-group">
        <label class="col-md-3 text-right">Status Text Tampilkan</label>
        <div class="col-md-2">
          <select name="status_text" id="status_text" value="{{ old('status_text') }}" class="form-control select2">
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>}
          </select>
        </div>
    </div>

    <div class="row form-group">
      <label class="col-md-3 text-right"></label>
      <div class="col-md-9">
        <div class="form-group">
          <button type="submit" name="submit" class="btn btn-success "><i class="fa fa-save"></i> Simpan Data</button>
          <input type="reset" name="reset" class="btn btn-info " value="Reset">
        </div>
      </div>
    </div>
    </form>



@endsection
