@extends('layouts.app')
@section('content')

<h2>PASIEN</h2>

<a href="{{ url('pasien/create') }}" class="btn btn-primary mb-3 float-end">Tambah Pasien</a>

<table class="table table-hover table-striped table-bordered">
      <thead>
      <tr>
      <th scope="col" class="text-center">NO</th>
            <th>ID PASIEN</th>
            <th>NAMA</th>
            <th>JENIS KELAMIN</th>
            <th>TANGGAL LAHIR</th>
            <th>NO HP</th>
            <th>ALAMAT</th>
            
            <th>EDIT</th>
            <th>DELETE</th>

      </tr>
      </thead>
      <tbody>
      @php $no = 1; @endphp
      @foreach ($rows as $row)
            <tr>
            <th class="text-center">{{ $no++ }}</th>
                  <td>{{ $row->id }}</td>
                  <td>{{ $row->namap }}</td>
                  <td>{{ $row->kelamin }}</td>
                  <td>{{ $row->tgl_lahir }}</td>
                  <td>{{ $row->nohp }}</td>
                  <td>{{ $row->alamat }}</td>
                  
                  <td><a href="{{ url('pasien/edit/' . $row->id) }}" class="btn btn-warning">Edit</a></td>
                  <td>
                        <form action="{{ url('pasien/' . $row->id) }}" method="post">
                              <input type="hidden" name="_method" value="DELETE">
                              @csrf
                              <input type="submit" value="Delete" class="btn btn-danger" onclick="return konfirmasi('apakah anda yakin?')">
                        </form>
                  </td>
            </tr>
      @endforeach
</tbody>

</table>

@endsection