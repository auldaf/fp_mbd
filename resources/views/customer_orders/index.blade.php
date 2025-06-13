@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Customer Orders</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('customer.orders.show') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="customer_id">Customer ID:</label>
                        <input type="number" name="customer_id" id="customer_id" class="form-control" value="{{ $customerId ?? '' }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Get Orders</button>
                </form>

                @if (isset($orders) && count($orders) > 0)
                    <h3 class="mt-4">Orders for Customer ID: {{ $customerId }}</h3>
                    <table class="table table-bordered mt-3">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Order Date</th>
                                <th>Shipped Date</th>
                                <th>Status</th>
                                <th>Shipping Fee</th>
                                <th>Customer Name</th>
                                <th>Employee Name</th>
                                <th>Shipper Company</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $order->order_id }}</td>
                                    <td>{{ $order->order_date }}</td>
                                    <td>{{ $order->shipped_date }}</td>
                                    <td>{{ $order->status }}</td>
                                    <td>{{ $order->shipping_fee }}</td>
                                    <td>{{ $order->customer_name }}</td>
                                    <td>{{ $order->employee_name }}</td>
                                    <td>{{ $order->shipper_company }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @elseif (isset($orders) && count($orders) == 0 && isset($customerId))
                    <p class="mt-4">No orders found for Customer ID: {{ $customerId }}</p>
                @endif
            </div>
        </div>
    </div>
@endsection
