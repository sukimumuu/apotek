@extends('layouts.parent')
@section('content')
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a href="{{ route('add-pasien') }}">
                    <button class="btn btn-success">
                        Tambah data pasien +
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
                      <th>Nama pasien</th>
                      <th>Jenis kelamin</th>
                      <th>Umur</th>
                      <th>No. telp</th>
                      <th>Tipe order</th>
                      <th>Resep</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $no++ }}
                            <td>{{ $item->fullname }}</td>
                            <td>
                                @if($item->gender === 'male')
                                    Laki-laki
                                @elseif($item->gender === 'female')
                                    Perempuan
                                @else
                                    {{ $item->gender }}
                                @endif
                            </td>
                            <td>{{ $item->age }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>@if($item->order_type === 'only_buy')
                                    Hanya Beli
                                @elseif($item->order_type === 'consult')
                                    Hanya Konsultasi
                                @else
                                    {{ $item->order_type }}
                                @endif
                            </td>
                            <td>
                                @if($item->recepts === 'yes')
                                    Dengan resep
                                @elseif($item->recepts === 'no')
                                    Tidak dengan resep
                                @else
                                    {{ $item->recepts }}
                                @endif
                            </td>
                            <td>
                              <a href="/pasien-delete/{{ $item->id }}"><i class="fas fa-trash text-danger"></i></a>
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
@endsection