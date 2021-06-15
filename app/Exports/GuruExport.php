<?php

namespace App\Exports;

use App\Models\Guru;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class GuruExport implements FromCollection,WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Guru::all();
    }
    public function map($guru): array
    {
        return [
            $guru->nip,
            $guru->nama_tendik,
            $guru->jenis_kelamin,
            $guru->tgl_lahir,
            $guru->alamat,
            $guru->tgl_diterima
        ];
    }
    public function headings(): array
    {
        return [
            'NIP',
            'NAMA GURU',
            'JENIS KELAMIN',
            'TGL LAHIR',
            'ALAMAT',
            'TGL DITERIMA'
        ];
    }
}
