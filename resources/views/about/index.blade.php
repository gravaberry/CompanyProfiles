@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="karir-gambar mt-5">
            <div class="karir-color">
            <h1 class="loker">@lang('home.about')</h1>
            </div>
        </div>
    </div>
</div>
    <div class="about-box-main">
        <div class="container ml-auto">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-frame " id="banner-frame">
                         <img class="img-fluid" src="{{ asset('assets/images/about2.jpg') }}" alt="" />
                    </div>
                </div>
                <div class="col-lg-6 about-text text-justify">
                    <h2 class="noo-sh-title-top">@lang('home.about-simple')</h2>
                    <p>@lang('home.paragraph-1')</p>

                    <p>@lang('home.paragraph-2')</p>

                    <p> @lang('home.paragraph-3')</p>

                </div>
            </div>
        </div>
    </div>
@endsection
