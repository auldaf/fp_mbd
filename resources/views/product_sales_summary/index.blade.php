@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Product Sales Summary</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table" id="productSalesSummaryTable">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Product Category</th>
                                <th>Total Quantity Sold</th>
                                <th>Total Revenue</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($productSalesSummary as $summary)
                            <tr>
                                <td>{{ $summary->product_name }}</td>
                                <td>{{ $summary->product_category }}</td>
                                <td>{{ $summary->total_quantity_sold }}</td>
                                <td>{{ $summary->total_revenue }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
