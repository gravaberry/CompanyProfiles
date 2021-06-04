<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\galeri_model;

use Illuminate\Http\Request;

class CargoBreakBulkController extends Controller
{
    public function index()
    {
        $galeri = DB::table('galeris')->where('jenis_galeri','CargoBreakBulk')->orderBy('id_galeri','DESC')->get();
        $site = DB::table('konfigurasis')->first();
        $data =array(
                'title' => 'Cargo break Bulk',
                'galeris' => $galeri,
                'site'      => $site,
        );
        return view('cargobreakbulk.index',$data);
    }
}
