<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Naive extends Model
{
    use HasFactory;
    protected $table = "datasets";
    protected $primarykey = "id";
    protected $fillable = [
        'nama_mhs',
        'penanggung',
        'penghasilan',
        'rumah',
        'jenis_kelamin',
        'pekerjaan',
        'jumlah_tanggungan',
        'usia',
        'nilai_un',
        'status_beasiswa'
    ];

    public function statusBeasiswaLYKTDK()
    {
        return $this->hasMany(Mahasiswa::class, 'id');
    }

}
