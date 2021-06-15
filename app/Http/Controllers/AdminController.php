<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Guru;
use App\Models\Siswa;
use App\Models\Mapel;
use App\Models\Kelas;
use App\Models\gurukelas;
use App\Exports\GuruExport;
use App\Exports\SiswaExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;



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
        $mapel=\App\Models\Mapel::all();
        $kelas=\App\Models\Mapel::all();
        $rating=\App\Models\Rating::all();
        return view('/Admin/Homeadmin',['data_tendik'=>$data_tendik,'siswa'=>$siswa,'mapel'=>$mapel,'kelas'=>$kelas,'rating'=>$rating]);
    }
    // fungsi menu tendik
    public function dataguru(Request $request)
    {
        $simplePaginate=10;

        $data_guru = Guru::when($request->cari, function ($query) use ($request) {
            $query ->where('nama_tendik', 'like', "%{$request->cari}%")
            ->orWhere('nip', 'like', "%{$request->cari}%");
        })->orderBy('tgl_diterima', 'asc')->simplePaginate($simplePaginate);
    
        $data_guru->appends($request->only('cari'));

        return view('/Admin/dataguru', [
            'nama_tendik'    => 'Guru',
            'data_guru' => $data_guru,
        ])->with('i', ($request->input('page', 1) - 1) * $simplePaginate);
        
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
        $user->kelas_id=$request->kelas_id; 
        $user->name =$request->nama_lengkap;
        $user->email =$request->email;
        $user->password = bcrypt('siswa134');
        $user->remember_token = str_random(60);
        $user->save();
        

        //insert ke tabel data siswa
        $request->request->add(['user_id' => $user->id]);
        $request->request->add(['kelas_id'=> $user->kelas_id]);
        $siswa=\App\Models\Siswa::create($request->all());
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
    public function ubahsiswa(Request $request, $id)
    {
        $data_siswa = \App\Models\Siswa::find($id);
        $data_siswa->Update($request->all());
        return redirect('/Admin/datasiswa')->with('sukses', 'data berhasil diupdate');
    }

    // fungsi untuk menampilkan data siswa
    public function datasiswa(Request $request)
    {
        $simplePaginate=10;

        $data_siswa = Siswa::when($request->mencari, function ($query) use ($request) {
            $query ->where('nama_lengkap', 'like', "%{$request->mencari}%")
            ->orWhere('no_induk', 'like', "%{$request->mencari}%");
        })->orderBy('no_induk', 'asc')->simplePaginate($simplePaginate);
    
        $data_siswa->appends($request->only('mencari'));
        $data_kelas =\App\Models\Kelas::all();

        return view('/Admin/datasiswa', [
            'nama_lengkap' => 'Siswa',
            'data_siswa' => $data_siswa,
            'data_kelas' =>$data_kelas,
        ])->with('i', ($request->input('page', 1) - 1) * $simplePaginate);
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
        $guru =\App\Models\Guru::all();
        return view('/Admin/datakelas',['data_kelas'=> $data_kelas,'guru'=>$guru]);
    }
    // fungsi untuk tambah kelas
    public function createkelas(Request  $request)
    {
        Kelas::create([
            'nama_kelas'=>$request->nama_kelas,
            'wali_kelas'=>$request->wali_kelas,
        ]);
        return redirect('/Admin/datakelas')->with('sukses','kelas berhasil ditambahkan');
    }
    // fungsi untuk ubah kelas
    public function ubahkelas(Request  $request,  $id)
    {
        $data_kelas = \App\Models\Kelas::find($id);
        $data_kelas->Update($request->all());
        return redirect('/Admin/datakelas')->with('sukses','kelas berhasil diubah');
    }
     // fungsi edit Kelas
     public function editkelas($id)
     {
         $data_kelas = \App\Models\Kelas::find($id);
         $guru=\App\Models\Guru::all();
         return view('/Admin/editkelas', ['data_kelas' => $data_kelas,'guru'=>$guru]);
     }
 
    // fungsi untuk hapus kelas
    public function deletekelas($id)
    {
        $data_kelas = \App\Models\Kelas::find($id);
        $data_kelas->delete($data_kelas);
        return redirect('Admin/datakelas')->with('sukses', 'data berhasil dihapus');
    }
    
    // fungsi untuk menampilakn data user 
        public function datauser(Request $request)
        {
            
        $simplePaginate=10;

        $data_user = User::when($request->cari, function ($query) use ($request) {
            $query ->where('name', 'like', "%{$request->cari}%")
            ->orWhere('level', 'like', "%{$request->cari}%");
        })->orderBy('level', 'desc')->simplePaginate($simplePaginate);
    
        $data_user->appends($request->only('cari'));

        return view('/Admin/datauser', [
            'name'    => 'User',
            'data_user' => $data_user,
        ])->with('i', ($request->input('page', 1) - 1) * $simplePaginate);

        }
        //  fungsi menampilkan data jadwal pelajaran 
         public function datajadwalpelajaran(){
             $data_kelas=\App\Models\Kelas::all();
             return view('/Admin/datajadwalpelajaran',['data_kelas'=>$data_kelas]);
        }
        //  fungsi menampilkan view jadwal pelajaran 
         public function viewjadwal($id){
             $data_kelas =\App\Models\Kelas::find($id);
             $mapel=\App\Models\Mapel::all();
             return view('/Admin/viewjadwal',['data_kelas'=>$data_kelas,'mapel'=>$mapel]);
        }
        //funsi untuk hapus jadwal pelajaran
        public function hapusjadwal($id, $idmapel)
        {
        $kelas=\App\Models\Kelas::find($id);
        $kelas->mapel()->detach($idmapel);

        return redirect()->back()->with('hapus', 'Jadwal berhasil dihapuss');
        } 
         
         // fungsi untuk menambahkan jadwal pada siswa
         public function addjadwal(Request $request ,$id)
        {
             $kelas=\App\Models\Kelas::find($id);
             $kelas->mapel()->attach($request->mapel,['jam_mulai'=> $request->jam_mulai,'jam_selesai'=> $request->jam_selesai,'hari'=> $request->hari]);
             
             return redirect('Admin/'.$id.'/viewjadwal');
        }
        
        //  fungsi menampilkan view jadwal guru mengajar 
        
        public function viewjadwalguru($id){
            $data_guru =\App\Models\Guru::find($id);
            $data_mapel=\App\Models\Mapel::all();
            $kelas=\App\Models\Kelas::all();
            return view('/Admin/viewjadwalguru',['data_guru'=>$data_guru,'data_mapel'=>$data_mapel,'kelas'=>$kelas]);
        }

        // fungsi untuk menambahkan jadwal mengajar guru
        public function addjadwalguru(Request $request ,$id)
        {
            $guru=\App\Models\Guru::find($id);
            $guru->mapel()->attach($request->mapel,['jam_mulai'=> $request->jam_mulai,'jam_selesai'=> $request->jam_selesai,'hari'=> $request->hari,'kelas'=>$request->kelas]);
            
            return redirect('Admin/'.$id.'/viewjadwalguru')->with('sukses','jadwal mengajar berhasil ditambahkan');
        }
        //funsi untuk hapus jadwal guru
        public function hapusjadwalguru($id, $idmapel)
        {
        $guru=\App\Models\Guru::find($id);
        $guru->mapel()->detach($idmapel);

        return redirect()->back()->with('hapus', 'Jadwal berhasil dihapuss');
        }
        
        //  fungsi menampilkan jadwal guru mengajar
         public function datajadwalguru(){
             $data_guru=\App\Models\Guru::all();
             return view('/Admin/datajadwalguru',['data_guru'=>$data_guru]);
        }
        // fungsi untuk eksport data guru
        public function export() 
        {
        return Excel::download(new GuruExport, 'guru.xlsx');
        }
        // fungsi untuk eksport data siswa
        public function exportsiswa() 
        {
        return Excel::download(new SiswaExport, 'siswa.xlsx');
        }

        // fungsi untuk menampilkan datarating 
        public function datarating()
        {
            
            $rating =\App\Models\Rating::all();

            return view('/Admin/datarating',['rating'=>$rating]);
            
        }

    }
