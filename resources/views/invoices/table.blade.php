<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="invoices-table">
            <thead>
            <tr>
                <th>Order Id</th>
                <th>Invoice Date</th>
                <th>Due Date</th>
                <th>Shipping</th>
                <th>Amount Due</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($invoices as $invoices)
                <tr>
                    <td>{{ $invoices->order_id }}</td>
                    <td>{{ $invoices->invoice_date }}</td>
                    <td>{{ $invoices->due_date }}</td>
                    <td>{{ $invoices->shipping }}</td>
                    <td>{{ $invoices->amount_due }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['invoices.destroy', $invoices->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('invoices.show', [$invoices->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('invoices.edit', [$invoices->id]) }}"
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
