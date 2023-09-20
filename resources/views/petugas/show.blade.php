@extends('template.welcome')

@section('content')
<section class="content-wrapper">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Detail Data Petugas</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="form-group">
                <label for="nama_petugas">Nama Petugas</label>
                <input type="text" name="nama_petugas" id="nama_petugas" class="form-control" value="{{ $petugas->nama_petugas }}" disabled>
            </div>
            <div class="form-group">
                <label for="jabatan_petugas">Jabatan Petugas</label>
                <input type="text" name="jabatan_petugas" id="jabatan_petugas" class="form-control" value="{{ $petugas->jabatan_petugas }}" disabled>
            </div>
            <div class="form-group">
                <label for="no_telp_petugas">No Telepon</label>
                <input type="text" name="no_telp_petugas" id="no_telp_petugas" class="form-control" value="{{ $petugas->no_telp_petugas }}" disabled>
            </div>
            <div class="form-group">
                <label for="alamat_petugas">Alamat Petugas</label>
                <input type="text" name="alamat_petugas" id="alamat_petugas" class="form-control" value="{{ $petugas->alamat_petugas }}" disabled>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <!-- Any additional buttons or elements specific to the petugas view can be added here -->
        </div>
    </div>
</section>
@endsection
