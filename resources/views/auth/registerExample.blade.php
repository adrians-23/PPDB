@extends('template.layoutAuth')

@push('stylesheet')
<link rel="stylesheet" href="{{ asset('authPageTemplate/fonts/icomoon/style.css') }}">

<link rel="stylesheet" href="{{ asset('authPageTemplate/css/owl.carousel.min.css') }}">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('authPageTemplate/css/bootstrap.min.css') }}">

<!-- Style -->
<link rel="stylesheet" href="{{ asset('authPageTemplate/css/style.css') }}">
@endpush

@section('content')
<div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('{{ asset('authPageTemplate/images/bg_1.jpg') }}');"></div>
    <div class="contents order-2 order-md-1">

        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7">
                    <h3>PPDB <strong>SMK Antartika 1 Sidoarjo</strong></h3>
                    <form id="formDaftar" action="addForm('{{ route('register.store') }}')" method="POST">
                    @csrf
                    @method('PUT')
                        <div class="form-group first">
                            <div class="my-1">
                                <label class="mb-2" for="nama">Nama</label>
                                <input type="text" name="nama" id="nama" value="{{ old('nama')}}" class="form-control @error('nama') is-invalid @enderror">
                                @error('nama')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="row my-1">
                            <div class="col-12 col-lg-6 col-md-6">
                                <div class="my-1">
                                    <label class="mb-2" for="nama">Jurusan</label>
                                    <br>
                                    <select name="jurusan" id="jurusan" value="{{ old('jurusan')}}" class="form-control @error('jurusan') is-invalid @enderror">
                                        <option selected>Pilih...</option>
                                        @foreach($jurusan as $jurusan)
                                            <option value="{{$jurusan->id}}">{{$jurusan->nama}}</option>
                                        @endforeach
                                    </select>
                                    @error('jurusan')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12 col-lg-6 col-md-6">
                                <div class="my-1">
                                    <div class="my-1">
                                        <label class="mb-2" for="nama">Jenis Kelamin</label>
                                        <br>
                                        <select name="jenis_kelamin" id="jenis_kelamin" value="{{ old('jenis_kelamin')}}" class="form-control @error('jenis_kelamin') is-invalid @enderror">
                                            <option selected>Pilih...</option>
                                            <option value="Laki-laki"> Laki-Laki</option>
                                            <option value="Perempuan"> Perempuan</option>
                                        </select>
                                        @error('jenis_kelamin')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row my-1">
                            <div class="col-12 col-lg-6 col-md-6">
                                <div class="form-group last mb-3">
                                    <div class="my-1">
                                        <div class="my-1">
                                            <label class="mb-2" for="nama">Email</label>
                                            <input type="text" name="email" id="email" value="{{ old('email')}}" class="form-control @error('email') is-invalid @enderror">
                                            @error('email')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6 col-md-6">
                                <div class="form-group last mb-3">
                                    <div class="my-1">
                                        <label class="mb-2" for="nama">NISN</label>
                                        <input type="text" name="nisn" id="nisn" value="{{ old('nisn')}}" class="form-control @error('nisn') is-invalid @enderror">
                                        @error('nisn')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row my-1">
                            <div class="col-12 col-lg-6 col-md-6">
                                <div class="form-group last mb-3">
                                    <div class="my-1">
                                        <div class="">
                                            <label class="mb-2" for="nama">Tempat Lahir</label>
                                            <input type="text" name="tempat_lahir" id="tempat_lahir" value="{{ old('tempat_lahir')}}" class="form-control @error('tempat_lahir') is-invalid @enderror">
                                            @error('tempat_lahir')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6 col-md-6">
                                <div class="form-group last mb-3">
                                    <div class="my-1">
                                        <div class="">
                                            <label class="mb-2" for="nama">Tanggal Lahir</label>
                                            <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{ old('tanggal_lahir')}}" class="form-control @error('tanggal_lahir') is-invalid @enderror">
                                            @error('tanggal_lahir')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group last mb-3">
                            <div class="my-1">
                                <div class="my-1">
                                    <label class="mb-2" for="nama">Alamat</label>
                                    <textarea class="form-control @error('alamat') is-invalid @enderror"  id="floatingTextarea" name="alamat" placeholder="..."></textarea>
                                    @error('alamat')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row my-1">
                            <div class="col-12 col-lg-6 col-md-6">
                                <div class="form-group last mb-3">
                                    <div class="my-1">
                                        <div class="my-1">
                                            <label class="mb-2" for="nama">Asal Sekolah</label>
                                            <textarea class="form-control @error('asal_sekolah') is-invalid @enderror"  id="floatingTextarea" name="asal_sekolah" placeholder="..."></textarea>
                                            @error('asal_sekolah')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6 col-md-6">
                                <div class="form-group last mb-3">
                                    <div class="my-1">
                                        <div class="my-1">
                                            <label class="mb-2" for="nama">Nama Wali</label>
                                            <input type="text" name="nama_wali" id="nama_wali" value="{{ old('nama_wali')}}" class="form-control @error('nama_wali') is-invalid @enderror">
                                            @error('nama_wali')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <button type="submit" onclick="addForm('{{ route('register.store') }}')" name="submit" class="btn btn-block btn-primary">Daftar</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('script')
    <script src="{{ asset('authPageTemplate/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('authPageTemplate/js/popper.min.js') }}"></script>
    <script src="{{ asset('authPageTemplate/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('authPageTemplate/js/main.js') }}"></script>
@endpush

@endsection

@push('script')
    <script>
        $('#formDaftar').on('submit', function(e){
            if(! e.preventDefault()){
                $.post($('#formDaftar form').attr('action'), $('#formDaftar form').serialize())
                .done((response) => {
                    iziToast.success({
                        title: 'Sukses',
                        message: 'Data berhasil disimpan',
                        position: 'topRight'
                    })
                })
                .fail((errors) => {
                    iziToast.error({
                        title: 'Gagal',
                        message: 'Data gagal disimpan',
                        position: 'topRight'
                    })
                    return;
                })
            }
        })

        function addForm(url){
            $('#formDaftar form').attr('action', url);
            $('#formDaftar [name=_method]').val('post');
        }
    </script>
@endpush