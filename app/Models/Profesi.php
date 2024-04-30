<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesi extends Model
{
    use HasFactory;
    protected $table = 'tabel_profesi';
    protected $fillable = [
        'kode',
        'nama_profesi'
    ];

    public $timestamps = false;

    public function profesi(){
        return $this->hasMany(HasilResponse::class,'profesi','kode');
    }
}
