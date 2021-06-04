@extends('layouts.base')
@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Kategori Galeri</li>
        </ol>
      </nav>
      @if ($message=Session::get('success'))
      <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>

      @endif

    @if ($message=Session::get('danger'))
    <div class="alert alert-danger alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <strong>{{ $message }}</strong>
  </div>
  @endif
      <div class="card">
        <div class="card-header">
            <button type="submit" class="btn btn-success" id="tambahkg" data-toggle="modal" data-target="#modalkg">
             <i class="fa fa-plus-circle" aria-hidden="true"></i>KategoriGaleri
            </button>
        </div>
        <div class="card-body">
            <table class="table tablekg" id="tablekg">
                <thead>
                  <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Slug Kategori</th>
                    <th scope="col">Nama Kategori</th>
                    <th scope="col">Urutan</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>

                <tbody>
                   <?php $i=1; foreach ($kategorigaleri as $kg) {?>
                        <tr>
                        <td class="text-center">{{ $i }} </td>
                        <td>{{ $kg->slug_kategori_galeri }} </td>
                        <td>{{ $kg->nama_kategori_galeri }} </td>
                        <td>{{ $kg->urutan }} </td>
                        <td>
                            <button class="btn">
                                <button type="submit" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#Edit{{ $kg->id_kategorigaleri }}"><i class="fas fa-edit    "></i></button>

                                </button>
                                <a href="{{ asset('admin/kategorigaleri/hapus/'.$kg->id_kategorigaleri) }}" class="btn btn-danger btn-sm delete-link"> <i class="fa fa-trash" aria-hidden="true"></i></a>
                                @include('admin/kategorigaleri/edit')
                        </td>
                    </tr>
                        <?php $i++; } ?>
                </tbody>
              </table>
        </div>
      </div>
</div>




{{-- modal --}}


  <!-- Modal -->
  <div class="modal fade" id="modalkg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modelheading">Tambah Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
              </button>
                </div>
                 <div class="modal-body">
                  <form action="{{ __('kategorigaleri/tambah') }}" id="kgform" name="kgform" class="form-horizontal" method="POST" >
                    @csrf
                    <div class="form-group row">
                     <label for="slug" class="col-sm-4 col-form-label">Nama</label>
                      <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama_kategori_galeri" name="nama_kategori_galeri" placeholder=" isi nama kategori galeri" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="urutan" class="col-sm-4 col-form-label">Urutan</label>
                  <div class="col-sm-8">
                    <input type="number" class="form-control" id="urutan" name="urutan" placeholder="urutan kategori galeri" required>
                  </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-primary" id="savebtn" name="savebtn" value="create">Save</button>
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                  </div>
        </form>
      </div>
    </div>
  </div>
</div>


@endsection

@push('scripts')
<script>
$(document).ready( function () {
    $('#tablekg').DataTable({
        "paging" :false,
                "lengtchange" :false,
                "searching" :true,
                "ordering" :true,
                "info" :true,
                "autowidth" :false,
    });

});
</script>
@endpush
