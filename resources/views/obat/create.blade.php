
@extends('layouts.app')

@section('content')
    <h2>Tambah Obat</h2>

    <form action="{{ url('obat') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="">NAMA</label>
            <input type="text" name="namao" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">STOK</label>
            <input type="text" name="stok" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">HARGA</label>
            <input type="text" name="harga" id="" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit" value="SIMPAN" class="btn btn-primary">
        </div>
    </form>
@endsection
