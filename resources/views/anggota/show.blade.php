@extends('template.welcome')

@section('content')

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Data Anggota</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Detail Data Anggota</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                  <div class="card-body">
                    <div class="form-group">
                      <label for="kode_anggota">Kode Anggota</label>
                      <input type="text" name="kode_anggota" id="kode_anggota" class="form-control" value="{{ $anggota[0]->kode_anggota }}" disabled>
                    </div>
                    <div class="form-group">
                      <label for="nama_anggota">Nama Anggota</label>
                      <input type="text" name="nama_anggota" id="nama_anggota" class="form-control" value="{{ $anggota[0]->nama_anggota }}" disabled>
                    </div>
                    <div class="form-group">
                      <label for="jk_anggota">Jk Anggota</label>
                      <input type="text" name="jk_anggota" id="jk_anggota" class="form-control" value="{{ $anggota[0]->jk_anggota }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="jurusan_anggota">Jurusan Anggota</label>
                        <input type="text" name="jurusan_anggota" id="jurusan_anggota" class="form-control" value="{{ $anggota[0]->jurusan_anggota }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="no_telp_anggota">No Telp Anggota</label>
                        <input type="text" name="no_telp_anggota" id="no_telp_anggota" class="form-control" value="{{ $anggota[0]->no_telp_anggota }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="alamat_anggota">Alamat Anggota</label>
                        <input type="text" name="alamat_anggota" id="alamat_anggota" class="form-control" value="{{ $anggota[0]->alamat_anggota }}" disabled>
                    </div>
                  </div>
                  <!-- /.card-body -->
    
                  <div class="card-footer">
    
                  </div>
              </div>
              <!-- /.card -->
            </div>
            <!--/.col (left) -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
</div>
@endsection