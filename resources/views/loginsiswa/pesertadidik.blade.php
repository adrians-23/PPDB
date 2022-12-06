@extends('template.layout')

@section('title')
    Peserta Didik
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Data Peserta Didik</h1>
    </div>

    <div class="section-body">
        <div class="row">

            {{-- Data Siswa --}}
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    {{-- Judul --}}
                    <div class="card-header">
                        <div class="col-12 col-md-12 col-lg-12">
                            <h4>Daftar Peserta Didik</h4>
                        </div>
                    </div>

                    {{-- Tabel --}}
                    <div class="card-body" style="width: 100%;">
                        <table class="table table-striped text-nowrap">
                            <thead>
                                <tr>
                                    <td scope="col" style="width: 50px;">No</td>
                                    <td scope="col">Nama</td>
                                    <td scope="col">Jurusan</td>
                                    <td scope="col">Jenis Kelamin</td>
                                    <td scope="col">Asal Sekolah</td>
                                </tr>
                            </thead>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

@endsection