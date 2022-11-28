<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Siswa;
use App\Models\Jurusan;
use Validator;
use Str;
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
        
        $user = new User;
        $user->name = $request->nama;
        $user->password = bcrypt('12345678');
        $user->remember_token = Str::random(20);
        $user->email = $request->email;
        $user->role_id = 2;
        $user->status = 'inactive';
        $user->save();

        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'jurusan_id' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'email' => 'required',
            'telepon' => 'required|numeric',
            'nisn' => 'required|numeric',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date_format:Y-m-d',
            'alamat' => 'required',
            'asal_sekolah' => 'required',
        ]);

        //membuat table siswa
        $request->request->add(['user_id' => $user->id]);
        $siswa = Siswa::create([
            'nama' => $request->nama,
            'jurusan_id' => $request->jurusan_id,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'nisn' => $request->nisn,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'asal_sekolah' => $request->asal_sekolah,
        ]);

        $request->request->add(['user_id' => $user->id]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

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
