@extends('layouts.app')
@section('content')
    <h2>Tambah Rekam Medis</h2>
    <form action="{{ url('redis') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="">NAMA PASIEN</label>
            <select name="id_p" id="" class="form-control">
                    @foreach ($pasien as $pas)
                        <option value="{{$pas->id}}">{{$pas->namap}}</option>
                    @endforeach
                </select>
        </div>
        <div class="mb-3">
            <label for="">TANGGAL PERIKSA</label>
            <input type="date" name="tgl_periksa" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">KELUHAN</label>
            <input type="text" name="keluhan" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">TINDAKAN</label>
            <input type="text" name="tindakan" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">DIAGNOSA</label>
            <input type="text" name="diagnosa" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">OBAT</label>
            <select name="r_id_o" id="" class="form-control">
                    @foreach ($obats as $obat)
                        <option value="{{$obat->o_id}}">{{$obat->namao}}</option>
                    @endforeach
                </select>
        </div>
        <div class="mb-3">
            <input type="submit" value="SIMPAN" class="btn btn-primary">
        </div>
    </form>
@endsection

