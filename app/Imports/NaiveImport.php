<?php

namespace App\Imports;

use App\Models\Naive;
use Maatwebsite\Excel\Concerns\ToModel;

class NaiveImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Naive([
            'nama_mhs' => $row[1],
            'penanggung' => $row[2],
            'penghasilan' => $row[3],
            'rumah' => $row[4],
            'jenis_kelamin' => $row[5],
            'pekerjaan' => $row[6],
            'jumlah_tanggungan' => $row[7],
            'usia' => $row[8],
            'nilai_un' => $row[9],
            'status_beasiswa' => $row[10],
        ]);
    }
}
