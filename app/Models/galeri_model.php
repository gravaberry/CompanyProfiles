<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class galeri_model extends Model
{
    use HasFactory;
    protected $table="galeris";
    protected $primarykey ='id_galeri';
    protected $fillable =['judul_galeri','jenis_galeri','isi','gambar','website','urutan','status'];

    public function gabung()
    {
        $query= DB::table('galeris')
            ->join('kategorigaleri','kategorigaleri.id_kategorigaleri','=','galeris.id_kategorigaleri','LEFT')
            ->select('galeris.*','kategorigaleri.slug_kategori_galeri','kategorigaleri.nama_kategori_galeri')
            ->orderBy('galeris.id_galeri','DESC')
            ->get();

            return $query;
    }

    public function detail($id_galeri)
    {
        $query =DB::table('galeris')
                ->select('*')
                ->where('galeris.id_galeri',$id_galeri)
                ->orderBy('id_galeri','DESC')
                ->first();

                return $query;
    }
    public function cari($keywords)
    {
        $query = DB::table('galeris')
                        ->select('*')
                        ->where('galeris.judul_galeri','LIKE',"%{$keywords}%")
                        ->orWhere('galeris.jenis_galeri','LIKE',"%{$keywords}%")
                        ->orderBy('id_galeri','DESC')
                        ->paginate(25);

            return $query;
    }
}
