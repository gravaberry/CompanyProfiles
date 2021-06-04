<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CareerModel extends Model
{
    use HasFactory;
    protected $table =['careers'];
    protected $primarykey ='id_career';

    public function karir()
    {
        $query = DB::table('careers')
                    ->select('*')
                    ->orderBy('id_career','DESC')
                    ->get();

            return $query;
    }
    public function details($id_career)
    {
        $karir = DB::table('careers')
                        ->select('*')
                        ->where('careers.id_career',$id_career)
                        ->orderBy('id_career','DESC')
                        ->first();
        return $karir;
    }

    public function karirdetail($id_career)
    {
        $karir = DB::table('careers')
                        ->select('*')
                        ->where('careers.id_career',$id_career)
                        ->orderBy('id_career','DESC')
                        ->get();
        return $karir;
    }
}
