<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mahasiswa extends Model
{
    use SoftDeletes;
    protected $table = "mahasiswas";
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
        'nilai_un'
    ];

    protected $hidden = [];

    public function statusBeasiswa()
    {
        return $this->belongsTo(Naive::class, 'id', 'id');
    }
}
