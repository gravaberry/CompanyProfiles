<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesanController extends Controller
{
    public function index()
    {
    if(session()->get('email') == ""){ return redirect('loginbi')->with('success','Username and Password anda salah');}
    $contact= DB::table('contact')->orderBy('id_contact','DESC')->get();
    $user =DB::table('users')->orderBy('id_user','Desc')->first();
        $data =array(
                'title'     => 'pesan masuk',
                'contact'   => $contact,
                'user'      => $user
        );
        return view('admin.pesan.index',$data);
    }
    public function delete($id_contact)
    {
        if(session()->get('email') == ""){ return redirect('loginbi')->with('success','Username and Password anda salah');}
        DB::table('contact')->where('id_contact',$id_contact)->delete();
        return redirect('admin/pesan')->with('success','Data Pesan Berhasil di Hapus');
    }
}
