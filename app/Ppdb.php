<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ppdb extends Model
{
    protected $table = "ppdbs";
    protected $fillable = [
        'user_id',
        'nis',
        'nama',
        'jenis_kelamin',
        'tempat_lahir',
        'tgl_lahir',
        'alamat',
        'asal_sekolah',
        'kelas',
        'jurusan'
    ];
}
