<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilResponse extends Model
{
    use HasFactory;
    protected $table = 'hasil_response';
    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'email',
        'nama_jalan',
        'angka_kurang',
        'angka_lebih',
        'profesi',
        'plain_json'
    ];

    public $timestamps = false;

    public function jenisKelamin(){
        return $this->hasOne(JenisKelamin::class,'kode','jenis_kelamin');
    }

    public function namaProfesi(){
        return $this->hasOne(Profesi::class,'kode','profesi');
    }
}
