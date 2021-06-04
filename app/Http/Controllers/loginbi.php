<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\user_model;
use Illuminate\Http\Request;

class loginbi extends Controller
{
    public function index()
    {
        $data =array(
            'title' => 'Login Administrator'
        );
        return view('loginbi.index',$data);
    }
    public function proses_bi(Request $request)
    {
        $email      = $request->email;
        $password   = $request->password;

        $loginbi    =new user_model();
        $userx      = $loginbi->loginbi($email,$password);

        if($userx){
            $request->session()->put('id_user', $userx->id_user);
            $request->session()->put('email', $userx->email);
            $request->session()->put('akses_level', $userx->akses_level);
            return redirect('admin/dashboard')->with('success',' Anda Berhasil Login');
        }else{
            return redirect('loginbi')->with('warning','Username and Password anda Salah');
        }

    }

    public function logoutbi()
    {
        session()->forget('id_user');
        session()->forget('email');
        session()->forget('password');
        session()->forget('akses_level');
        return redirect('loginbi')->with('success','Anda Berhasil Log Out');
    }
}
