<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Auth;
use App\Models\User;
use App\Models\Jurusan;
use App\Models\Siswa;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurusan = Jurusan::all();
        $siswa = Siswa::all();
        $findid =  Auth()->user()->id;
        $profile = Siswa::with('user')->where('user_id', $findid)->get();
        $profileJurusan = Jurusan::with('user')->where('user_id', $findid)->get();
        //return $profile;

        return view('loginsiswa.profile', compact('jurusan', 'siswa', 'profile', 'profileJurusan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('loginsiswa.formProfile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Siswa::find($id);
        return response()->json($siswa);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = Siswa::find($id);
        return view('loginsiswa.formProfile', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $siswa = Siswa::find($id);
        $siswa->nama = $request->nama;
        $siswa->nisn = $request->nisn;
        $siswa->jurusan_id = $request->jurusan_id;
        $siswa->email = $request->email;
        $siswa->telepon = $request->telepon;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->agama = $request->agama;
        $siswa->tempat_lahir = $request->tempat_lahir;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->alamat = $request->alamat;
        $siswa->asal_sekolah = $request->asal_sekolah;
        $siswa->update();

        $user = User::find($id);
        $user->password = $request->password;
        $user->update();

        return response()->json('Data Telah Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
