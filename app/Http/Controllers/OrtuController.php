<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Models\Kelas;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class OrtuController extends Controller
{
    public function homeortu()
    {
        return view('/Ortu/Homeortu');
    }
    // fungsi untuk menampilkan daftar kelas 10
    public function kelas10()
    {
        $kelas = \App\Models\Kelas::all();
        $filtered = $kelas->filter(function ($value, $key) {
            return $value->id < 5;
        });

        return view('/Ortu/datakelas',['filtered'=>$filtered]);
    }
    // fungsi untuk menampilkan daftar kelas 11
    public function kelas11()
    {
        $kelas = \App\Models\Kelas::all();
        $filtered = $kelas->filter(function ($value, $key) {
            return $value->id== 5 || $value->id==6 ;
        });

        return view('/Ortu/datakelas',['filtered'=>$filtered]);
    }

    // fungsi untuk menampilkan daftar kelas 12
    public function kelas12()
    {
        $kelas = \App\Models\Kelas::all();
        $filtered = $kelas->filter(function ($value, $key) {
            return $value->id > 6  ;
        });

        return view('/Ortu/datakelas',['filtered'=>$filtered]);
    }
       // fungsi untuk menampilkan detail siswa
       public function viewsiswa($id)
       {
           $data_kelas=\App\Models\Kelas::find($id);
           return view('/Ortu/viewsiswa',['data_kelas'=>$data_kelas]);
       }

       public function raportsiswa($id)
       {
        $data_siswa=\App\Models\Siswa::find($id);
        return view('/Ortu/raportsiswa',['data_siswa'=>$data_siswa]);
       }
    //    menampilkan view rating
       public function rating()
       {
           return view('/Ortu/rating');
       }
       //  menampilkan edit password
    public function editpassword($id)
    {
        $user =\App\Models\User::find($id);
        return view('/Ortu/editpassword');
    }
    // ubah password 
    public function ubahpassword(Request $request, $id)
    {
        $this->validate($request,[
            'passwordbaru'=>'required|min:6'
        ]);

        $user =User::find($id);
        if(Hash::check($request->password, $user->password)){
            $user->update([
                'password'=>bcrypt($request->passwordbaru)
            ]);
            return redirect('/Ortu/'.$id.'/editpassword')->with('sukses', 'Password berhasil diubah');
        }
        else{
            return redirect('/Ortu/'.$id.'/editpassword')->with('gagal', 'Password lama anda salah');
        }
    }
}
