@extends('template.layout')

@section('title')
    Jurusan
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Data Jurusan</h1>
    </div>

    <div class="section-body">

        {{-- Data Jurusan --}}
        <div class="card">
            {{-- Judul --}}
            <div class="card-header">
                <div class="col-12 col-lg-10 col-md-10">
                    <div>
                        <h4>Data Jurusan</h4>
                    </div>
                </div>
                
                <div class="col-12 col-lg-2 col-md-2">
                    <button type="button" onclick="addForm('{{ route('jurusan.store') }}')" class="btn btn-tool btn-primary shadow-sm rounded-pill" style="width: 95px;">
                            <i class="fa fa-plus"></i> Tambah
                    </button>
                </div>
            </div>

            {{-- Tabel --}}
            <div class="card-body">
                <table class="table table-striped text-nowrap" style="width: 100%;">
                    <thead>
                        <tr>
                            <td scope="col" width="50px">No</td>
                            <td scope="col">Nama</td>
                            <td scope="col" width="84px">Aksi</td>
                        </tr>
                    </thead>
                </table>
            </div>

        </div>

    </div>
</section>

@include('jurusan.form')

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
                    url: '{{ route('jurusan.data') }}'
                },
                columns: [
                    {data: 'DT_RowIndex'},
                    {data: 'nama'},
                    {data: 'aksi'}
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

        function addForm(url){
            $('#modalForm').modal('show');
            $('#modalForm .modal-title').text('Tambah Data Jurusan');
            $('#modalForm form')[0].reset();

            $('#modalForm form').attr('action', url);
            $('#modalForm [name=_method]').val('post');
        }

        function editData(url){
            $('#modalForm').modal('show');
            $('#modalForm .modal-title').text('Edit Data Jurusan');

            $('#modalForm form')[0].reset();
            $('#modalForm form').attr('action', url);
            $('#modalForm [name=_method]').val('put');

            $.get (url)
                .done((response) => {
                    $('#modalForm [name=nama]').val(response.nama);
                    // console.log(response.nama);
                })
                .fail((errors) => {
                    alert('Tidak Dapat Menampilkan Data');
                    return;
                })
        }

        function deleteData(url){
            swal({
                title: "Apa anda yakin menghapus data ini?",
                text: "Jika anda klik OK, maka data akan terhapus",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    $.post(url, {
                    '_token' : $('[name=csrf-token]').attr('content'),
                    '_method' : 'delete'
                })
                .done((response) => {
                    swal({
                    title: "Sukses",
                    text: "Data berhasil dihapus!",
                    icon: "success",
                    });
                })
                .fail((errors) => {
                    swal({
                    title: "Gagal",
                    text: "Data gagal dihapus!",
                    icon: "error",
                    });
                })
                table.ajax.reload();
                }
            });

        }
    </script>
@endpush