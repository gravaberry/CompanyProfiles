<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\galeri_model;

use Illuminate\Http\Request;

class ForkcliftController extends Controller
{
    public function index()
    {
        $galeri = DB::table('galeris')->where('jenis_galeri','Forkclipt')->orderBy('id_galeri','DESC')->get();
        $site = DB::table('konfigurasis')->first();
        $data =array(
                'title' => 'BulkCargo',
                'galeris' => $galeri,
                'site'      => $site,
        );
        return view('forkclift.index',$data);
    }
}
