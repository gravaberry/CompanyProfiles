<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\kategorigaleri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class KategoriGaleriController extends Controller
{
    public function index(Request $request)
    {
       $kategorigaleri=DB::table('kategorigaleri')->orderBy('urutan','ASC')->get();
       $user= DB::table('users')->orderBy('id_user')->first();
       $data=array(
            'title' => 'Kategori Galeri',
            'kategorigaleri' =>$kategorigaleri,
            'user'      => $user
       );
        return view('admin/kategorigaleri/index',$data);
    }
    public function tambah(Request $request)
    {
        $slug_kategori_galeri=Str::slug($request->nama_kategori_galeri,'-');
        DB::table('kategorigaleri')->Insert([
            'nama_kategori_galeri' => $request->nama_kategori_galeri,
            'slug_kategori_galeri' => $slug_kategori_galeri,
            'urutan' =>$request->urutan
        ]);
        return redirect('admin/kategorigaleri')->with(['success' => 'Data Berhasil Disimpan']);
    }
    public function update(Request $request)
    {
        $slug_kategori_galeri=Str::slug($request->nama_kategori_galeri,'-');
        DB::table('kategorigaleri')->where('id_kategorigaleri',$request->id_kategorigaleri)->update([
            'nama_kategori_galeri' => $request->nama_kategori_galeri,
            'slug_kategori_galeri' => $slug_kategori_galeri,
            'urutan' =>$request->urutan
        ]);
        return redirect('admin/kategorigaleri')->with(['success' => 'Data Berhasil DiUpdate']);
    }
    public function delete($id_kategorigaleri)
    {
        DB::table('kategorigaleri')->where('id_kategorigaleri',$id_kategorigaleri)->delete();

        return redirect('admin/kategorigaleri')->with(['danger' => 'Data Berhasil DiHapus']);
    }
}
