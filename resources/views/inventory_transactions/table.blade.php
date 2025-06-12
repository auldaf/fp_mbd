<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="inventory-transactions-table">
            <thead>
            <tr>
                <th>Transaction Type</th>
                <th>Transaction Created Date</th>
                <th>Transaction Modified Date</th>
                <th>Product Id</th>
                <th>Quantity</th>
                <th>Purchase Order Id</th>
                <th>Customer Order Id</th>
                <th>Comments</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($inventoryTransactions as $inventoryTransaction)
                <tr>
                    <td>{{ $inventoryTransaction->transaction_type }}</td>
                    <td>{{ $inventoryTransaction->transaction_created_date }}</td>
                    <td>{{ $inventoryTransaction->transaction_modified_date }}</td>
                    <td>{{ $inventoryTransaction->product_id }}</td>
                    <td>{{ $inventoryTransaction->quantity }}</td>
                    <td>{{ $inventoryTransaction->purchase_order_id }}</td>
                    <td>{{ $inventoryTransaction->customer_order_id }}</td>
                    <td>{{ $inventoryTransaction->comments }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['inventory-transactionsdestroy', $inventoryTransaction->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('inventory-transactionsshow', [$inventoryTransaction->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('inventory-transactionsedit', [$inventoryTransaction->id]) }}"
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
