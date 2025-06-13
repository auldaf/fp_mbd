@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Complete Summary</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table" id="completeSummaryTable">
                        <thead>
                            <tr>
                                <th>Customer Name</th>
                                <th>Employee Info</th>
                                <th>Shipper Company</th>
                                <th>Order Date</th>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Unit Price</th>
                                <th>Item Total</th>
                                <th>Shipping Fee</th>
                                <th>Order Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($completeSummary as $summary)
                            <tr>
                                <td>{{ $summary->customer_name }}</td>
                                <td>{{ $summary->employee_info }}</td>
                                <td>{{ $summary->shipper_company }}</td>
                                <td>{{ $summary->formatted_order_date }}</td>
                                <td>{{ $summary->product_name }}</td>
                                <td>{{ $summary->quantity }}</td>
                                <td>{{ $summary->unit_price }}</td>
                                <td>{{ $summary->item_total }}</td>
                                <td>{{ $summary->shipping_fee }}</td>
                                <td>{{ $summary->order_status }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
