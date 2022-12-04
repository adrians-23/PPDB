<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Siswa;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profile';

    protected $guarded = [];

    public function Siswa(){
        return $this->belongsTo(Siswa::class);
    }
}
