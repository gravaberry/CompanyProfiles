<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\slider;
use Illuminate\Support\Str;
use pdf;
use Illuminate\Http\Request;
use App\Models\CareerModel;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider =DB::table('sliders')->where('jenis_slider','Homepage')->limit(3)->orderBy('id_slider')->get();
        $site = DB::table('konfigurasis')->first();
        $data= array(
            'title'         =>'Belawan Indah',
            'slider'        => $slider,
            'site'          => $site,
        );
        return view('home.index',$data);
    }
}
