<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Siswa;
use App\Models\Register;

class Jurusan extends Model
{
    use HasFactory;

    protected $table = 'jurusan';

    protected $guarded = [];

    public function Siswa(){
        return $this->hasMany(Siswa::class);
    }

    public function Register(){
        return $this->hasMany(Register::class);
    }
}
