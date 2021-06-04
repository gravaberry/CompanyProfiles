@extends('layouts.master')
@section('content')
<div class="products-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-all text-center">
                  <h1>PROJECT WHEEL LOADER</h1>
                </div>
            </div>
        </div>
       <div class="row special-list">
        @foreach ($galeri as $galeri)
            <div class="col-lg-3 col-md-6 special-grid bulbs">


                    <div class="products-single fix">
                            <div class="box-img-hover">
                                <img src="{{ asset('assets2/img/galeri/'.$galeri->gambar) }}" class="img-fluid" alt="Image">
                            </div>
                    </div>


            </div>
            @endforeach

        </div>
    </div>
</div>
@endsection
