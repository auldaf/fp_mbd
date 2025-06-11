<!-- Purchase Order Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('purchase_order_id', 'Purchase Order Id:') !!}
    {!! Form::number('purchase_order_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Product Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_id', 'Product Id:') !!}
    {!! Form::number('product_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Quantity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantity', 'Quantity:') !!}
    {!! Form::number('quantity', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Unit Cost Field -->
<div class="form-group col-sm-6">
    {!! Form::label('unit_cost', 'Unit Cost:') !!}
    {!! Form::number('unit_cost', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Date Received Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_received', 'Date Received:') !!}
    {!! Form::text('date_received', null, ['class' => 'form-control','id'=>'date_received']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date_received').datepicker()
    </script>
@endpush

<!-- Posted To Inventory Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('posted_to_inventory', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('posted_to_inventory', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('posted_to_inventory', 'Posted To Inventory', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Inventory Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('inventory_id', 'Inventory Id:') !!}
    {!! Form::number('inventory_id', null, ['class' => 'form-control']) !!}
</div>