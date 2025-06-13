<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="orders-table">
            <thead>
            <tr>
                <th>Employee Name</th>
                <th>Customer Id</th>
                <th>Order Date</th>
                <th>Shipped Date</th>
                <th>Shipper Id</th>
                <th>Ship Name</th>
                <th>Ship Address</th>
                <th>Shipping Fee</th>
                <th>Payment Type</th>
                <th>Paid Date</th>
                <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $orders)
                <tr>
                    <td>{{ $orders->employee->name ?? '-' }}</td>
                    <td>{{ $orders->customer_id }}</td>
                    <td>{{ $orders->order_date }}</td>
                    <td>{{ $orders->shipped_date }}</td>
                    <td>{{ $orders->shipper_id }}</td>
                    <td>{{ $orders->ship_name }}</td>
                    <td>{{ $orders->ship_address }}</td>
                    <td>{{ $orders->shipping_fee }}</td>
                    <td>{{ $orders->payment_type }}</td>
                    <td>{{ $orders->paid_date }}</td>
                    <td>{{ $orders->status }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['orders.destroy', $orders->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('orders.show', [$orders->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('orders.edit', [$orders->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</div>
