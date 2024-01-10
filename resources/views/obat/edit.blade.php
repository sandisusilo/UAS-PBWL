@extends('layouts.app')

@section('content')
    <h2>Edit Obat</h2>

    <form action="{{ url('obat/' . $row->o_id) }}" method="post">
                <input type="hidden" name="_method" value="PATCH">

        @csrf
        <div class="mb-3">
            <label for="">NAMA OBAT</label>
            <input type="text" name="namao" id="" class="form-control" value="{{ $row->namao }}">
        </div>

        <div class="mb-3">
            <label for="">STOK</label>
            <input type="text" name="stok" id="" class="form-control" value="{{ $row->stok }}">
        </div>
        <div class="mb-3">
            <label for="">HARGA</label>
            <input type="text" name="harga" id="" class="form-control" value="{{ $row->harga }}">
        </div>
        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary" >
        </div>
    </form>
@endsection
