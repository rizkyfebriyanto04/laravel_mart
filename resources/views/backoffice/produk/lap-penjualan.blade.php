@extends('backoffice.master')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Laporan Penjualan</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No Invoice</th>
                        <th>Pembeli</th>
                        <th>Alamat</th>
                        <th>Produk</th>
                        <th>Foto</th>
                        <th>Harga</th>
                        <th>qty</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $d)

                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $d->no_invoice }}</td>
                        <td>{{ $d->nama_pembeli }}</td>
                        <td>{{ $d->alamat_pembeli }}</td>
                        <td>{{ $d->nama_produk }}</td>
                        <td>
                            @if($d->foto)
                            <img src="{{ asset('storage/' . $d->foto) }}" alt="Foto Produk" width="100">
                            @else
                            <p>No Image</p>
                            @endif
                        </td>
                        <td>Rp {{ number_format($d->harga_jual,) }}</td>
                        <td>{{ $d->jumlah }}</td>
                        <td>Rp {{ number_format($d->total,) }}</td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
