<?php

namespace App\Exports;

use App\Models\Siswa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SiswaExport implements FromCollection,WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Siswa::all();
    }
    
    public function map($siswa): array
    {
        return [
            $siswa->no_induk,
            $siswa->nama_lengkap,
            $siswa->nama_panggilan,
            $siswa->tempat_lahir,
            $siswa->tgl_lahir,
            $siswa->jenis_kelamin,
            $siswa->agama,
            $siswa->alamat,
            $siswa->nama_ortu
        ];
    }

    public function headings(): array
    {
        return [
            'NO INDUK',
            'NAMA LENGKAP',
            'NAMA PANGGILAN',
            'TEMPAT LAHIR',
            'TGL LAHIR',
            'JENIS KELAMIN',
            'AGAMA',
            'ALAMAT',
            'NAMA ORTU'
        ];
    }
}
