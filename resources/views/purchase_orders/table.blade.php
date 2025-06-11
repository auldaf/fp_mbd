<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="purchase-orders-table">
            <thead>
            <tr>
                <th>Supplier Id</th>
                <th>Created By</th>
                <th>Submitted Date</th>
                <th>Creation Date</th>
                <th>Status</th>
                <th>Expected Date</th>
                <th>Shipping Fee</th>
                <th>Payment Date</th>
                <th>Payment Amount</th>
                <th>Payment Method</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($purchaseOrders as $purchaseOrders)
                <tr>
                    <td>{{ $purchaseOrders->supplier_id }}</td>
                    <td>{{ $purchaseOrders->created_by }}</td>
                    <td>{{ $purchaseOrders->submitted_date }}</td>
                    <td>{{ $purchaseOrders->creation_date }}</td>
                    <td>{{ $purchaseOrders->status }}</td>
                    <td>{{ $purchaseOrders->expected_date }}</td>
                    <td>{{ $purchaseOrders->shipping_fee }}</td>
                    <td>{{ $purchaseOrders->payment_date }}</td>
                    <td>{{ $purchaseOrders->payment_amount }}</td>
                    <td>{{ $purchaseOrders->payment_method }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['purchase-orders.destroy', $purchaseOrders->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('purchase-orders.show', [$purchaseOrders->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('purchase-orders.edit', [$purchaseOrders->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $purchaseOrders])
        </div>
    </div>
</div>
