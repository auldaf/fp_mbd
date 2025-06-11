<!-- Order Id Field -->
<div class="col-sm-12">
    {!! Form::label('order_id', 'Order Id:') !!}
    <p>{{ $invoices->order_id }}</p>
</div>

<!-- Invoice Date Field -->
<div class="col-sm-12">
    {!! Form::label('invoice_date', 'Invoice Date:') !!}
    <p>{{ $invoices->invoice_date }}</p>
</div>

<!-- Due Date Field -->
<div class="col-sm-12">
    {!! Form::label('due_date', 'Due Date:') !!}
    <p>{{ $invoices->due_date }}</p>
</div>

<!-- Shipping Field -->
<div class="col-sm-12">
    {!! Form::label('shipping', 'Shipping:') !!}
    <p>{{ $invoices->shipping }}</p>
</div>

<!-- Amount Due Field -->
<div class="col-sm-12">
    {!! Form::label('amount_due', 'Amount Due:') !!}
    <p>{{ $invoices->amount_due }}</p>
</div>

