<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class GuruController extends Controller
{
    public function homeguru()
    {
        return view('/Guru/Homeguru');
    }

    // fungsi untuk menampilkan data siswa
    public function daftarsiswa()
    {
        $data_siswa=\App\Models\Siswa::all();
        return view('/Guru/daftarsiswa',['data_siswa'=>$data_siswa]);
    }
    // fungsi untuk menampilkan detail siswa
    public function viewsiswa($id)
    {
        $data_siswa=\App\Models\Siswa::find($id);
        $mapel=\App\Models\Mapel::all();
        return view('/Guru/viewsiswa',['data_siswa'=>$data_siswa,'mapel'=>$mapel]);
    }
    public function addnilai(Request $request ,$id)
    {
        $siswa=\App\Models\Siswa::find($id);
        if($siswa->mapel()->where('mapel_id',$request->mapel)->exists()){
            return redirect('Guru/'.$id.'/viewsiswa');
        }
        $siswa->mapel()->attach($request->mapel,['nilai'=> $request->nilai,'uts'=> $request->uts,'uas'=> $request->uas]);

        return redirect('Guru/'.$id.'/viewsiswa');
    }

}
