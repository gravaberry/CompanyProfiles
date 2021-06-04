@extends('layouts.master')
@section('content')
<div class="products-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-all text-center">
                  <h1>PROJECT EXCAVATOR</h1>
                </div>
            </div>
        </div>
       <div class="row special-list">
        <div class="row special-list">
         @foreach ($galeris as $galeris)
            <div class="col-lg-3 col-md-6 special-grid bulbs">
                <div class="products-single fix">
                  <div class="box-img-hover">
                    <div class="type-lb">

                        </div>
                        <img src="{{ asset('assets2/img/galeri/'.$galeris->gambar)}}" class="img-fluid" alt="Image">
                    </div>
                </div>
            </div>
            @endforeach

           </div>
    </div>
</div>
@endsection
