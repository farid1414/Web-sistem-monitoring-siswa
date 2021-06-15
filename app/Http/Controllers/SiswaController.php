<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tugas;
use App\Models\Absen;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class SiswaController extends Controller
{
    
    public function homesiswa()
    {
        return view('/Siswa/Homesiswa');
    }
    // fungsi untuk menampilkan daftar tugas
    public function daftartugas()
    {   
        $data_kelas=\App\Models\Kelas::all();
        return view('/Siswa/daftartugas',['data_kelas'=>$data_kelas]);
    }
    //  fungsi menampilkan view Daftar tugas tugas 
    public function viewtugaskelas($id){
        $dt_kelas=\App\Models\Kelas::all();
        $data_mapel=\App\Models\Mapel::all();
        $dt_siswa=\App\Models\Siswa::all();
        $data_kelas =\App\Models\Kelas::find($id);
        return view('/Siswa/viewtugaskelas',['data_kelas'=>$data_kelas,'dt_kelas'=>$dt_kelas,'data_mapel'=>$data_mapel,'dt_siswa'=>$dt_siswa]);
    }
    //fungsi untuk menampilkan jadwal pelajaran
    public function jadwalpelajaran()
    {
        $data_kelas=\App\Models\Kelas::all();
        return view('/Siswa/jadwalpelajaran',['data_kelas'=>$data_kelas]);
    }
    //  fungsi menampilkan view jadwal Pelajaran 
    public function viewjadwalpelajaran($id){
        $data_kelas =\App\Models\Kelas::find($id);
        $data_mapel=\App\Models\Mapel::all();
        return view('/Siswa/viewjadwalpelajaran',['data_kelas'=>$data_kelas,'data_mapel'=>$data_mapel]);
    }
    // fungsi untuk upload tugas
    public function addtugas(Request $request,$id)
    {
        Tugas::create([
            'nama'=>auth()->user()->name,
            'kelas_id'=>$request->kelas_id,
            'mapel'=>$request->mapel,
            'tugas'=>$request->file('tugas')->store('public'),
        ]);
        
        return redirect('Siswa/'.$id.'/viewtugaskelas')->with('sukses','Tugas berhasil di upload');
    }
    // fungsi untuk view absen siswa
    public function absensiswa()
    {
        $mapel=\App\Models\Mapel::all();
        $kelas=\App\Models\Kelas::all();
        return view('/Siswa/absensiswa',['mapel'=>$mapel,'kelas'=>$kelas]);
    }
    // fungsi untuk upload absen siswa
    public function addabsen(Request $request)
    {
        Absen::create([
            'nama'=>$request->nama,
            'email'=>$request->email,
            'kelas_id'=>$request->kelas_id,
            'mapel'=>$request->mapel,
            'status'=>$request->status,
            'alasan'=>$request->alasan,
        ]);
        return view('/Siswa/absensiswa')->with('sukses','Anda berhasil Absen');
    }
    // fungsi untuk menampilkan daftar kelas untuk nilai
    public function daftarkelas()
    {
        $data_kelas=\App\Models\Kelas::all();
        return view('/Siswa/daftarkelas',['data_kelas'=>$data_kelas]);
    }
    // fungsi untuk menampilkan siswa untuk lihat nilai
    public function viewsiswa($id)
    {
        $data_kelas=\App\Models\Kelas::find($id);
        return view('/Siswa/viewsiswa',['data_kelas'=>$data_kelas]);
    }
     // fungsi untuk menampilkan nilai siswa
     public function nilaisiswa($id)
     {
         $data_siswa=\App\Models\Siswa::find($id);
         return view('/Siswa/nilaisiswa',['data_siswa'=>$data_siswa]);
     }
    //  menampilkan edit password
    public function editpassword($id)
    {
        $user =\App\Models\User::find($id);
        return view('/Siswa/editpassword');
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
            return redirect('/Siswa/'.$id.'/editpassword')->with('sukses', 'Password berhasil diubah');
        }
        else{
            return redirect('/Siswa/'.$id.'/editpassword')->with('gagal', 'Password lama anda salah');
        }
    }

}
