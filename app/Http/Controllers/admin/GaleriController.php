<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\galeri_model;
use Image;

class GaleriController extends Controller
{
    public function index()
    {
        if(session()->get('email')== ""){ return redirect('loginbi')->with('warning','Mohon maaf Anda Belum Login');}
        $user= DB::table('users')->orderBy('id_user')->first();
        $galeri =DB::table('galeris')->orderBy('urutan','DESC')->get();
        $data=array('title'=> 'Galeri',
                    'galeris' => $galeri,
                    'user' => $user
    );
        return view('admin.galeri.index', $data);

    }
    public function cari(request $request)
    {
        if(session()->get('email')== ""){ return redirect('loginbi')->with('warning','Mohon maaf Anda Belum Login');}
        $user= DB::table('users')->orderBy('id_user')->first();
        $mygaleri = new galeri_model();
        $keywords =$request->keyowords;
        $galeri = $mygaleri->cari($keywords);

        $data =array(
                'title' => 'Data Galeri',
                'galeris' => $galeri,
                'user'      => $user
        );
        return view('admin.galeri.index',$data);
    }

    public function create()
    {
        if(session()->get('email')== ""){ return redirect('loginbi')->with('warning','Mohon maaf Anda Belum Login');}
        $user= DB::table('users')->orderBy('id_user')->first();
        $data=array('title' => 'Tambah galeri',
        'user'      => $user
    );
        return view('admin.galeri.create',$data);
    }

    public function store(Request $request)
    {
        if(session()->get('email')== ""){ return redirect('loginbi')->with('warning','Mohon maaf Anda Belum Login');}
        request()->validate([
            'judul_galeri' => 'required',
            'jenis_galeri' => 'required',
            'gambar' =>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'website' => 'required',
            'popup_status' => 'required',
            'urutan' => 'required',
        ]);
        //start upload
        $image                  = $request->file('gambar');
        $filenamewithextension  =$request->file('gambar')->getClientOriginalName();
        $filename               =pathinfo($filenamewithextension, PATHINFO_FILENAME);
        $input['name_file']     =date('YmdHis').'.'.$image->getClientOriginalExtension();
        $destinationPath       ='./assets2/img/galeri/';
        $img =Image::make($image->getRealPath(),array(
            'width'     =>150,
            'height'    =>150,
            'grayscale' => false
        ));
        $img->save($destinationPath.'/'.$input['name_file']);
        $destinationPath ='./assets2/img/galeri/';
        $image->move($destinationPath, $input['name_file']);

        DB::table('galeris')->insert([
            'judul_galeri'          =>$request->judul_galeri,
            'jenis_galeri'          =>$request->jenis_galeri,
            'gambar'                =>$input['name_file'],
            'website'               =>$request->website,
            'popup_status'          =>$request->popup_status,
            'urutan'                =>$request->urutan,
            ]);

            return redirect('admin/galeri')->with('success','Data Berhasil disimpan');

    }

    public function edit($id_galeri)
    {
        if(session()->get('email')== ""){ return redirect('loginbi')->with('warning','Mohon maaf Anda Belum Login');}
        $modelgaleris= new galeri_model();
        $galeri= $modelgaleris->detail($id_galeri);

        $data= array('title' =>'edit Galeri',
                     'galeris' =>$galeri
            );
            return view('admin.galeri.edit',$data);
    }

    public function edit_proses(Request $request)
    {
        if(session()->get('email')== ""){ return redirect('loginbi')->with('warning','Mohon maaf Anda Belum Login');}
            request()->validate([
                'judul_galeri' => 'required',
                'jenis_galeri' => 'required',
                'website' => 'required',
                'popup_status' => 'required',
                'urutan' => 'required',

        ]);
        if(!empty($image)) {
            $image                  = $request->file('gambar');
            $filenamewithextension  = $request->file('gambar')->getClientOriginalName();
            $filename               = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $input['nama_file']     = date('YmdHis').'.'.$image->getClientOriginalExtension();
            $destinationPatch       ='./assets2/img/galeri/';
            $img = Image::make($image->getRealPath(),array(
                'width'     => 150,
                'height'    => 150,
                'grayscale' => false
            ));
            $img->save($destinationPatch.'/'.$input['nama_file']);
            $destinationPatch       ='./assets2/img/galeri/';
            $image->move($destinationPatch, $input['nama_file']);
            // END UPLOAD

            DB::table('galeris')->where('id_galeri',$request->id_galeri)->update([
                'judul_galeri'          =>$request->judul_galeri,
                'jenis_galeri'          =>$request->jenis_galeri,
                'gambar'                =>$input['nama_file'],
                'website'               =>$request->website,
                'popup_status'          =>$request->popup_status,
                'urutan'                =>$request->urutan,
                ]);
        }else{

            DB::table('galeris')->where('id_galeri',$request->id_galeri)->update([
                'judul_galeri'          =>$request->judul_galeri,
                'jenis_galeri'          =>$request->jenis_galeri,
                'website'               =>$request->website,
                'popup_status'          =>$request->popup_status,
                'urutan'                =>$request->urutan,
                ]);

        }
        return redirect('admin/galeri')->with('success','Data Berhasil diUpdate');
    }

    public function delete($id_galeri)
    {
        if(session()->get('email')== ""){ return redirect('loginbi')->with('warning','Mohon maaf Anda Belum Login');}
        DB::table('galeris')->where('id_galeri',$id_galeri)->delete();

        return redirect('admin/galeri')->with('success','Data Berhasil Dihapus');
    }
}
