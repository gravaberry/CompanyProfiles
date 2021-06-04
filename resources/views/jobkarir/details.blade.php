@extends('layouts.master')
@section('content')

<div class="contact-box-main">
    <div class="container">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Job Career</li>
        </ol>
      </nav>
        <div class="row">
            <div class="col-lg-6 col-sm-12 mt-3">
                @foreach ($career as $karir)

                <div class="contact-info-left">
                    <h2><?php echo $karir->title ?></h2>
                    <div class="karir"><strong><?php echo $karir->deskripsi ?></strong></div>
                    <ul class="ala">
                        <li>
                            <p><i class="fas fa-map-marker-alt"></i>@lang('home.address'):PT. Belawan Indah Head Office
                            <br>Jl. Raya Pelabuhan I, Simpang Kampung Salam No. 1
                            <br>Medan Belawan, Kota Medan, Sumatera Utara 20414 - Indonesia
                        </li>
                        <li>
                            <p><i class="fas fa-phone-square"></i>@lang('home.phone'): <a href="tel:+061-6943613">+62 (061) 6943613</a></p>
                        </li>
                        <li>
                            <p><i class="fas fa-envelope"></i>Email: <a href="mailto:marketing@belawanindah.com">marketing@belawanindah.com</a></p>
                        </li>
                    </ul>
                </div>

                @endforeach
            </div>
{{--
            <div class="col-lg-6 col-sm-12 mt-1">
                <div class="contact-form-right ">

                @foreach ($career as $karir)
                    <div class="container mt-5">
                        <img src="{{ asset('assets2/img/galeri/'.$karir->gambar) }}" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
                    </div>
                    @endforeach
                </div>
            </div> --}}
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script src="{{ asset('tinymce/js/tinymce/tinymce.min.js') }}"></script>
    <script type='text/javascript'>
        tinymce.init({ selector:'textarea', menubar:''});
        </script>
@endpush
