<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;
use App\Models\CareerModel;
use Illuminate\Support\Facades\Validator;


class CareerController extends Controller
{
    public function index()
    {
        if(session()->get('email') == ""){ return redirect('loginbi')->with('warning','Username and Password anda Salah');}
        $user =DB::table('users')->orderBy('id_user','DESC')->first();
        $karirs =new CareerModel();
        $career =$karirs->karir();
        $data =array(
                'title' => 'Job Karir',
                'user'  => $user,
                'career'=> $career
       );

        return view('admin.career.index',$data);
    }

    public function tambah()
    {

        if(session()->get('email') == ""){ return redirect('loginbi')->with('warning','Username and Password anda Salah');}
        $user =DB::table('users')->orderBy('id_user','DESC')->first();
        $data=array(
            'title' => 'Tambah Career',
            'user'  => $user

        );
        return view('admin.career.tambah',$data);

    }

    public function proses_tambah(request $request)
    {
        if(session()->get('email') == ""){ return redirect('loginbi')->with('warning','Username and Password anda Salah');}
        request()->validate([
            'title'         => 'required',
            'gambar'        => 'required|image|mimes:png,jpg,jpeg',
            'deskripsi'     => 'required',
            'tanggal'       => 'required'
        ]);

        $image                  = $request->file('gambar');
        $filenamewithextension  = $request->file('gambar');
        $filename               = pathinfo($filenamewithextension, PATHINFO_FILENAME);
        $input['name_file']     = date('YmdHis').'.'.$image->getClientOriginalExtension();
        $destinationpath        ='./assets2/img/galeri/';
        $img= Image::make($image->getRealPath(),array(
            'width' =>158,
            'height'=> 150,
            'grayscale'=>false
        ));
         $img->save($destinationpath.'/'.$input['name_file']);
         $destinationpath= './assets2/img/galeri/';
         $image->move($destinationpath, $input['name_file']);


         DB::table('careers')->insert([
            'id_user'   => session()->get('id_user'),
            'title'     => $request->title,
            'gambar'    => $input['name_file'],
            'deskripsi' => $request->deskripsi,
            'tanggal'   => $request->tanggal
         ]);
         return redirect('admin/career')->with('success','Career Berhasil di Tambah');
    }
    public function edit($id_career)
    {

        if(session()->get('email') == ""){ return redirect('loginbi')->with('warning','Username and Password anda Salah');}
        $user =DB::table('users')->orderBy('id_user','DESC')->first();
        $karirs= new CareerModel();
        $karir= $karirs->details($id_career);
        $data =array(
                'title' => 'Edit Karir',
                'user'  => $user,
                'career'=> $karir
        );
        return view('admin.career.edit',$data);

    }
    public function edit_proses(Request $request)
    {

        if(session()->get('email') == ""){ return redirect('loginbi')->with('warning','Username and Password anda Salah');}
        request()->validate([
            'title'         => 'required',
            'deskripsi'     => 'required',
            'tanggal'       => 'required'
        ]);

        if(!empty($image)){
        $image                  = $request->file('gambar');
        $filenamewithextension  = $request->file('gambar');
        $filename               = pathinfo($filenamewithextension, PATHINFO_FILENAME);
        $input['name_file']     = date('YmdHis').'.'.$image->getClientOriginalExtension();
        $destinationpath        ='./assets2/img/galeri/';
        $img= Image::make($image->getRealPath(),array(
            'width' =>158,
            'height'=> 150,
            'grayscale'=>false
        ));
         $img->save($destinationpath.'/'.$input['name_file']);
         $destinationpath= './assets2/img/galeri/';
         $image->move($destinationpath, $input['name_file']);


         DB::table('careers')->where('id_career',$request->id_career)->update([
            'id_user'   => session()->get('id_user'),
            'title'     => $request->title,
            'gambar'    => $input['name_file'],
            'deskripsi' => $request->deskripsi,
            'tanggal'   => $request->tanggal
         ]);
        }else{
            DB::table('careers')->where('id_career',$request->id_career)->update([
                'id_user'   => session()->get('id_user'),
                'title'     => $request->title,
                'deskripsi' => $request->deskripsi,
                'tanggal'   => $request->tanggal
             ]);
        }
         return redirect('admin/career')->with('success','Career Berhasil di Update');
    }
    public function delete($id_career)
    {
        DB::table('careers')->where('id_career',$id_career)->delete();
        return redirect('admin/career')->with('success','Data Career Berhasil di Hapus');

    }
}
