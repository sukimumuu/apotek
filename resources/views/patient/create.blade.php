@extends('layouts.parent')

@section('content')
<section class="content-header">
    <form action="{{ route('store-pasien') }}" method="post">
        @csrf
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Project Add</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Project Add</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
  
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Pasien</h3>
  
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label for="inputName">Nama Lengkap</label>
                  <input type="text" id="inputName" class="form-control" name="fullname">
                </div>
                 <div class="form-group">
                  <label for="inputStatus">Jenis Kelamin</label>
                  <select id="inputStatus" class="form-control custom-select" name="gender">
                    <option selected disabled>Pilih Jenis Kelamin</option>
                    <option value="male">Laki-Laki</option>
                    <option value="female">Perempuan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="inputName">Umur</label>
                  <input type="text" id="inputName" class="form-control" name="age">
                </div>
                <div class="form-group">
                  <label for="inputName">No. Telp</label>
                  <input type="text" id="inputName" class="form-control" name="phone">
                </div>
                <div class="form-group">
                  <label for="inputStatus">Jenis Keperluan</label>
                  <select id="inputStatus" class="form-control custom-select" name="order_type">
                    <option selected disabled>Pilih Keperluan</option>
                    <option value="consult">Periksa Dokter</option>
                    <option value="only_buy">Hanya Membeli Obat</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="inputStatus">Resep Dokter</label>
                  <select id="inputStatus" class="form-control custom-select" name="recepts">
                    <option selected disabled>Pilih Keterangan</option>
                    <option value="yes">Ada</option>
                    <option value="no">Tidak</option>
                  </select>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          
        </div>
        <div class="row">
          <div class="col-12">
            <a href="#" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-success float-right">Create new Project</button>
          </div>
        </div>
    </form>
    </section>

@endsection