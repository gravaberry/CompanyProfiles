@extends('layouts.master')
@section('content')

<div id="slides-shop" class="cover-slides">
    <ul class="slides-container">
        <li class="text-center">
            <img src="{{ asset('assets/images/bannerB1.jpg') }}" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="m-b-20"><strong>@lang('home.slide1') <br> PT.Belawan Indah</strong></p>
                    </div>
                </div>
            </div>
        </li>
        <li class="text-center">
            <img src="{{ asset('assets/images/bannerB2.jpg') }}" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="m-b-20"><strong>@lang('home.slide2')</strong></p>
                    </div>
                </div>
            </div>
        </li>
        <li class="text-center">
            <img src="{{ asset('assets/images/bannerB3.jpg') }}" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="m-b-20"><strong>@lang('home.slide3')</strong></p>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <div class="slides-navigation">
        <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
        <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
    </div>
</div>

<br>
<!-- End Slider -->


@endsection
