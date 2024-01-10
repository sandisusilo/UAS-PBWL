@extends('layouts.app')
@section('content')

<h2>REKAM MEDIS</h2>


<a href="{{ url('redis/create') }}" class="btn btn-primary mb-3 float-end">Tambah Rekam Medis</a>

<table class="table table-bordered">
      <tr>
      <th scope="col" class="text-center">NO</th>
            <th>ID REKAM MEDIS</th>
            <th>NAMA PASIEN</th>
            <th>TANGGAL PERIKSA</th>
            <th>KELUHAN</th>
            <th>TINDAKAN</th>
            <th>DIAGNOSA</th>
            <th>OBAT</th>
            <th>EDIT</th>
            <th>DELETE</th>

      </tr>
      @php $no = 1; @endphp
      @foreach ($rows as $row)
            <tr>
            <th class="text-center">{{ $no++ }}</th>
            <td>{{ $row->r_id}}</td>
            <td>
                  @if($row->pasien)
                        {{ $row->pasien->namap }}
                  @else
                        Data Pasien Tidak Tersedia
                  @endif
            </td>
            <td>{{ $row->tgl_periksa}}</td>
            <td>{{ $row->keluhan}}</td>
            <td>{{ $row->tindakan}}</td>
            <td>{{ $row->diagnosa}}</td>
            <td>{{ $row->obat->namao}}</td>

                  <td><a href="{{ url('redis/edit/' . $row->r_id ) }}" class="btn btn-warning">Edit</a></td>
                  <td>
                        <form action="{{ url('redis/' . $row->r_id) }}" method="post">
                              <input type="hidden" name="_method" value="DELETE">
                              @csrf
                              <input type="submit" value="Delete" class="btn btn-danger" onclick="return konfirmasi('apakah anda yakin?')">
                        </form>
                  </td>
            </tr>
      @endforeach

</table>

@endsection