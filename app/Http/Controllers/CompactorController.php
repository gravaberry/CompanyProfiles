<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\galeri_model;
use Illuminate\Http\Request;

class CompactorController extends Controller
{
    public function index()
    {
        $galeri = DB::table('galeris')->where('jenis_galeri','Compactor')->orderBy('id_galeri','DESC')->get();
        $site = DB::table('konfigurasis')->first();
        $data =array(
                'title' => 'BulkCargo',
                'galeris' => $galeri,
                'site'      => $site,
        );
        return view('compactor.index',$data);
    }
}
