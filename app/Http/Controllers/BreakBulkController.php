<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\galeri_model;
use Illuminate\Http\Request;

class BreakBulkController extends Controller
{
    public function index()
    {

        $galeri = DB::table('galeris')->where('jenis_galeri','BreakBulk')->orderBy('id_galeri','ASC')->get();

        $site = DB::table('konfigurasis')->first();
        $data =array(
                'title' => 'Breakbulk',
                'galeris' => $galeri,
                'site'      => $site,
                );
        return view('breakbulk.index',$data);
    }
}
