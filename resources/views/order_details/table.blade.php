<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="order-details-table">
            <thead>
            <tr>
                <th>Order Id</th>
                <th>Product Id</th>
                <th>Quantity</th>
                <th>Unit Price</th>
                <th>Discount</th>
                <th>Status</th>
                <th>Date Allocated</th>
                <th>Purchase Order Id</th>
                <th>Inventory Id</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orderDetails as $orderDetails)
                <tr>
                    <td>{{ $orderDetails->order_id }}</td>
                    <td>{{ $orderDetails->product_id }}</td>
                    <td>{{ $orderDetails->quantity }}</td>
                    <td>{{ $orderDetails->unit_price }}</td>
                    <td>{{ $orderDetails->discount }}</td>
                    <td>{{ $orderDetails->status }}</td>
                    <td>{{ $orderDetails->date_allocated }}</td>
                    <td>{{ $orderDetails->purchase_order_id }}</td>
                    <td>{{ $orderDetails->inventory_id }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['order-details.destroy', $orderDetails->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('order-details.show', [$orderDetails->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('order-details.edit', [$orderDetails->id]) }}"
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

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $orderDetails])
        </div>
    </div>
</div>
