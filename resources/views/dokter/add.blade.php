@extends('layouts.parent')
@section('content')
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a href="{{ route('add-dokter') }}">
                    <button class="btn btn-success">
                        Tambah data dokter +
                    </button>
                </a>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              @php
                  $no= 1;
              @endphp
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>Nama Dokter</th>
                      <th>Poli</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $no++ }}
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->poli }}</td>
                            <td>
                              <button onclick="konfirmasiHapus()"><a href="/dokter-delete/{{ $item->id }}"><i class="fas fa-trash text-danger"></i></a></button>
                            </td>
                        </tr>
                    @endforeach
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

        <script>
          function konfirmasiHapus() {
              // Menampilkan kotak dialog konfirmasi
              var konfirmasi = confirm("Apakah Anda yakin ingin menghapus data ini?");

              // Memeriksa apakah pengguna menekan tombol "OK"
              if (konfirmasi) {
                  // Lakukan aksi penghapusan di sini
                  alert("Data berhasil dihapus!");
              } else {
                  // Jika pengguna memilih "Batal"
                  alert("Penghapusan dibatalkan.");
              }
          }
        </script>
@endsection