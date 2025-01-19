@extends('backoffice.master')

@section('content')
<!-- Page Heading -->
<a href="#" class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#exampleModal">
    <span class="text">Tambah Produk</span>
</a>
{{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p> --}}
<!-- DataTales Example -->
<br>
<br>
@if (session('success'))
    <div class="alert alert-success" id="success-alert">
        <b>Berhasil !</b> {{ session('success') }}
    </div>
@endif
@if (session('warning'))
    <div class="alert alert-warning" id="success-alert">
        {{ session('warning') }}
    </div>
@endif
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Produk</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Keterangan</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $d)

                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $d->nama_produk }}</td>
                        <td>{{ $d->harga_jual }}</td>
                        <td>{{ $d->keterangan }}</td>
                        <td>
                            @if($d->foto)
                                <img src="{{ asset('storage/' . $d->foto) }}" alt="Foto Produk" width="100">
                            @else
                                <p>No Image</p>
                            @endif
                        </td>
                        <td>
                            <!-- Tombol untuk membuka modal edit dengan data produk -->
                            <a href="#" class="btn btn-info btn-circle" data-toggle="modal" data-target="#editModal{{ $d->id }}">
                                <i class="fas fa-pen"></i>
                            </a>

                            <form action="{{ route('delete.produk', $d->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-circle">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>

                    <!-- Modal Edit Produk -->
                    <div class="modal fade" id="editModal{{ $d->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{ $d->id }}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel{{ $d->id }}">Edit Produk</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('update.produk', $d->id) }}" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <!-- Nama Produk -->
                                        <div class="form-group">
                                            <label for="namaproduk{{ $d->id }}" class="col-form-label">Nama Produk:</label>
                                            <input type="text" class="form-control" id="namaproduk{{ $d->id }}" name="namaproduk" value="{{ old('namaproduk', $d->nama_produk) }}">
                                        </div>

                                        <!-- Harga Jual -->
                                        <div class="form-group">
                                            <label for="hargajual{{ $d->id }}" class="col-form-label">Harga Jual:</label>
                                            <input type="text" class="form-control" id="hargajual{{ $d->id }}" name="hargajual" value="{{ old('hargajual', $d->harga_jual) }}">
                                        </div>

                                        <!-- Keterangan -->
                                        <div class="form-group">
                                            <label for="keterangan{{ $d->id }}" class="col-form-label">Keterangan:</label>
                                            <input type="text" class="form-control" id="keterangan{{ $d->id }}" name="keterangan" value="{{ old('keterangan', $d->keterangan) }}">
                                        </div>

                                        <!-- Foto (Opsional) -->
                                        <div class="form-group">
                                            <label for="foto{{ $d->id }}" class="col-form-label">Foto:</label>
                                            <input type="file" class="form-control-file" id="foto{{ $d->id }}" name="foto">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                </div>
                                    </form>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ route('simpan.produk') }}" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nama Produk:</label>
                        <input type="text" class="form-control" id="recipient-name" name="namaproduk">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name2" class="col-form-label">Harga Jual:</label>
                        <input type="text" class="form-control" id="recipient-name2" name="hargajual">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name3" class="col-form-label">Keterangan:</label>
                        <input type="text" class="form-control" id="recipient-name3" name="keterangan">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name4" class="col-form-label">Foto:</label>
                        <input type="file" class="form-control-file" id="recipient-name4" name="foto">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
      </div>
    </div>
  </div>
@endsection
