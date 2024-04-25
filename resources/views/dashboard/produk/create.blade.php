@extends('dashboard.layouts.main')

@section('isi')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Data Produk</h1>
</div>

<div class="col-md-6">
    <form action="/dashboard/produk" method="post" style="background-color: #FFEAE3; padding: 20px; border-radius: 10px;">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label" style="color: #FFCBCB;">Nama</label>
            <input type="text" name="produk_nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required value="{{ old('produk_nama') }}" style="background-color: #FFCBCB;">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label" style="color: #FFCBCB;">Harga</label>
            <input type="number" name="produk_hrg" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required value="{{ old('produk_hrg') }}" style="background-color: #FFCBCB;">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" style="color: #FFCBCB;">Qty</label>
            <input type="number" name="produk_stock" class="form-control" id="exampleInputPassword1" required value="{{ old('produk_stock') }}" style="background-color: #FFCBCB;">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label" style="color: #FFCBCB;">Pilih Kategori</label>
            <select class="form-control" name="kat_id" id="" style="color: #000; background-color: #FFCBCB;">
                <option value="">-- Pilih Kategori --</option>
                @foreach($kategories as $kategori)
                <option value="{{ $kategori->kat_id }}">{{ $kategori->kat_nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label" style="color: #FFCBCB;">Keterangan</label>
            <textarea class="form-control" name="produk_keterangan" cols="30" rows="5" style="background-color: #FFCBCB;">{{ old('produk_keterangan') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary" style="background-color: #FFCBCB; border-color: #FFCBCB;">Save</button>
        <a href="/dashboard/produk" class="btn btn-danger" style="background-color: #FFB1B1; border-color: #FFB1B1; color: #FFF;">Back</a>
    </form>
</div>
@endsection
