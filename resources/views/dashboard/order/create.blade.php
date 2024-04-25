@extends('dashboard.layouts.main')

@section('isi')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Data Order</h1>
</div>

<div class="col-md-6">
    <form action="/dashboard/order" method="post" style="background-color: #FFEAE3; padding: 20px; border-radius: 10px;">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label" style="color: #FFCBCB;">Nama Kurir</label>
            <input type="text" name="order_kurir" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required value="{{ old('order_kurir') }}" style="background-color: #FFCBCB;">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label" style="color: #FFCBCB;">Ongkir</label>
            <input type="number" name="order_ongkir" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required value="{{ old('order_ongkir') }}" style="background-color: #FFCBCB;">
        </div>
        <hr class="my-5" style="border-color: #FFCBCB;">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label" style="color: #FFCBCB;">Nama Produk</label>
            <select class="form-control" name="produk_kode" id="" style="color: #000; background-color: #FFCBCB;">
                <option value="">-- Pilih Produk --</option>
                @foreach($produks as $produk)
                <option value="{{ $produk->produk_kode }}">{{ $produk->produk_nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" style="color: #FFCBCB;">Harga</label>
            <input type="number" name="detail_harga" class="form-control" id="exampleInputPassword1" required value="{{ old('detail_harga') }}" style="background-color: #FFCBCB;">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" style="color: #FFCBCB;">Qty</label>
            <div class="input-group mb-3">
                <input type="number" name="detail_jml" class="form-control" id="exampleInputPassword1" required value="{{ old('detail_jml') }}" style="background-color: #FFCBCB;">
                <button type="submit" class="btn btn-success" style="background-color: #FFCBCB; border-color: #FFCBCB;"><i class="bi bi-plus-lg"></i></button>
            </div>
        </div>
        {{-- <button type="submit" class="btn btn-primary">Save</button> --}}
        <a href="/dashboard/order" class="btn btn-danger" style="background-color: #FFB1B1; border-color: #FFB1B1; color: #FFF;">Back</a>
    </form>
</div>
@endsection
