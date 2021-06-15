<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class GuruController extends Controller
{
    public function homeguru()
    {
        return view('/Guru/Homeguru');
    }

    // fungsi untuk menampilkan data siswa
    public function daftarsiswa(Request $request)
    {
        $data_kelas=\App\Models\Kelas::all();
        return view('/Guru/daftarsiswa',['data_kelas'=>$data_kelas]);
    }
    // fungsi untuk menampilkan detail siswa
    public function viewsiswa($id)
    {
        $data_kelas=\App\Models\Kelas::find($id);
        return view('/Guru/viewsiswa',['data_kelas'=>$data_kelas]);
    }
    // fungsi untuk menampilkan nilai siswa
    public function nilaisiswa($id)
    {
        $data_siswa=\App\Models\Siswa::find($id);
        $mapel =\App\Models\Mapel::all();
        return view('/Guru/nilaisiswa',['data_siswa'=>$data_siswa,'mapel'=>$mapel]);
    }

    // untuk menampilkan data kelas
    public function view($id)
    {
        $data_kelas=\App\Models\Kelas::find($id);
        return view('/Guru/view',['data_kelas'=>$data_kelas]);
    }
    // fungsi untuk menambahkan nilai pada siswa
    public function addnilai(Request $request ,$id)
    {
        $siswa=\App\Models\Siswa::find($id);
        if($siswa->mapel()->where('mapel_id',$request->mapel)->exists()){
            return redirect('Guru/'.$id.'/nilaisiswa')->with('sukses','nilai sudah ada');
        }
        $siswa->mapel()->attach($request->mapel,['nilai'=> $request->nilai,'uts'=> $request->uts,'uas'=> $request->uas]);

        return redirect('Guru/'.$id.'/nilaisiswa')->with('sukses','Nilai berhasil ditambahkan');
    }
    //funsi untuk delete nilai
    public function deletenilai($idsiswa, $idmapel)
    {
        $siswa=\App\Models\Siswa::find($idsiswa);
        $siswa->mapel()->detach($idmapel);

        return redirect()->back()->with('gagal', 'Nilai sudah dihapus');
    } 

    //fungsi untuk menampilkan jadwal mapel di guru
    public function jadwalmengajar(Request $request)
    {
        if ($request->has('cariguru')) {
            $data_guru = \App\Models\Guru::where('nama_tendik','LIKE', '%' . $request->cariguru . '%')->get();
        } else {
            $data_guru = \App\Models\Guru::all();
        }
        return view('/Guru/jadwalmengajar',['data_guru'=>$data_guru]);
    }
    //  fungsi menampilkan view jadwal guru mengajar 
    public function viewjadwalguru($id){
        $data_guru =\App\Models\Guru::find($id);
        $data_mapel=\App\Models\Mapel::all();
        $kelas=\App\Models\Kelas::all();
        return view('/Guru/viewjadwalguru',['data_guru'=>$data_guru,'data_mapel'=>$data_mapel,'kelas'=>$kelas]);
    }
    //fungsi untuk menampilkan jadwal pelajaran
    public function jadwalpelajaran()
    {
        $data_kelas=\App\Models\Kelas::all();
        return view('/Guru/jadwalpelajaran',['data_kelas'=>$data_kelas]);
    }
    //  fungsi menampilkan view jadwal Pelajaran 
    public function viewjadwalpelajaran($id){
        $data_kelas =\App\Models\Kelas::find($id);
        $data_mapel=\App\Models\Mapel::all();
        return view('/Guru/viewjadwalpelajaran',['data_kelas'=>$data_kelas,'data_mapel'=>$data_mapel]);
    }
    //  fungsi menampilkan untuk upload tugas kepada siswa
    public function tugassiswa()
    {
        $data_kelas=\App\Models\Kelas::all();
        return view('/Guru/tugassiswa',['data_kelas'=>$data_kelas]);
    }
    //  fungsi menampilkan view upload tugas 
    public function viewtugaskelas($id){
        $guru =\App\Models\Guru::all();
        $kelas=\App\Models\Kelas::all();
        $data_kelas =\App\Models\Kelas::find($id);
        return view('/Guru/viewtugaskelas',['data_kelas'=>$data_kelas,'guru'=>$guru,'kelas'=>$kelas]);
    }
    // fungsi untuk menambahkan tugas untuk siswa
    public function addtugas(Request $request ,$id)
    {
        $kelas=\App\Models\Kelas::find($id);
        $kelas->guru()->attach($request->guru,['mapel'=>$request->mapel,'catatan_tugas'=> $request->catatan_tugas,'tugas'=>$request->file('tugas')->store('public'),'batas'=> $request->batas,'waktu'=>$request->waktu,'poin'=>$request->poin]);
        
        return redirect('Guru/'.$id.'/viewtugaskelas')->with('sukses','Tugas berhasil di upload');
    }
    //funsi untuk selesai upload tugas
    public function tugasselesai($idkelas, $idguru)
    {
        $kelas=\App\Models\Kelas::find($idkelas);
        $kelas->guru()->detach($idguru);

        return redirect()->back()->with('sukses', 'Tugas telah selesai');
    } 
    //fungsi untuk menampilkan data tugas terkumpul 
    public function datatugas()
    {
        $data_kelas=\App\Models\Kelas::all();
        return view('/Guru/datatugas',['data_kelas'=>$data_kelas]);
    }
    //  fungsi menampilkan view daftar tuga yang terkumpul
    public function daftartugas($id){
        $data_kelas =\App\Models\Kelas::find($id);
        $data_tugas =\App\Models\Tugas::all();
        return view('/Guru/daftartugas',['data_kelas'=>$data_kelas,'data_tugas'=>$data_tugas]);
    }
    //fungsi menampilkan kelas untuk cek absen
    public function dataabsen()
    {
        $data_kelas=\App\Models\Kelas::all();

        return view('/Guru/dataabsen',['data_kelas'=>$data_kelas]);
    }
    //fungsi untuk cek absen siswa per kelas
    public function viewabsen($id)
    {
        $data_kelas=\App\Models\Kelas::find($id);

        return view('/Guru/viewabsen',['data_kelas'=>$data_kelas]);
    }
    //fungsi untuk cek absen siswa per kelas
    public function hasilabsen($id)
    {
        $data_mapel=\App\Models\Mapel::find($id);

        return view('/Guru/hasilabsen',['data_mapel'=>$data_mapel]);
    }
     //  menampilkan edit password
     public function editpassword($id)
     {
         $user =\App\Models\User::find($id);
         return view('/Guru/editpassword');
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
             return redirect('/Guru/'.$id.'/editpassword')->with('sukses', 'Password berhasil diubah');
         }
         else{
             return redirect('/Guru/'.$id.'/editpassword')->with('gagal', 'Password lama anda salah');
         }
     }
}

