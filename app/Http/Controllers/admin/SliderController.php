<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use dataTables;
use Illuminate\Support\Str;
use Image;
use file;
use pdf;


class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(session()->get('email')== ""){ return redirect('loginbi')->with('warning','Mohon maaf Anda Belum Login');}
        $user= DB::table('users')->orderBy('id_user','DESC')->first();
        $slider =DB::table('sliders')->orderBy('urutan','DESC')->get();
        $data =array('title' => 'Slider',
                     'slider'=>$slider,
                     'user'  => $user
        );

        return view('admin.slider.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(session()->get('email')== ""){ return redirect('loginbi')->with('warning','Mohon maaf Anda Belum Login');}
        $user= DB::table('users')->orderBy('id_user')->first();
        $data =array(
            'title' => 'Create Slider',
            'user' => $user
        );
        return view('admin.slider.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create_proses(Request $request)
    {
        if(session()->get('email')== ""){ return redirect('loginbi')->with('warning','Mohon maaf Anda Belum Login');}
            request()->validate([
                'judul'         => 'required',
                'jenis_slider' => 'required',
                'isi'          => 'required',
                'slider_status'=> 'required',
                'gambar'       => 'required',
                'urutan'       => 'required',
                'status_text'  => 'required',
                'tanggal_publish'      => 'required',
                'gambar' =>'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);



        $image                  = $request->file('gambar');
        $filenamewithextension  = $request->file('gambar')->getClientOriginalName();
        $filename               = pathinfo($filenamewithextension, PATHINFO_FILENAME);
        $input['nama_file']     = Str::slug($filename, '-').'-'.time().'.'.$image->getClientOriginalExtension();
        $destinationPath        = './assets2/img/thumbs/';
        $img = Image::make($image->getRealPath(),array(
            'width'     => 150,
            'height'    => 150,
            'grayscale' => false
        ));
        $img->save($destinationPath.'/'.$input['nama_file']);
        $destinationPath = './assets2/img/thumbs';
        $image->move($destinationPath, $input['nama_file']);



       DB::table('sliders')->Insert([
        'judul' => $request->judul,
        'jenis_slider' => $request->jenis_slider,
        'gambar'       => $input['nama_file'],
        'isi'          => $request->isi,
        'slider_status'=> $request->slider_status,
        'urutan'       => $request->urutan,
        'status_text'  => $request->status_text,
        'tanggal_publish'      => $request->tanggal_publish
       ]);

        return redirect('admin/slider')->with('success','Data Berhasil Disimpan');
    }

    public function edit($id_slider)
    {
        if(session()->get('email')== ""){ return redirect('loginbi')->with('warning','Mohon maaf Anda Belum Login');}
        $sliderku = new slider();
        $slider = $sliderku->detail($id_slider);
        $data = array('title' => 'Edit Slider',
                    'sliders' =>$slider
    );
    return view('admin/slider/edit',$data);
    }

    public function edit_proses(Request $request)
    {
        if(session()->get('email')== ""){ return redirect('loginbi')->with('warning','Mohon maaf Anda Belum Login');}
        // request()->validate([
        //         'judul'         => 'required',
        //         'jenis_slider' => 'required',
        //         'isi'          => 'required',
        //         'slider_status'=> 'required',
        //         'gambar'       => 'required',
        //         'urutan'       => 'required',
        //         'status_text'  => 'required',
        //         'tanggal_publish'      => 'required',
        //         'gambar' =>'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);

        if(!empty($image)) {
            $image                  = $request->file('gambar');
            $filenamewithextension  = $request->file('gambar')->getClientOriginalName();
            $filename               = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $input['nama_file']     = Str::slug($filename, '-').'-'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath        = './assets/upload/image/thumbs/';
            $img = Image::make($image->getRealPath(),array(
                'width'     => 150,
                'height'    => 150,
                'grayscale' => false
            ));
            $img->save($destinationPath.'/'.$input['nama_file']);
            $destinationPath = './assets/upload/image/';
            $image->move($destinationPath, $input['nama_file']);
            // END UPLOAD

            DB::table('sliders')->where('id_slider',$request->id_slider)->update([
                'judul'         => $request->judul,
                'jenis_slider' => $request->jenis_slider,
                'isi'          => $request->isi,
                'slider_status'=> $request->slider_status,
                'gambar'       => $input['nama_file'],
                'urutan'       => $request->urutan,
                'status_text'  => $request->status_text,
                'tanggal_publish'      => $request->tanggal_publish
           ]);
        }else{

        DB::table('sliders')->where('id_slider',$request->id_slider)->update([
                'judul' => $request->judul,
                'jenis_slider' => $request->jenis_slider,
                'isi'          => $request->isi,
                'slider_status'=> $request->slider_status,
                'urutan'       => $request->urutan,
                'status_text'  => $request->status_text,
                'tanggal_publish'      => $request->tanggal_publish
           ]);
    }

        return redirect('admin/slider')->with('success','Data Berhasil DiUpdate');
    }

    public function delete($id_slider)
    {
        if(session()->get('email')== ""){ return redirect('loginbi')->with('warning','Mohon maaf Anda Belum Login');}
        DB::table('sliders')->where('id_slider',$id_slider)->delete();
        return redirect('admin/slider')->with('success','Data Berhasil dihapus');
    }
}
