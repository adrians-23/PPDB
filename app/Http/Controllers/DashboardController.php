<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Jurusan;
use App\Models\User;
class DashboardController extends Controller
{
    public function index()
    {
        $jurusan = Jurusan::count();
        $siswa = Siswa::count();
        $user = User::count();

        return view('dashboard.index', compact('siswa', 'jurusan', 'user'));
    }
}
