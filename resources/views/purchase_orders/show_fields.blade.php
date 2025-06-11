<!-- Supplier Id Field -->
<div class="col-sm-12">
    {!! Form::label('supplier_id', 'Supplier Id:') !!}
    <p>{{ $purchaseOrders->supplier_id }}</p>
</div>

<!-- Created By Field -->
<div class="col-sm-12">
    {!! Form::label('created_by', 'Created By:') !!}
    <p>{{ $purchaseOrders->created_by }}</p>
</div>

<!-- Submitted Date Field -->
<div class="col-sm-12">
    {!! Form::label('submitted_date', 'Submitted Date:') !!}
    <p>{{ $purchaseOrders->submitted_date }}</p>
</div>

<!-- Creation Date Field -->
<div class="col-sm-12">
    {!! Form::label('creation_date', 'Creation Date:') !!}
    <p>{{ $purchaseOrders->creation_date }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $purchaseOrders->status }}</p>
</div>

<!-- Expected Date Field -->
<div class="col-sm-12">
    {!! Form::label('expected_date', 'Expected Date:') !!}
    <p>{{ $purchaseOrders->expected_date }}</p>
</div>

<!-- Shipping Fee Field -->
<div class="col-sm-12">
    {!! Form::label('shipping_fee', 'Shipping Fee:') !!}
    <p>{{ $purchaseOrders->shipping_fee }}</p>
</div>

<!-- Payment Date Field -->
<div class="col-sm-12">
    {!! Form::label('payment_date', 'Payment Date:') !!}
    <p>{{ $purchaseOrders->payment_date }}</p>
</div>

<!-- Payment Amount Field -->
<div class="col-sm-12">
    {!! Form::label('payment_amount', 'Payment Amount:') !!}
    <p>{{ $purchaseOrders->payment_amount }}</p>
</div>

<!-- Payment Method Field -->
<div class="col-sm-12">
    {!! Form::label('payment_method', 'Payment Method:') !!}
    <p>{{ $purchaseOrders->payment_method }}</p>
</div>

