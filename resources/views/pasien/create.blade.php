@extends('layouts.app')

@section('content')
    <h2>Tambah Pasien</h2>

    <form action="{{ url('pasien') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="">NAMA</label>
            <input type="text" name="namap" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">JENIS KELAMIN</label>
            <input type="text" name="kelamin" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">TANGGAL LAHIR</label>
            <input type="date" name="tgl_lahir" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">NO HP</label>
            <input type="text" name="nohp" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">ALAMAT</label>
            <input type="text" name="alamat" id="" class="form-control" >
        </div>
        <div class="mb-3">
            <input type="submit" value="SIMPAN" class="btn btn-primary">
        </div>
    </form>
@endsection

