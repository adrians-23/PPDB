<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Jurusan;
use App\Models\User;
use Illuminate\Http\Request;
use Validator;

class SiswaController extends Controller
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

        return view('siswa.index', compact('siswa', 'jurusan'));
    }

    public function data()
    {
        $siswa = siswa::orderBy('id', 'desc')->get();

        return datatables()
            ->of($siswa)
            ->addIndexColumn()
            ->addColumn('jurusan', function($siswa){
                return !empty($siswa->jurusan->nama) ? $siswa->jurusan->nama : '-';
            })
            ->addColumn('aksi', function($siswa){
                return '

                <div class="btn-group">
                    <button onclick="editData(`' .route('siswa.update', $siswa->id). '`)" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></button>
                    <button onclick="deleteData(`' .route('siswa.destroy', $siswa->id). '`)" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                </div>

                ';
            })
            ->rawColumns(['aksi', 'siswa'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jurusan.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::all();
        $user = new User;
        
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'nama' => 'required',
            'jurusan' => 'required',
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

        //membuat table user
        // $user = User::create([
        //     'name' => $request->nama,
        //     'password' => bcrypt('12345678'),
        //     'email' => $request->email,
        //     'role_id' => 2,
        //     'status' => 'inactive'
        // ]);

        //membuat table siswa
        $siswa = Siswa::create([
            'user_id' => $request->$user->id,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
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

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Disimpan',
            'data' => $siswa
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
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
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = Siswa::find($id);
        return view('siswa.form', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $siswa = Siswa::find($id);
        $siswa->nama = $request->nama;
        $siswa->update();

        return response()->json('Data Berhasil Disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();

        return redirect('siswa');
    }
}
