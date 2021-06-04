<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class galeri extends Model
{
    use HasFactory;
    protected $table="galeri";
    protected $primarykey ='id_galeri';

    public function gabung()
    {
        $query= DB::table('galeri')
            ->join('kategorigaleri','kategorigaleri.id_kategorigaleri','=','galeri.id_kategorigaleri','LEFT')
            ->select('galeri.*','kategorigaleri.slug_kategori_galeri','kategorigaleri.nama_kategori_galeri')
            ->orderBy('galeri.id_galeri','DESC')
            ->get();

            return $query;
    }
}
