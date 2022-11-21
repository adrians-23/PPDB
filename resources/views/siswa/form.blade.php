<div class="modal fade" id="modalForm" style="display: none; padding-right: 17px;" aria-modal="true" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"> </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">

                        {{-- Add Nama --}}
                        <div class="my-1">
                            <label class="mb-2" for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" value="{{ old('nama')}}" class="form-control @error('nama') is-invalid @enderror">
                            @error('nama')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Add Jurusan --}}
                        <div class="my-1">
                            <label class="mb-2" for="nama">Jurusan</label>
                            <br>
                            <select name="jenis_kelamin" id="jenis_kelamin" value="{{ old('jenis_kelamin')}}" class="form-control @error('jenis_kelamin') is-invalid @enderror">
                                <option selected>Pilih...</option>
                                @foreach($jurusan as $jurusan)
                                    <option value="{{$jurusan->id}}">{{$jurusan->nama}}</option>
                                @endforeach
                            </select>
                            @error('jenis_kelamin')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Add Jenis Kelamin --}}
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

                        {{-- Add Email --}}
                        <div class="my-1">
                            <label class="mb-2" for="nama">Email</label>
                            <input type="text" name="email" id="email" value="{{ old('email')}}" class="form-control @error('email') is-invalid @enderror">
                            @error('email')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Add NISN --}}
                        <div class="my-1">
                            <label class="mb-2" for="nama">NISN</label>
                            <input type="text" name="nisn" id="nisn" value="{{ old('nisn')}}" class="form-control @error('nisn') is-invalid @enderror">
                            @error('nisn')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="row col-12 col-lg-12 col-md-12 my-1">
                            <div class="col-12 col-lg-4 col-md-4">
                                {{-- Add Tempat Lahir --}}
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

                            <div class="col-12 col-lg-8 col-md-8">
                                {{-- Add Tanggal Lahir --}}
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

                        {{-- Add Alamat --}}
                        <div class="my-1">
                            <label class="mb-2" for="nama">Alamat</label>
                            <textarea class="form-control @error('alamat') is-invalid @enderror"  id="floatingTextarea" name="alamat" placeholder="..."></textarea>
                            @error('alamat')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Add Asal Sekolah --}}
                        <div class="my-1">
                            <label class="mb-2" for="nama">Asal Sekolah</label>
                            <textarea class="form-control @error('asal_sekolah') is-invalid @enderror"  id="floatingTextarea" name="asal_sekolah" placeholder="..."></textarea>
                            @error('asal_sekolah')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Add Wali --}}
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

                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>

                </form>
            </div>
        </div>

    </div>

</div>