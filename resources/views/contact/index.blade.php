@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="karir-gambar mt-5">
            <div class="karir-color">
            <h1 class="loker">@lang('home.contact')</h1>
            </div>
        </div>
    </div>
</div>
<div class="contact-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-12">
                <iframe src="{{ $site->google_map }}" width="700" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                <div class="contact-form-right  mt-1">
                    <div class="container mt-5">
                        <form  action="{{ asset('contact/send') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="@lang('home.name')" required data-error="@lang('home.requirename')">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" placeholder="@lang('home.email')" id="email" class="form-control" name="email" required data-error="@lang('home.requireemail')">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="@lang('home.subject')" required data-error="@lang('home.requiresubject')">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="message" name="message" placeholder="@lang('home.message')" rows="4" data-error="@lang('home.requiremessage')" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="submit-button text-center">
                                        <button class="btn hvr-hover" id="submit" type="submit">@lang('home.submit')</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
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
