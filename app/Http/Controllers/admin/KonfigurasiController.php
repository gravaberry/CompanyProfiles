<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\konfigurasis;
use Image;
use Illuminate\Support\Facades\Validator;

class KonfigurasiController extends Controller
{
    public function index(Request $request)
    {
        if(session()->get('email') == ""){ return redirect('loginbi')->with('warning','Username and Password anda salah');}
        $user =DB::table('users')->orderBy('id_user')->first();
        $kon = new konfigurasis();
        $site = $kon->listing();
        $data =array('title'    => 'Data Konfigurasi',
                     'site'     => $site,
                     'user'     => $user
    );
        return view('admin.konfigurasi.index',$data);
    }
    public function logo(Request $request)
    {
        if(session()->get('email') == "") { return redirect('loginbi')->with('warning',' Username and password anda salah');};

       $user= DB::table('users')->orderBy('id_user')->first();
        $konfigurasi = new konfigurasis();
        $site = $konfigurasi->listing();

        $data =array('title' => 'Logo',
                    'site'  => $site,
                    'user'  => $user
    );
        return view('admin.konfigurasi.logo',$data);
    }
    public function proses_logo(request $request)
    {
        if(session()->get('email') == "") { return redirect('loginbi')->with('warning',' Username and password anda salah');};
        request()->validate([
            'logo' => 'required|image|mimes:png,jpg,jpeg'
        ]);
        //upload logo
        $image                  = $request->file('logo');
        $filenamewithextension  =$request->file('logo')->getClientOriginalName();
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

        DB::table('konfigurasis')->where('id_konfigurasi', $request->id_konfigurasi)->update([
            'id_user'   => session()->get('id_user'),
            'logo'      => $input['name_file']
        ]);

        return redirect('admin/konfigurasi/logo')->with('success','Logo Berhasil diUpdate');
    }
        public function proses_konfigurasi(Request $request)
        {
            if(session()->get('email') == ""){ return redirect('loginbi')->with('warning','Username and Password anda Salah');}
            // request()->validate([
            //     'nama_web'  => 'required',
            //     'deskripsi'  => 'required',
            //     'web_deskripsi'  => 'required',
            //     'nama_perusahaan'  => 'required',
            //     'singkatan'  => 'required',
            //     'website_address'  => 'required',
            //     'email'  => 'required',
            //     'phone'  => 'required',
            //     'facebook'  => 'required',
            //     'twitter'  => 'required',
            //     'instagram'  => 'required',
            //     'nama_facebook'  => 'required',
            //     'nama_twitter'  => 'required',
            //     'nama_twitter'  => 'required',
            //     'nama_instagram'  => 'required',
            //     'google_map'  => 'required',
            // ]);
            DB::table('konfigurasis')->where('id_konfigurasi',$request->id_konfigurasi)->update([
                'id_user'   => session()->get('id_user'),
                'namaweb'   => $request->namaweb,
                'deskripsi'   => $request->deskripsi,
                'web_deskripsi'   => $request->web_deskripsi,
                'nama_perusahaan'   => $request->nama_perusahaan,
                'singkatan'   => $request->singkatan,
                'website_address'   => $request->website_address,
                'email'   => $request->email,
                'phone'   => $request->phone,
                'facebook'   => $request->facebook,
                'twitter'   => $request->twitter,
                'instagram'   => $request->instagram,
                'nama_facebook'   => $request->nama_facebook,
                'nama_twitter'   => $request->nama_twitter,
                'nama_instagram'   => $request->nama_instagram,
                'google_map'   => $request->google_map,
                'alamat'        =>$request->alamat,
                'kota'          =>$request->kota,
                'provinsi'      => $request->provinsi
            ]);
            return redirect('admin/konfigurasi')->with('success','Data Berhasil Di Update');

        }

}
