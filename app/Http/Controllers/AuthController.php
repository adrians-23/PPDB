<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Siswa;
use App\Models\Jurusan;
use Auth;

class AuthController extends Controller
{
    public function login()
    {
        
        return view('auth.login');
    }

    public function postlogin(Request $request)
    {
        //dd($request->all());
        
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],
        [
            'email.required' => 'Email harus diisi',
            'password.required' => 'Password harus diisi'
        ]);

        $request->session()->regenerate();
        if(Auth::attempt($credentials)){
            if(Auth::user()->role_id == 1){
                return redirect('/dashboard');
            }
            if(Auth::user()->role_id == 2){
                return redirect('/profile');
            }
        }
        return redirect('/login');
    }

    public function register()
    {
        $jurusan = Jurusan::all();

        return view('auth.register', compact('jurusan'));
    }

    public function postRegister(Request $request)
    {
        //dd($request->all());

        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'jurusan' => 'required',
            'jenis_kelamin' => 'required',
            'email' => 'required',
            'nisn' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'asal_sekolah' => 'required',
            'nama_wali' => 'required'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $siswa = Siswa::create([
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'email' => $request->email,
            'nisn' => $request->nisn,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'asal_sekolah' => $request->asal_sekolah,
            'nama_wali' => $request->nama_wali
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Disimpan',
            'data' => $siswa
        ]); 
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
