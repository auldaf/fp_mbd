<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="purchase-order-details-table">
            <thead>
            <tr>
                <th>Purchase Order Id</th>
                <th>Product Id</th>
                <th>Quantity</th>
                <th>Unit Cost</th>
                <th>Date Received</th>
                <th>Posted To Inventory</th>
                <th>Inventory Id</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($purchaseOrderDetails as $purchaseOrderDetails)
                <tr>
                    <td>{{ $purchaseOrderDetails->purchase_order_id }}</td>
                    <td>{{ $purchaseOrderDetails->product_id }}</td>
                    <td>{{ $purchaseOrderDetails->quantity }}</td>
                    <td>{{ $purchaseOrderDetails->unit_cost }}</td>
                    <td>{{ $purchaseOrderDetails->date_received }}</td>
                    <td>{{ $purchaseOrderDetails->posted_to_inventory }}</td>
                    <td>{{ $purchaseOrderDetails->inventory_id }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['purchase-order-details.destroy', $purchaseOrderDetails->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('purchase-order-details.show', [$purchaseOrderDetails->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('purchase-order-details.edit', [$purchaseOrderDetails->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $purchaseOrderDetails])
        </div>
    </div>
</div>
