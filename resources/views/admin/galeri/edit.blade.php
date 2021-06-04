@extends('layouts.base')
@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
       <li class="breadcrumb-item active" aria-current="page">Kategori Galeri</li>
      <li class="breadcrumb-item active" aria-current="page">Edit</li>

    <hr>
    </ol>
    <p class="text-right">
        <a href="{{ asset('admin/galeri') }}" class="btn btn-success btn-sm">
            <i class="fa fa-backward"></i> Kembali
        </a>
    </p>
  </nav>
  <br>
  <form action="{{ asset('admin/galeri/edit_proses') }}" method="post" enctype="multipart/form-data" accept-charset="utf-8">
      @csrf
      <input name="id_galeri" id="id_galeri" type="hidden" value="{{ $galeris->id_galeri }}">
      <div class="row form-group">
          <label class="col-md-3 text-right">Upload gambar</label>
              <div class="col-md-9">
               <input type="file" name="gambar" class="form-control" placeholder="Upload gambar">
          </div>
      </div>

      <div class="row form-group">
          <label class="col-md-3 text-right">Judul galeri</label>
              <div class="col-md-9">
                  <input type="text" name="judul_galeri" class="form-control" placeholder="Judul galeri" value="<?php echo $galeris->judul_galeri ?>">
                      </div>
                          </div>

      <div class="row form-group">

          <label class="col-md-3 text-right">Jenis & Urutan</label>
              <div class="col-md-3">
                  <select class="form-control"   name="jenis_galeri" value="{{ old('jenis_galeri') }}">
                      <option value="Container">Container</option>
                      <option value="BreakBulk" <?php if($galeris->jenis_galeri == "BreakBulk") {echo "selected";} ?>>Break Bulk</option>
                      <option value="HeavyDuty" <?php if($galeris->jenis_galeri == "HeavyDuty") {echo "selected";} ?>>Heavy Duty</option>
                      <option value="BulkCargo" <?php if($galeris->jenis_galeri == "BulkCargo") {echo "selected";} ?>>Bulk Cargo</option>
                      <option value="CargoBreakBulk" <?php if($galeris->jenis_galeri == "CargoBreakBulk") {echo "selected";} ?>> Cargo Break-Bulk</option>
                      <option value="Crane" <?php if($galeris->jenis_galeri == "Crane") {echo "selected";} ?>>Crane</option>
                      <option value="Forkclipt" <?php if($galeris->jenis_galeri == "Forkclipt") {echo "selected";} ?>>Forkclipt</option>
                      <option value="Excavator" <?php if($galeris->jenis_galeri == "Excavator") {echo "selected";} ?>>Excavator</option>
                      <option value="WheelLoader" <?php if($galeris->jenis_galeri == "WheelLoader") {echo "selected";} ?>>WheelLoader</option>
                      <option value="Compactor" <?php if($galeris->jenis_galeri == "Compactor") {echo "selected";} ?>>Compactor</option>

                  </select>
                      <small>Posisi galeri</small>
                          </div>
      <div class="col-md-3">
          <input type="number" name="urutan" class="form-control" placeholder="No urut tampil" value="{{ $galeris->urutan }}">
              <small class="text-success">Urutan</small>
                  </div>
                      </div>

      <div class="row form-group">

          <label class="col-md-3 text-right">PopUp Status</label>
              <div class="col-md-3">
                  <select class="form-control"   name="popup_status" value="{{ $galeris->popup_status }}">
                  <option value="Publish">Publish</option>
                  <option value="Draft" <?php if($galeris->popup_status == "Draft") {echo "selected";} ?>>Draft</option>
              </select>
                      </div>
                          </div>

      <div class="row form-group">
          <label class="col-md-3 text-right">Link / website yang terkait dengan Galeri</label>
                  <div class="col-md-9">
                  <input type="url" name="website" class="form-control" placeholder="http://website.com" value="{{ $galeris->website }}">
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
