<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class kategori_galeri extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(session()->get('email')== ""){ return redirect('loginbi')->with('warning','Mohon maaf Anda Belum Login');}
        $kategorigaleri=DB::table('kategorigaleri')->orderBy('urutan','ASC')->get();
       $data=array(
            'title' => 'Kategori Galeri',
            'kategorigaleri' =>$kategorigaleri
       );
        return view('admin/kategorigaleri/index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(session()->get('email')== ""){ return redirect('loginbi')->with('warning','Mohon maaf Anda Belum Login');}
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
        if(session()->get('email')== ""){ return redirect('loginbi')->with('warning','Mohon maaf Anda Belum Login');}
        $slug_kategori_galeri=Str::slug($request->nama_kategori_galeri,'-');
        DB::table('kategorigaleri')->where('id_kategorigaleri',$request->id_kategorigaleri)->update([
            'nama_kategori_galeri' => $request->nama_kategori_galeri,
            'slug_kategori_galeri' => $slug_kategori_galeri,
            'urutan' =>$request->urutan
        ]);
        return redirect('admin/kategorigaleri')->with(['success' => 'Data Berhasil DiUpdate']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_kategorigaleri)
    {
        if(session()->get('email')== ""){ return redirect('loginbi')->with('warning','Mohon maaf Anda Belum Login');}
        DB::table('kategorigaleri')->where('id_kategorigaleri',$id_kategorigaleri)->delete();

        return redirect('admin/kategorigaleri')->with(['danger' => 'Data Berhasil DiHapus']);
    }
}
