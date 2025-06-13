@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Order Report</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table" id="order-report-table">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Customer Name</th>
                                <th>Employee Name</th>
                                <th>Order Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reportData as $data)
                            <tr>
                                <td>{{ $data->order_id }}</td>
                                <td>{{ $data->customer_name }}</td>
                                <td>{{ $data->employee_name }}</td>
                                <td>{{ $data->order_date }}</td>
                                <td>{{ $data->status }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
