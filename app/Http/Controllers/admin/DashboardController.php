<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\user_model;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if(session()->get('email')== ""){ return redirect('loginbi')->with('warning','Mohon maaf Anda Belum Login');}
        $contact= DB::table('contact')->orderBy('id_contact','DESC')->get();
        $user= DB::table('users')->orderBy('id_user')->first();
        $data =array(
            'title' => 'Dashboard',
            'user' => $user,
            'contact' => $contact
        );
        return view('admin.dashboard.index',$data);
    }
}
