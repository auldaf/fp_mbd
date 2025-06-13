@extends('layouts.app')

@section('content')
<!-- <div class="container-fluid">
    <h1 class="text-black-50">You are logged in!</h1>
</div> -->
 <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Reports</h1>
                </div>
            </div>
        </div>
    </section>
<div class="content px-3">
    <div class="card-body p-0">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Produk Dengan Penjualan Terbanyak</h3>
                </div>
                <div class="card-body p-0">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Top</th>
                                <th>Nama Produk</th>
                                <th>Total Terjual</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($topSelling as $index => $row)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $row->product_name }}</td>
                                    <td>{{ $row->total_sold }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Produk Dengan Penjualan Terendah</h3>
                </div>
                <div class="card-body p-0">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Lowest</th>
                                <th>Nama Produk</th>
                                <th>Total Terjual</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($downSelling as $index => $row)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $row->product_name }}</td>
                                    <td>{{ $row->total_sold }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection
