<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\galeri_model;
use App\Models\konfigurasis;
use Illuminate\Http\Request;

class ContainerController extends Controller
{
    public function index()
    {
        $galeri=DB::table('galeris')->where('jenis_galeri','Container')->orderBy('id_galeri','ASC')->get();
        $site=DB::table('konfigurasis')->first();
        $data =array('title' => 'container',
                     'galeris' => $galeri,
                     'site'    => $site,
    );
        return view('container.index',$data);
    }
}
