<?php

namespace App\Http\Controllers;

use App\Models\Pesertadidik;
use App\Models\Siswa;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class PesertadidikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all();
        $jurusan = Jurusan::all();
        return view('loginsiswa.pesertadidik', compact('siswa', 'jurusan'));
    }

    public function data()
    {
        $siswa = siswa::orderBy('id', 'desc')->get();

        return datatables()
            ->of($siswa)
            ->addIndexColumn()
            ->addColumn('jurusan_id', function($siswa){
                return !empty($siswa->jurusan->nama) ? $siswa->jurusan->nama : '-';
            })
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Pesertadidik  $pesertadidik
     * @return \Illuminate\Http\Response
     */
    public function show(Pesertadidik $pesertadidik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pesertadidik  $pesertadidik
     * @return \Illuminate\Http\Response
     */
    public function edit(Pesertadidik $pesertadidik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pesertadidik  $pesertadidik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pesertadidik $pesertadidik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pesertadidik  $pesertadidik
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pesertadidik $pesertadidik)
    {
        //
    }
}
