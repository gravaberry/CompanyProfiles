<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\user_model;
use Illuminate\Support\Facades\DB;
use Image;
use Illuminate\Http\Request;
class UserController extends Controller
{

    public function index()
    {
      if(session()->get('email') == ""){ return redirect('loginbi')->with('warning','Username and Password Salah');}
        $users = DB::table('users')->orderBy('id_user','DESC')->get();
        $data = array('title' => 'User',
                     'user'  => $users
    );
            return view('admin.user.index',$data);
    }
    public function create_proses(Request $request)
    {
       if(session()->get('email') == ""){ return redirect('loginbi')->with('warning','Username and Password Salah');}

        $request->validate([
            'name'  =>'required',
            'email' => 'required',
            'username'  => 'required',
            'password'  => 'required',
            'akses_level' => 'required',
            'gambar' => 'required|image|mimes:png,jpg,jpeg|max:2048',
        ]);

        // UPLOAD START
        $image                  = $request->file('gambar');
        if(!empty($image)) {
            $filenamewithextension  = $request->file('gambar')->getClientOriginalName();
            $filename               = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $input['name_file']     =date('YmdHis').'.'.$image->getClientOriginalExtension();
            $destinationPatch       ='./assets2/img/galeri/';
            $img = Image::make($image->getRealPath(),array(
                'width'     => 150,
                'height'    => 150,
                'grayscale' => false
            ));
            $img->save($destinationPatch.'/'.$input['name_file']);
            $destinationPatch       ='./assets2/img/galeri/';
            $image->move($destinationPatch, $input['name_file']);
            // END UPLOAD
            DB::table('users')->insert([
                'name'          => $request->name,
                'email'	        => $request->email,
                'username'   	=> $request->username,
                'password'      => sha1($request->password),
                'akses_level'   => $request->akses_level,
                'gambar'        => $input['name_file']
            ]);
        }else{
             DB::table('users')->insert([
                'name'          => $request->name,
                'email'         => $request->email,
                'username'      => $request->username,
                'password'      => sha1($request->password),
                'akses_level'   => $request->akses_level
            ]);
        }
        return redirect('admin/user')->with('success','Data User Berhasil disimpan');


    }
    public function edit($id_user)
    {
        if(session()->get('email')== ""){ return redirect('loginbi')->with('warning','Username and Password Salah');}
        $usermodel = new user_model();
        $user = $usermodel->details($id_user);
        $data = array('titile' => 'Update User',
                    'user' => $user
    );

        return view('admin.user.edit',$data);
    }

    public function update_proses(request $request)
    {

       if(session()->get('email') == ""){ return redirect('loginbi')->with('warning','Username and Password Salah');}

       $request->validate([
           'name'  =>'required',
           'email' => 'required',
           'username'  => 'required',
           'password'  => 'required',
           'akses_level' => 'required'
       ]);

       // UPLOAD START
       $image                  = $request->file('gambar');
       if(!empty($image)) {
           $filenamewithextension  = $request->file('gambar')->getClientOriginalName();
           $filename               = pathinfo($filenamewithextension, PATHINFO_FILENAME);
           $input['name_file']     =date('YmdHis').'.'.$image->getClientOriginalExtension();
           $destinationPatch       ='./assets2/img/galeri/';
           $img = Image::make($image->getRealPath(),array(
               'width'     => 150,
               'height'    => 150,
               'grayscale' => false
           ));
           $img->save($destinationPatch.'/'.$input['name_file']);
           $destinationPatch       ='./assets2/img/galeri/';
           $image->move($destinationPatch, $input['name_file']);
           // END UPLOAD
           DB::table('users')->where('id_user',$request->id_user)->update([
               'name'          => $request->name,
               'email'	        => $request->email,
               'username'   	=> $request->username,
               'password'      => sha1($request->password),
               'akses_level'   => $request->akses_level,
               'gambar'        => $input['name_file']
           ]);
       }else{
             DB::table('users')->where('id_user',$request->id_user)->update([
               'name'          => $request->name,
               'email'         => $request->email,
               'username'      => $request->username,
               'password'      => sha1($request->password),
               'akses_level'   => $request->akses_level
           ]);
       }
       return redirect('admin/user')->with('success','Data User Berhasil diUpdate');

    }

    public function delete($id_user)
    {
        if(session()->get('email') == ""){ return redirect('loginbi')->with('warning','Username and Password Salah');}
        DB::table('users')->where('id_user',$id_user)->delete();
        return redirect('admin/user')->with('success','Data User Berhasil diHapus');
    }
}
