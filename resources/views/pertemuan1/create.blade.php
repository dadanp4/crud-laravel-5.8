@extends('pertemuan1.master')

@section('header')
    Create
@endsection

@section('konten')
<form action=" {{ route('mahasiswa.store') }} " method="post" class="was-validated" id="form_tambah" name="form_tambah">

    @csrf
    <div class="form-group">
      <label for="nama">Nama:</label>
      <input type="text" class="form-control" id="nama" placeholder="Enter nama" name="nama" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="npm">Npm:</label>
      <input type="text" class="form-control" id="npm" placeholder="Enter npm" name="npm" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
            <label for="fakultas">Fakultas:</label>
            <input type="text" class="form-control" id="fakultas" placeholder="Enter fakultas" name="fakultas" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <div class="form-group">
                <label for="jurusan">Jurusan:</label>
                <input type="text" class="form-control" id="jurusan" placeholder="Enter jurusan" name="jurusan" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
    <button type="submit" class="btn btn-primary" id="tambah" name="tambah" value="tambah">TAMBAH</button>
    <a href="{{ route('mahasiswa.index') }}" class="btn btn-danger">BACK</a>
  </form>
@endsection

@section('footer')
    Create By dadan
@endsection
