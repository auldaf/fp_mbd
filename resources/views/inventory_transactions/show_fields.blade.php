<!-- Transaction Type Field -->
<div class="col-sm-12">
    {!! Form::label('transaction_type', 'Transaction Type:') !!}
    <p>{{ $inventoryTransaction->transaction_type }}</p>
</div>

<!-- Transaction Created Date Field -->
<div class="col-sm-12">
    {!! Form::label('transaction_created_date', 'Transaction Created Date:') !!}
    <p>{{ $inventoryTransaction->transaction_created_date }}</p>
</div>

<!-- Transaction Modified Date Field -->
<div class="col-sm-12">
    {!! Form::label('transaction_modified_date', 'Transaction Modified Date:') !!}
    <p>{{ $inventoryTransaction->transaction_modified_date }}</p>
</div>

<!-- Product Id Field -->
<div class="col-sm-12">
    {!! Form::label('product_id', 'Product Id:') !!}
    <p>{{ $inventoryTransaction->product_id }}</p>
</div>

<!-- Quantity Field -->
<div class="col-sm-12">
    {!! Form::label('quantity', 'Quantity:') !!}
    <p>{{ $inventoryTransaction->quantity }}</p>
</div>

<!-- Purchase Order Id Field -->
<div class="col-sm-12">
    {!! Form::label('purchase_order_id', 'Purchase Order Id:') !!}
    <p>{{ $inventoryTransaction->purchase_order_id }}</p>
</div>

<!-- Customer Order Id Field -->
<div class="col-sm-12">
    {!! Form::label('customer_order_id', 'Customer Order Id:') !!}
    <p>{{ $inventoryTransaction->customer_order_id }}</p>
</div>

<!-- Comments Field -->
<div class="col-sm-12">
    {!! Form::label('comments', 'Comments:') !!}
    <p>{{ $inventoryTransaction->comments }}</p>
</div>

