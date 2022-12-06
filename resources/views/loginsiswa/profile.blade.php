@extends('template.layout')

@section('title')
    Profile
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Profile | {{ Auth()->user()->name }}</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="row">
                
                <div class="col-lg-4">
                    <div class="">
                        <div class="card-body text-center">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                                alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                            <h5 class="my-3">{{ auth()->user()->name }}</h5>

                            <button type="button" onclick="editData(' {{ route('profile.update', Auth()->user()->id) }} ')" class="btn btn-tool btn-primary shadow-sm rounded-pill" style="width: 120px;">
                                Edit Profil
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    
                    <div class="">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Nama</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ auth()->user()->name }}</p>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Jurusan</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">@foreach($profileJurusan as $pj) {{$pj->nama}} @endforeach</p>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Jenis Kelamin</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">@foreach($profile as $p) {{$p->jenis_kelamin}} @endforeach</p>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Agama</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">@foreach($profile as $p) {{$p->agama}} @endforeach</p>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{Auth()->user()->email}}</p>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Phone</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">@foreach($profile as $p) {{$p->telepon}} @endforeach</p>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">NISN</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">@foreach($profile as $p) {{$p->nisn}} @endforeach</p>
                                </div>
                            </div>

                            <hr>
                            
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Tempat Lahir</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">@foreach($profile as $p) {{$p->tempat_lahir}} @endforeach</p>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Taggal Lahir</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">@foreach($profile as $p) {{$p->tanggal_lahir}} @endforeach</p>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Alamat</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">@foreach($profile as $p) {{$p->alamat}} @endforeach</p>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Asal Sekolah</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">@foreach($profile as $p) {{$p->asal_sekolah}} @endforeach</p>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Password</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ Auth()->user()->password }}</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('loginsiswa.formProfile')

@endsection

@push('script')
    <script>
        // Data Tables
        let table;

        $(function() {
            table = $('.table').DataTable({
                proccesing: true,
                autowidth: false,
                ajax: {
                    url: '{{ route('pesertadidik.data') }}'
                },
                columns: [
                    {data: 'DT_RowIndex'},
                    {data: 'nama'},
                    {data: 'jurusan_id'},
                    {data: 'jenis_kelamin'},
                    {data: 'asal_sekolah'},
                ]
            });
        })

        $('#modalForm').on('submit', function(e){
            if(! e.preventDefault()){
                $.post($('#modalForm form').attr('action'), $('#modalForm form').serialize())
                .done((response) => {
                    $('#modalForm').modal('hide');
                    table.ajax.reload();
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

        function editData(url){
            $('#modalForm').modal('show');
            $('#modalForm .modal-title').text('Edit Profile');

            $('#modalForm form')[0].reset();
            $('#modalForm form').attr('action', url);
            $('#modalForm [name=_method]').val('put');

            $.get (url)
                .done((response) => {
                    $('#modalForm [name=nama]').val(response.nama);
                    $('#modalForm [name=jurusan_id]').val(response.jurusan_id);
                    $('#modalForm [name=jenis_kelamin]').val(response.jenis_kelamin);
                    $('#modalForm [name=agama]').val(response.agama);
                    $('#modalForm [name=email]').val(response.email);
                    $('#modalForm [name=telepon]').val(response.telepon);
                    $('#modalForm [name=nisn]').val(response.nisn);
                    $('#modalForm [name=tempat_lahir]').val(response.tempat_lahir);
                    $('#modalForm [name=tanggal_lahir]').val(response.tanggal_lahir);
                    $('#modalForm [name=alamat]').val(response.alamat);
                    $('#modalForm [name=asal_sekolah]').val(response.asal_sekolah);
                    $('#modalForm [name=password]').val(response.password);
                    // console.log(response.nama);
                })
                .fail((errors) => {
                    alert('Tidak Dapat Menampilkan Data');
                    return;
                })
            }
    </script>
@endpush