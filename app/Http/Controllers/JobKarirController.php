<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CareerModel;

class JobKarirController extends Controller
{
    public function index()
    {
        $site =DB::table('konfigurasis')->first();
        $karir =DB::table('careers')->orderBy('id_career','DESC')->get();
        $data = array(
            'title'     => 'Details Karir',
            'site'      => $site,
            'career'    => $karir
        );
        return view('jobkarir.index',$data);
    }
    public function details($id_career)
    {
        $site =DB::table('konfigurasis')->first();
        $karir =new CareerModel();
        $career = $karir->karirdetail($id_career);
        $data = array(
            'title'     => 'Details Karir',
            'site'      => $site,
        );
        return view('jobkarir.details',$data);
    }
}
