<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\support\Facades\DB;

class slider extends Model
{
    protected $table ='sliders';
    protected $primarykey ='id_slider';
    protected $fillable =['judul','jenis_slider','gambar','isi','slider_status','urutan','status_text','tanggal_publish'];

    public function detail($id_slider)
    {
        $query = DB::table('sliders')
                ->select('*')
                ->where('sliders.id_slider', $id_slider)
                ->orderBy('id_slider','DESC')
                ->first();
            return $query;
    }
}
