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
<form action="{{ asset('admin/galeri/store') }}" method="post" enctype="multipart/form-data" accept-charset="utf-8">
    @csrf
    <div class="row form-group">
        <label class="col-md-3 text-right">Upload gambar</label>
            <div class="col-md-9">
             <input type="file" name="gambar" class="form-control" required="required" placeholder="Upload gambar">
             @error('gambar')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
        </div>
    </div>

    <div class="row form-group">
        <label class="col-md-3 text-right">Judul galeri</label>
            <div class="col-md-9">
                <input type="text" name="judul_galeri" class="form-control" placeholder="Judul galeri" value="{{ old('judul_galeri') }}">
                @error('judul_galeri')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                    </div>
                        </div>

    <div class="row form-group">

        <label class="col-md-3 text-right">Jenis & Urutan</label>
            <div class="col-md-3">
                <select class="form-control"   name="jenis_galeri" value="{{ old('jenis_galeri') }}">
                    <option value="Container">Container</option>
                    <option value="BreakBulk">Break Bulk</option>
                    <option value="HeavyDuty">Heavy Duty</option>
                    <option value="BulkCargo">Bulk Cargo</option>
                    <option value="CargoBreakBulk"> Cargo Break-Bulk</option>
                    <option value="Crane">Crane</option>
                    <option value="Forkclipt">Forkclipt</option>
                    <option value="Excavator">Excavator</option>
                    <option value="WheelLoader">WheelLoader</option>
                    <option value="Compactor">Compactor</option>

                </select>
                    <small>Posisi galeri</small>
                        </div>
    <div class="col-md-3">
        <input type="number" name="urutan" class="form-control" placeholder="No urut tampil" value="{{ old('urutan') }}">
        @error('urutan')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            <small class="text-success">Urutan</small>
                </div>
                    </div>

    <div class="row form-group">

        <label class="col-md-3 text-right">PopUp Status</label>
            <div class="col-md-3">
                <select class="form-control"   name="popup_status" value="{{ old('popup_status') }}">
                <option value="Publish">Publish</option>
                <option value="Draft">Draft</option>
            </select>
                    </div>
                        </div>

    <div class="row form-group">
        <label class="col-md-3 text-right">Link / website yang terkait dengan Galeri</label>
                <div class="col-md-9">
                <input type="url" name="website" class="form-control" placeholder="http://website.com" value="{{ old('website') }}">
                @error('website')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                    </div>
                        </div>

    <div class="row form-group">
        <label class="col-md-3 text-right"></label>
            <div class="col-md-9">
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-success " value="Simpan Data">
                        <input type="reset" name="reset" class="btn btn-info " value="Reset">
                            </div>
                                </div>
                                    </div>
                                        </form>

@endsection
