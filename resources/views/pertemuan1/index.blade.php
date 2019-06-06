@extends('pertemuan1.master')

@section('header')
    Index
@endsection

@section('konten')
    <hr>
    <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary btn-block">INPUT DATA MAHASISWA</a>
    <hr>
    <table class="table table-striped" id="tabel_mahasiswa">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Npm</th>
            <th>Email</th>
            <th>Fakultas</th>
            <th>Jurusan</th>
            <th colspan="2"></th>
          </tr>
        </thead>
        <?php $no = 1; ?>
        @foreach ($data as $item)
        <tbody>
          <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->npm }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->fakultas }}</td>
            <td>{{ $item->jurusan }}</td>
            <td><a href="{{ route('mahasiswa.edit', $item->id) }}"><img src="/images/edit.png" alt=""></a></td>
            <form action="{{ route('mahasiswa.destroy', $item->id) }}" method="post">
                @csrf
                @method('DELETE')
                <td><label for="submit"><button type="submit" style="background: transparent; border:none;"><img src="/images/delete.png" alt=""></button></label></td>
            </form>
          </tr>
        </tbody>
        @endforeach
      </table>
@endsection

@section('footer')
    Index By Dadan
@endsection
