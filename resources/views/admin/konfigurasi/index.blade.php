@extends('layouts.base')
@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data Konfigurasi Umum PT. Belawan Indah</li>
        </ol>
      </nav>
      <div class="col-sm-6">
          <h1><strong>Data Konfigurasi</strong></h1>
      </div>
      <hr>

      <form action="{{ asset('admin/konfigurasi/proses_konfigurasi') }}" method="POST"  accept-charset="utf-8">
        @csrf
    <div class="row">
      <div class="col-sm-12">
          <input type="hidden" name="id_konfigurasi" id="id_konfigurasi" value="{{ $site->id_konfigurasi }}">
        <div class="form-group">
            <label for="">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" id="deskripsi" rows="20"><?php echo $site->deskripsi ?></textarea>
          </div>
      </div>
        <div class="col-sm-6">
            <div class="form-group">
              <label for="">Nama Website</label>
              <input type="text" name="namaweb" id="namaweb" class="form-control" value="<?php echo $site->namaweb ?>" placeholder="" aria-describedby="helpId">
              @error('namaweb')
                  <div class="alert alert-success" role="alert">
                      {{ $message}}
                  </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="">Web Deskripsi</label>
              <input type="text" name="web_deskripsi" id="web_deskripsi" class="form-control" value="<?php echo $site->web_deskripsi ?>" placeholder="" aria-describedby="helpId">
              @error('web_deskripsi')
                  <div class="alert alert-success" role="alert">
                      {{ $message}}
                  </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="">nama_perusahaan</label>
              <input type="text" name="nama_perusahaan" id="nama_perusahaan" value="<?php echo $site->nama_perusahaan ?>" class="form-control" placeholder="" aria-describedby="helpId">
              @error('nama_perusahaan')
                  <div class="alert alert-success" role="alert">
                      {{ $message}}
                  </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="">Nama Singkatan</label>
              <input type="text" name="singkatan" id="singkatan" class="form-control" value="<?php echo $site->singkatan ?>" placeholder="" aria-describedby="helpId">
              @error('singkatan')
                  <div class="alert alert-success" role="alert">
                      {{ $message}}
                  </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="">Website Address</label>
              <input type="text" name="website_address" id="website_address" value="<?php echo $site->website_address ?>" class="form-control" placeholder="" aria-describedby="helpId">
              @error('website_address')
                  <div class="alert alert-success" role="alert">
                      {{ $message}}
                  </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input type="email" name="email" id="email" value="<?php echo $site->email ?>" class="form-control" placeholder="" aria-describedby="helpId">
              @error('email')
                  <div class="alert alert-success" role="alert">
                      {{ $message}}
                  </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="">Phone</label>
              <input type="number" name="phone" id="phone" value="<?php echo $site->phone ?>" class="form-control" placeholder="" aria-describedby="helpId">
              @error('phone')
                  <div class="alert alert-success" role="alert">
                      {{ $message}}
                  </div>
              @enderror
            </div>

            <div class="form-group">
                <label for="">Google Map</label>
                <input type="text" name="google_map" id="google_map" value="<?php echo $site->google_map ?>" class="form-control form-control-lg" col="10" placeholder="" aria-describedby="helpId">
                @error('google_map')
                    <div class="alert alert-success" role="alert">
                        {{ $message}}
                    </div>
                @enderror
              </div>

            <div class="form-group">
                <iframe src="<?php echo $site->google_map ?>" width="500" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
              <label for="">Facebook</label>
              <input type="text" name="facebook" id="facebook" value="<?php echo $site->facebook ?>" class="form-control" placeholder="" aria-describedby="helpId">
              @error('facebook')
                  <div class="alert alert-success" role="alert">
                      {{ $message}}
                  </div>
              @enderror
            </div>

            <div class="form-group">
                <label for="">Twitter</label>
                <input type="text" name="twitter" id="twitter" value="<?php echo $site->twitter ?>" class="form-control" placeholder="" aria-describedby="helpId">
                @error('twitter')
                    <div class="alert alert-success" role="alert">
                        {{ $message}}
                    </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="">Instagram</label>
                <input type="text" name="instagram" id="instgram" value="<?php echo $site->instagram ?>" class="form-control" placeholder="" aria-describedby="helpId">
                @error('instagram')
                    <div class="alert alert-success" role="alert">
                        {{ $message}}
                    </div>
                @enderror
              </div>

            <div class="form-group">
                <label for="">Nama Facebook</label>
                <input type="text" name="nama_facebook" id="nama_facebook" value="<?php echo $site->nama_facebook ?>" class="form-control" placeholder="" aria-describedby="helpId">
                @error('nama_facebook')
                    <div class="alert alert-success" role="alert">
                        {{ $message}}
                    </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="">Nama Twitter</label>
                <input type="text" name="nama_twitter" id="nama_twitter" value="<?php echo $site->nama_twitter ?>" class="form-control" placeholder="" aria-describedby="helpId">
                @error('nama_twitter')
                    <div class="alert alert-success" role="alert">
                        {{ $message}}
                    </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="">Nama Instagram</label>
                <input type="text" name="nama_instagram" id="nama_instagram" value="<?php echo $site->nama_instagram ?>" class="form-control" placeholder="" aria-describedby="helpId">
                @error('nama_instagram')
                    <div class="alert alert-success" role="alert">
                        {{ $message}}
                    </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="">Nama Instagram</label>
                <input type="text" name="nama_instagram" id="nama_instagram" value="<?php echo $site->nama_instagram ?>" class="form-control" placeholder="" aria-describedby="helpId">
                @error('nama_instagram')
                    <div class="alert alert-success" role="alert">
                        {{ $message}}
                    </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="">Alamat</label>
                <input type="text" name="alamat" id="alamat" value="<?php echo $site->alamat ?>" class="form-control" placeholder="" aria-describedby="helpId">
                @error('alamat')
                    <div class="alert alert-success" role="alert">
                        {{ $message}}
                    </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="">Kota</label>
                <input type="text" name="kota" id="kota" value="<?php echo $site->kota ?>" class="form-control" placeholder="" aria-describedby="helpId">
                @error('kota')
                    <div class="alert alert-success" role="alert">
                        {{ $message}}
                    </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="">Provinsi</label>
                <input type="text" name="provinsi" id="provinsi" value="<?php echo $site->provinsi ?>" class="form-control" placeholder="" aria-describedby="helpId">
                @error('provinsi')
                    <div class="alert alert-success" role="alert">
                        {{ $message}}
                    </div>
                @enderror
              </div>
            <div class="form-group">
                <button type="submit" class="btn btn-md btn-success">Update</button>
                <button type="reset" class="btn btn-md btn-warning">Reset</button>
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
