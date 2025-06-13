@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Customer Order Summary</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table" id="customerOrderSummaryTable">
                        <thead>
                            <tr>
                                <th>Customer ID</th>
                                <th>Customer Name</th>
                                <th>Email Address</th>
                                <th>Mobile Phone</th>
                                <th>Total Orders</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($customerOrderSummary as $summary)
                            <tr>
                                <td>{{ $summary->customer_id }}</td>
                                <td>{{ $summary->customer_name }}</td>
                                <td>{{ $summary->email_address }}</td>
                                <td>{{ $summary->mobile_phone }}</td>
                                <td>{{ $summary->total_orders }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
