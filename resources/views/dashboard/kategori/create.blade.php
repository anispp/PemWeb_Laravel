@extends('dashboard.layouts.main')

@section('isi')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Data Kategori</h1>
</div>

<div class="col-md-6">
    <form action="/dashboard/kategori" method="post" style="background-color: #FFEAE3; padding: 20px; border-radius: 10px;">
        @csrf
        {{-- <input type="hidden" name="users_id" value="1"> --}}
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" name="kat_nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required value="{{ old('kat_nama') }}" style="background-color: #FFCBCB;">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Keterangan</label>
            <textarea class="form-control" name="kat_keterangan" cols="30" rows="5" style="background-color: #FFCBCB;">{{ old('kat_keterangan') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary" style="background-color: #FFCBCB; border-color: #FFCBCB;">Save</button>
        <a href="/dashboard/kategori" class="btn btn-danger" style="background-color: #FFCBCB; border-color: #FFCBCB;">Back</a>
    </form>
</div>
@endsection
