<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Jurusan;
use App\Models\Register;
class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';

    protected $fillable = ['user_id', 'nama', 'jurusan', 'jenis_kelamin', 'agama', 'email', 'telepon', 'nisn', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'asal_sekolah'];

    public function Jurusan(){
        return $this->belongsTo(Jurusan::class);
    }

    public function Register(){
        return $this->belongsTo(Register::class);
    }
}
