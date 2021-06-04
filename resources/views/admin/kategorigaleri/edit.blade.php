<!-- Modal -->
<div class="modal fade" id="Edit{{ $kg->id_kategorigaleri }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modelheading"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
              </button>
                </div>
                 <div class="modal-body">
                  <form action="{{ asset('admin/kategorigaleri/edit') }}" method="post" accept-charset="utf-8">
                    @csrf
                    <input name="id_kategorigaleri" id="id_kategorigaleri" type="hidden" value="{{ $kg->id_kategorigaleri }}">
                    <div class="form-group row">
                     <label class="col-sm-4 col-form-label">Nama</label>
                      <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama_kategori_galeri" name="nama_kategori_galeri" value="{{ $kg->nama_kategori_galeri }}" placeholder=" isi nama kategori galeri" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="urutan" class="col-sm-4 col-form-label">Urutan</label>
                  <div class="col-sm-8">
                    <input type="number" class="form-control" id="urutan" name="urutan" value="{{ $kg->urutan }}" placeholder="urutan kategori galeri" required>
                  </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-primary" value="Update Data">Update Data</button>
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                  </div>
            <div class="clear-fix"></div>
        </form>
      </div>
    </div>
  </div>
</div>
