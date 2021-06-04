<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategorigaleri extends Model
{
    use HasFactory;
    protected $table='kategorigaleri';
    protected $primarykey ='id_kategorigaleri';
    protected $fillable =['slug_kategori_galeri','nama_kategori_galeri','urutan'];
}
