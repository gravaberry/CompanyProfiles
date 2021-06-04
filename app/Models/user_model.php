<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use function Psy\sh;

class user_model extends Model
{
    public function loginbi($email,$password)
    {
        $loginbi =DB::table('users')
                            ->select('*')
                            ->where(array('users.email' => $email,
                                          'users.password' =>sha1($password)))
                            ->orderBy('id_user','DESC')
                            ->first();
            return $loginbi;
    }
    public function details($id_user)
    {
        $userview = DB::table('users')
                        ->select('*')
                        ->where('users.id_user',$id_user)
                        ->orderBy('id_user','DESC')
                        ->first();

            return $userview;
    }
}
