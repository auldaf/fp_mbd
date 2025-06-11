<!-- Purchase Order Id Field -->
<div class="col-sm-12">
    {!! Form::label('purchase_order_id', 'Purchase Order Id:') !!}
    <p>{{ $purchaseOrderDetails->purchase_order_id }}</p>
</div>

<!-- Product Id Field -->
<div class="col-sm-12">
    {!! Form::label('product_id', 'Product Id:') !!}
    <p>{{ $purchaseOrderDetails->product_id }}</p>
</div>

<!-- Quantity Field -->
<div class="col-sm-12">
    {!! Form::label('quantity', 'Quantity:') !!}
    <p>{{ $purchaseOrderDetails->quantity }}</p>
</div>

<!-- Unit Cost Field -->
<div class="col-sm-12">
    {!! Form::label('unit_cost', 'Unit Cost:') !!}
    <p>{{ $purchaseOrderDetails->unit_cost }}</p>
</div>

<!-- Date Received Field -->
<div class="col-sm-12">
    {!! Form::label('date_received', 'Date Received:') !!}
    <p>{{ $purchaseOrderDetails->date_received }}</p>
</div>

<!-- Posted To Inventory Field -->
<div class="col-sm-12">
    {!! Form::label('posted_to_inventory', 'Posted To Inventory:') !!}
    <p>{{ $purchaseOrderDetails->posted_to_inventory }}</p>
</div>

<!-- Inventory Id Field -->
<div class="col-sm-12">
    {!! Form::label('inventory_id', 'Inventory Id:') !!}
    <p>{{ $purchaseOrderDetails->inventory_id }}</p>
</div>

