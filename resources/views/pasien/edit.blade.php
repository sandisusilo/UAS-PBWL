@extends('layouts.app')

@section('content')
    <h2>Edit Pasien</h2>

    <form action="{{ url('pasien/' . $row->id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf
        <div class="mb-3">
            <label for="">NAMA</label>
            <input type="text" name="namap" id="" class="form-control" value="{{ $row->namap }}">
        </div>
        <div class="mb-3">
            <label for="">JENIS KELAMIN</label>
            <input type="text" name="kelamin" id="" class="form-control" value="{{ $row->kelamin }}">
        </div>
        <div class="mb-3">
            <label for="">TANGGAL LAHIR</label>
            <input type="date" name="tgl_lahir" id="" class="form-control" value="{{ $row->tgl_lahir }}">
        </div>
        <div class="mb-3">
            <label for="">NO HP</label>
            <input type="text" name="nohp" id="" class="form-control" value="{{ $row->nohp }}">
        </div>
        <div class="mb-3">
            <label for="">ALAMAT</label>
            <input type="text" name="alamat" id="" class="form-control" value="{{ $row->alamat }}">
        </div>
        
        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>
@endsection
