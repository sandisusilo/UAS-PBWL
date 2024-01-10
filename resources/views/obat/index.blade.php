@extends('layouts.app')
@section('content')

<h2>OBAT</h2>

<a href="{{ url('obat/create') }}" class="btn btn-primary mb-3 float-end">Tambah Obat</a>

<table class="table table-bordered">
      <tr>
      <th scope="col" class="text-center">NO</th>

            <th>ID OBAT</th>
            <th>NAMA OBAT</th>
            <th>STOK</th>
            <th> HARGA</th>
            <th>EDIT</th>
            <th>DELETE</th>

      </tr>
      @php $no = 1; @endphp
      @foreach ($rows as $row)
            <tr>
            <th class="text-center">{{ $no++ }}</th>

                  <td>{{ $row->o_id }}</td>
                  <td>{{ $row->namao }}</td>
                  <td>{{ $row->stok }}</td>
                  <td>RP.{{ $row->harga }}</td>
                  <td><a href="{{ url('obat/edit/' . $row->o_id) }}" class="btn btn-warning">Edit</a></td>
                  <td>
                        <form action="{{ url('obat/' . $row->o_id) }}" method="post">
                              <input type="hidden" name="_method" value="DELETE">
                              @csrf
                              <input type="submit" value="Delete" class="btn btn-danger" onclick="return konfirmasi('apakah anda yakin?')">
                        </form>
                  </td>
            </tr>
      @endforeach

</table>

@endsection