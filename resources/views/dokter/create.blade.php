@extends('layouts.parent')

@section('content')
<section class="content-header">
    <form action="{{ route('store-dokter') }}" method="post">
        @csrf
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Tambah data dokter</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Tambah data</li>
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
                <h3 class="card-title">Data Dokter</h3>
  
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label for="inputName">Nama Lengkap</label>
                  <input type="text" id="inputName" class="form-control" name="name">
                </div>
                <div class="form-group">
                  <label for="inputName">Poli</label>
                  <input type="text" id="inputName" class="form-control" name="poli">
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          
        </div>
        <div class="row">
          <div class="col-12">
            <a href="{{ route('index-dokter') }}" class="btn btn-secondary">Batal</a>
            <button type="submit" class="btn btn-success float-right">Kirim</button>
          </div>
        </div>
    </form>
    </section>
@endsection