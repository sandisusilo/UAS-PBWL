@extends('layouts.app')
@section('content')
    <h2>Edit Rekam Medis</h2>
    <form action="{{ url('/redis/' . $row->r_id) }}" method="post">
    <input type="hidden" name="_method" value="PATCH">
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
            <input type="date" name="tgl_periksa" id="" class="form-control" value="{{ $row->tgl_periksa }}">
        </div>
        <div class="mb-3">
            <label for="">KELUHAN</label>
            <input type="text" name="keluhan" id="" class="form-control" value="{{ $row->keluhan }}">
        </div>
        <div class="mb-3">
            <label for="">TINDAKAN</label>
            <input type="text" name="tindakan" id="" class="form-control" value="{{ $row->tindakan }}">
        </div>
        <div class="mb-3">
            <label for="">DIAGNOSA</label>
            <input type="text" name="diagnosa" id="" class="form-control" value="{{ $row->diagnosa }}">
        </div>
        <div class="mb-3">
            <label for="">OBAT</label>
            <select name="r_id_o" id="" class="form-control">
                    @foreach ($obat as $ob)
                        <option value="{{$ob->o_id}}">{{$ob->namao}}</option>
                    @endforeach
                </select>
        </div>
        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>
@endsection
