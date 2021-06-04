<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class WheelLoaderController extends Controller
{
    public function index()
    {
        $galeri = DB::table('galeris')->where('jenis_galeri','WheelLoader')->orderBy('urutan','ASC')->get();
        $site = DB::table('konfigurasis')->first();
        $data = array('title' => 'WheelLoader',
                    'galeri'  => $galeri,
                    'site'      => $site,
    );
        return view('wheelloader.index',$data);
    }
}
