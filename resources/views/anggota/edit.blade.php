@extends('template.welcome')

@section('content')
<section class="content-wrapper">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Edit Data Anggota</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <form action="{{ route('anggota.update', $anggota[0]->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="kode_anggota">Kode Anggota</label>
                    <input type="text" name="kode_anggota" id="kode_anggota" class="form-control @error('kode_anggota') is-invalid @enderror" value="{{ $anggota[0]->kode_anggota }}">
                    @error('kode_anggota')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label for="nama_anggota">Nama Anggota</label>
                    <input type="text" name="nama_anggota" id="nama_anggota" class="form-control @error('nama_anggota') is-invalid @enderror" value="{{ $anggota[0]->nama_anggota }}">
                    @error('nama_anggota')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label for="jk_anggota">Jenis Kelamin</label>
                        <select type="text" name="jk_anggota" id="jk_anggota" class="form-control @error('jk_anggota') is-invalid @enderror" value="{{ $anggota[0]->jk_anggota }}">
                          <option></option>
                          <option value="L">Laki-Laki</option>
                          <option value="P">Perempuan</option>
                        </select>
                    @error('jk_anggota')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label for="jurusan_anggota">Jurusan anggota</label>
                    <input type="text" name="jurusan_anggota" id="jurusan_anggota" class="form-control @error('jurusan_anggota') is-invalid @enderror" value="{{ $anggota[0]->jurusan_anggota }}">
                    @error('jurusan_anggota')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label for="no_telp_anggota">No Telepon</label>
                    <input type="number" name="no_telp_anggota" id="no_telp_anggota" class="form-control @error('no_telp_anggota') is-invalid @enderror" value="{{ $anggota[0]->no_telp_anggota }}">
                    @error('no_telp_anggota')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label for="alamat_anggota">Alamat Anggota</label>
                    <input type="text" name="alamat_anggota" id="alamat_anggota" class="form-control @error('alamat_anggota') is-invalid @enderror" value="{{ $anggota[0]->alamat_anggota }}">
                    @error('alamat_anggota')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-warning">Update</button>
                </div>
                </form>
            </div>
</div>
@endsection