<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>PT. Belawan Indah - Smart Solutions To Your Cargo Needs</title>
    <meta name="transportation" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{ asset('assets/images/BI.ico')}}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style2.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets2/sweetalert2/sweetalert2.css') }}">

    <script src="{{ asset('assets2/sweetalert2/sweetalert2.min.js') }}"></script>



</head>

<body>
    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="custom-select-box">
                        </select>
                    </div>
                    <div class="right-phone-box">
                        <p>Call US :- <a href="contact-us.html"> 061-6943613 </a></p>
                    </div>
                    <div class="our-link active">
                        <ul>
                            <li class="nav-link active"><a class="nav-link active" href="locale/en">ENGLISH</a></li>
                            <li class="nav-item"><a class="nav-link" href="locale/in">INDONESIA</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="login-box">
                    </div>
                    <div class="text-slid-box">
                        <div id="offer-box" class="carouselTicker">
                            <ul class="offer-box">
                                <li>
                                    <i class="fab fa-opencart"></i> Transportation Company
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Rental Of Heavy Equipment
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Warehouse Facilities
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Sales Of Trailer Parts
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> One Stop Solutions For Your Cargo
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->

        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="{{ asset('home') }}"><img src="{{ asset('assets2/img/galeri/'.$site->logo )}}" alt="" width="200" class="logo"></a>

                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="dropdown"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Transport Order</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown"><a href="#">Prime Mover</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ __('container') }}">Container</a></li>
                                        <li><a href="{{ __('breakbulk') }}">Breakbulk</a></li>
                                        <li><a href="{{ __('heavyduty') }}">Heavy Duty</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown"><a href="#">Dump Truck</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ __('bulkcargo') }}">Bulk Cargo</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown"><a href="#">Cargo Truck</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ __('cargobreakbulk') }}">Break Bulk</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Heavy Equipment Rental</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown"><a href="{{ __('crane') }}">Crane</a></li>
                                <li class="dropdown"><a href="{{ __('forkclift') }}">Forklift</a></li>
                                <li class="dropdown"><a href="{{ __('excavator') }}">Excavator</a></li>
                                <li class="dropdown"><a href="{{ __('wheelloader') }}">Wheel Loader</a></li>
                                <li class="dropdown"><a href="{{ __('compactor') }}">Compactor</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ asset('about') }}">@lang('home.about')</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ asset('contact') }}">@lang('home.contact')</a></li>
                        <?php
                                $karir =DB::table('careers')->get();
                                ?>
                        <li class="nav-item"><a class="nav-link" href="{{ asset('jobkarir') }}">@lang('home.karir')<i class="fa fa-award"></i><span class="badge"> {{ count($karir) }}</span></a></li>

                    </ul>
                </div>

        </nav>
        <!-- End Navigation -->
    </header>
    @yield('content')


    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>@lang('home.information')</h4>
                            <ul>
                                <li><a href="{{ __('about') }}">@lang('home.about')</a></li>
                                <li><a href="{{ __('contact') }}">@lang('home.contact')</a></li>
                                {{-- <li><a href="contact-us.html">@lang('home.delivery')</a></li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>@lang('home.contact')</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>@lang('home.address'): {{ $site->alamat }} <br>{{ $site->kota }}<br>{{ $site->provinsi }} </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>@lang('home.phone'): <a href="tel:+061-6943613">(061) {{ $site->phone }}</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope">
									</i>Email: <a href="mailto:marketing@belawanindah.com">{{ $site->email }}</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-top-box">
                            <h3>@lang('home.social-media')</h3>
                            <p>@lang('home.follow')</p>
                            <ul>
                                <li><a href="{{ $site->facebook }}"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="{{ $site->instagram }}"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="footer-top-box">
                            <h3>Office Time</h3>
                            <ul class="list-time">
                                <li>Monday - Friday: 08.30am to 05.00pm</li>
                                <li>Saturday: 08.30am to 12.00pm</li>
                                <li>Sunday: <span>Closed</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved <span></span><i class="fa fa-copyright" aria-hidden="true"></i> 2020 <a href="#">PT. Belawan Indah</a>
            <a href="https://html.design/"></a>
        </p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{ asset('assets/js/jquery.superslides.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-select.js') }}"></script>
    <script src="{{ asset('assets/js/inewsticker.js') }}"></script>
    <script src="{{ asset('assets/js/bootsnav.js') }}"></script>
    <script src="{{ asset('assets/js/images-loded.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/baguetteBox.min.js') }}"></script>
    <script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    @stack('scripts')
    <script>
        @if ($message =Session::get('success'))
            swal.fire ("Berhasil" , "<?php echo $message ?>" , "success")
        @endif

        @if ($message =Session::get('warning'))
            swal.fire ("Opps"  , "<?php echo $message ?>" , "warning")
        @endif

        </script>
</body>

</html>
