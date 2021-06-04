<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class konfigurasis extends Model
{
    use HasFactory;
    protected $table = ['konfigurasis'];
    protected $primarykey ='id_konfigurasi';

    public function listing()
    {
        $query =DB::table('konfigurasis')
                        ->select('*')
                        ->orderBy('id_konfigurasi','DESC')
                        ->first();

        return $query;
    }
}
