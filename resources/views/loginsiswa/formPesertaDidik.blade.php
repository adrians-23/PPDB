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
                            <input type="text" name="nama" id="nama" value="{{ old('nama')}}" class="form-control">
                        </div>

                        <div class="row my-1">
                            <div class="col-12 col-lg-6 col-md-6">
                                {{-- Add NISN --}}
                                <div class="my-1">
                                    <label class="mb-2" for="nisn">NISN</label>
                                    <input type="text" name="nisn" id="nisn" value="{{ old('nisn')}}" class="form-control">
                                </div>
                            </div>

                            <div class="col-12 col-lg-6 col-md-6">
                                {{-- Add Jurusan --}}
                                <div class="my-1">
                                    <label class="mb-2" for="jurusan_id">Jurusan</label>
                                    <br>
                                    <select name="jurusan_id" id="jurusan_id" value="{{ old('jurusan_id')}}" class="form-control">
                                        <option selected>Pilih...</option>
                                        @foreach($jurusan as $jurusan)
                                            <option value="{{$jurusan->id}}">{{$jurusan->nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row my-1">
                            <div class="col-12 col-lg-6 col-md-6">
                                {{-- Add Email --}}
                                <div class="my-1">
                                    <label class="mb-2" for="email">Email</label>
                                    <input type="email" name="email" id="email" value="{{ old('email')}}" class="form-control">
                                </div>
                            </div>

                            <div class="col-12 col-lg-6 col-md-6">
                                {{-- Add Email --}}
                                <div class="my-1">
                                    <label class="mb-2" for="telepon">Telepon</label>
                                    <input type="text" name="telepon" id="telepon" value="{{ old('telepon')}}" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row my-1">
                            <div class="col-12 col-lg-6 col-md-6">
                                {{-- Add Jenis Kelamin --}}
                                <div class="my-1">
                                    <label class="mb-2" for="jenis_kelamin">Jenis Kelamin</label>
                                    <br>
                                    <select name="jenis_kelamin" id="jenis_kelamin" value="{{ old('jenis_kelamin')}}" class="form-control">
                                        <option selected>Pilih...</option>
                                        <option value="Laki-laki"> Laki-Laki</option>
                                        <option value="Perempuan"> Perempuan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6 col-md-6">
                                {{-- Add Agama --}}
                                <div class="my-1">
                                    <label class="mb-2" for="agama">Agama</label>
                                    <input type="text" name="agama" id="agama" value="{{ old('agama')}}" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row my-1">
                            <div class="col-12 col-lg-6 col-md-6">
                                {{-- Add Tempat Lahir --}}
                                <div class="">
                                    <label class="mb-2" for="tempat_lahir">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" id="tempat_lahir" value="{{ old('tempat_lahir')}}" class="form-control">
                                </div>
                            </div>

                            <div class="col-12 col-lg-6 col-md-6">
                                {{-- Add Tanggal Lahir --}}
                                <div class="">
                                    <label class="mb-2" for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{ old('tanggal_lahir')}}" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row my-1">
                            <div class="col-12 col-lg-6 col-md-6">
                                {{-- Add Alamat --}}
                                <div class="my-1">
                                    <label class="mb-2" for="alamat">Alamat</label>
                                    <textarea class="form-control"  id="alamat" name="alamat" placeholder="..."></textarea>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6 col-md-6">
                                {{-- Add Asal Sekolah --}}
                                <div class="my-1">
                                    <label class="mb-2" for="asal_sekolah">Asal Sekolah</label>
                                    <textarea class="form-control"  id="asal_sekolah" name="asal_sekolah" placeholder="..."></textarea>
                                </div>
                            </div>
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