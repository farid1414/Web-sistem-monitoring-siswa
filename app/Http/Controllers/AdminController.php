<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Guru;
use App\Models\Siswa;
use App\Models\Mapel;
use App\Models\Kelas;
use App\Models\gurukelas;



class AdminController extends Controller
{
//     public function __construct() {
//         $this->connection = sqlite_open("[path]/data/users.sqlite", 0666);
//    }
   
    //fungsi home 
    public function homeadmin()
    {
        $data_tendik=\App\Models\Guru::all();
        $siswa=\App\Models\Siswa::all();
        return view('/Admin/Homeadmin',['data_tendik'=>$data_tendik],['siswa'=>$siswa]);
    }
    public function loginadmin()
    {
        return view('/Admin/loginadmin');
    }
    // fungsi menu tendik
    public function dataguru(Request $request)
    {
        if ($request->has('cari')) {
            $data_guru = \App\Models\Guru::where('nama_tendik','LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data_guru = \App\Models\Guru::all();
        }
        return view('/Admin/dataguru', ['data_guru' => $data_guru]);
    }
    // fungsi tampil data tendik
    public function create(Request $request)
    {
        
        //input ke tabel user untuk login
        $user = new \App\Models\User;
        $user->level ='guru'; 
        $user->name =$request->nama_tendik;
        $user->email =$request->email;
        $user->password = bcrypt('guru134');
        $user->remember_token = str_random(60);
        $user->save();
        
        //insert ke tabel data_tendik
        $request->request->add(['user_id' => $user->id]);
        $guru=\App\Models\Guru::create($request->all());
        // $guru->guru()->sync($request->input('guru', []));
        // $guru->delivery_date = $request->input('delivery_date');
        return redirect('/Admin/dataguru')->with('sukses', 'data berhasil');
    }
    // fungsi tampil data siswa
    public function buatakun(Request $request)
    {
        
        //input ke tabel user untuk login
        $user = new \App\Models\User;
        $user->level ='siswa'; 
        $user->name =$request->nama_lengkap;
        $user->email =$request->email;
        $user->password = bcrypt('siswa134');
        $user->remember_token = str_random(60);
        $user->save();
        
        //insert ke tabel data_tendik
        $request->request->add(['user_id' => $user->id]);
        $siswa=\App\Models\Siswa::create($request->all());
        // $guru->guru()->sync($request->input('guru', []));
        // $guru->delivery_date = $request->input('delivery_date');
        return redirect('/Admin/datasiswa')->with('sukses', 'data berhasil');
    }
    // fungsi hapus data guru
    public function hapus($id)
    {
        $data_tendik = \App\Models\Guru::find($id);
        $data_tendik->delete($data_tendik);
        return redirect('Admin/dataguru')->with('sukses', 'data berhasil dihapus');
    }
    // fungsi hapus data siswa
    public function hapussiswa($id)
    {
        $data_siswa = \App\Models\Siswa::find($id);
        $data_siswa->delete($data_siswa);
        return redirect('Admin/datasiswa')->with('sukses', 'data berhasil dihapus');
    }
    // fungsi  pemanggilan untuk edit data guru
    public function edit($id)
    {
        $data_tendik = \App\Models\Guru::find($id);
        return view('/Admin/edit', ['data_tendik' => $data_tendik]);
    }
    // fungsi edit siswa
    public function editsiswa($id)
    {
        $data_siswa = \App\Models\Siswa::find($id);
        return view('/Admin/editsiswa', ['data_siswa' => $data_siswa]);
    }

    // fungsi untuk mengedit data tendik 
    public function ubah(Request $request, $id)
    {
        $data_tendik = \App\Models\Guru::find($id);
        $data_tendik->Update($request->all());
        return redirect('/Admin/dataguru')->with('sukses', 'data berhasil diupdate');
    }
    // fungsi untuk mengedit data siswa 
    public function ubahsiswa(Request $request, $no_induk)
    {
        $data_siswa = \App\Models\Siswa::find($no_induk);
        $data_siswa->Update($request->all());
        return redirect('/Admin/datasiswa')->with('sukses', 'data berhasil diupdate');
    }

    // fungsi untuk menampilkan data siswa
    public function datasiswa(Request $request)
    {
        if ($request->has('mencari')) {
            $data_siswa = \App\Models\Siswa::where('nama_lengkap', 'LIKE', '%' . $request->mencari . '%')->get();
        } else {
            $data_siswa = \App\Models\Siswa::all();
        }
        return view('/Admin/datasiswa', ['data_siswa' => $data_siswa]);
    }
    //fungsi untuk menampilkan data mata pelajaran
    public function datamatapelajaran()
    {
        $data_mapel=\App\Models\Mapel::all();
        return view('/Admin/datamatapelajaran',['data_mapel'=> $data_mapel]);
    }
    // fungsu untuk  hapus mapel
    public function hapusmapel($id)
    {
        $data_mapel = \App\Models\Mapel::find($id);
        $data_mapel->delete($data_mapel);
        return redirect('Admin/datamatapelajaran')->with('sukses', 'data berhasil dihapus');
    }
    // public function buatmapel(Request $request){
    //     \App\Models\Mapel::create($request->all());
    //     return redirect('Admin/Mapel');
    // }
    
    // fungsi untuk menampilkan data kelas
    public function datakelas()
    {
        $data_kelas=\App\Models\Kelas::all();
        return view('/Admin/datakelas',['data_kelas'=> $data_kelas]);
    }
    
    // fungsi untuk edit data wali kelas
    // public function editwalikelas(){
        //     $data_wali = \App\Models\::find($id);
        //     return view('/Admin/edit', ['data_tendik' => $data_tendik]);
        // }
        // fungsi untuk menampilakn data user 
        public function datauser()
        {
            $data_user=\App\Models\User::all();
            return view('/Admin/datauser',['data_user'=> $data_user]);
        }
        // fungsi untuk menampilkan data wali kelas
        public function datawalikelas()
        {
            $data_wali=\App\Models\gurukelas::all();
            return view('/Admin/datawalikelas',['data_wali'=> $data_wali]);
        }
        
        // fungsi buat data wali kelas
        public function buatwalikelas(Request $request){
             \App\Models\gurukelas::create($request->all());
             return redirect('Admin/datawalikelas')->with('sukses', 'data wali kelas berhasil ditambahkan');
         }
        //  fungsi menampilkan data jadwal pelajaran 
         public function datajadwalpelajaran(){
             $data_kelas=\App\Models\Kelas::all();
             return view('/Admin/datajadwalpelajaran',['data_kelas'=>$data_kelas]);
         }
        //  fungsu menampilkan jadwal guru mengajar
         public function datajadwalguru(){
             $data_guru=\App\Models\Guru::all();
             return view('/Admin/datajadwalguru',['data_guru'=>$data_guru]);
         }
    }
