<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Siswa;
class Auth extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'nama', 'jurusan_id', 'jenis_kelamin', 'agama', 'email', 'telepon', 'nisn', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'asal_sekolah'];

    public function Siswa(){
        return $this->belongsTo(Siswa::class);
    }
}
