<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mahasiswa extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nama_mhs', 'penanggung', 'penghasilan', 'rumah', 'jenis_kelamin', 'pekerjaan', 'jumlah_tanggungan', 'usia', 'nilai_un'
    ];

    protected $hidden = [];

    public function penanggung()
    {
        // return $this->hasMany(ProductGallery::class, 'products_id');
    }
}
