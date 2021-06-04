@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="karir-gambar mt-5">
            <div class="karir-color box-lowongan">
            <h1 class="loker">LOWONGAN KERJA</h1>
            </div>
        </div>
    </div>
</div>

<div class=" karir">

<div class="products-box shadow-sm">
    <div class="container">
       <div class="row special-list ">
            @foreach ($career as $karir)


            <div class="col-lg-6 col-md-6 special-grid bulbs karir-list mt-3">
                <div class="products-single fix-karir card-karir">
                    <div class="card ml-auto box-container">
                        <h5 class="card-header"><?php echo $karir->title ?></h5>
                        <div class="card-body">
                          <p class="card-text"><?php echo $karir->deskripsi ?></p>
                        </div>
                    </div>
                </div>
            </div>

           @endforeach
        </div>
    </div>
</div>

</div>


@endsection
