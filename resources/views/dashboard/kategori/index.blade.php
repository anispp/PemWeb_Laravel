@extends('dashboard.layouts.main')

@section('isi')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Master Kategori</h1>
</div>

<div class="row d-flex">
    <div class="col-md-4">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="background-color: #FFEAE3; border-color: #FFCBCB; color: #000;">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
</div>

<div class="table-responsive small">
    <a href="/dashboard/kategori/create" class="btn btn-success btn-sm mb-3" style="background-color: #FFCBCB; border-color: #FFCBCB;">Tambah Data</a>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kategories as $kategori)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $kategori->kat_nama }}</td>
                <td>{{ $kategori->kat_keterangan }}</td>
                <td>
                    <a href="/dashboard/kategori/{{ $kategori->kat_id }}/edit" class="btn btn-warning btn-sm" style="background-color: #FFCBCB; border-color: #FFCBCB;"><i class="bi bi-pencil"></i></a>
                    <form action="/dashboard/kategori/{{ $kategori->kat_id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger btn-sm" style="background-color: #FFCBCB; border-color: #FFCBCB;" onclick="return confirm('Apakah yakin menghapus data ini?')"><i class="bi bi-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
