<!-- Order Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('order_id', 'Order Id:') !!}
    {!! Form::number('order_id', null, ['class' => 'form-control', 'required']) !!}
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

<!-- Unit Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('unit_price', 'Unit Price:') !!}
    {!! Form::number('unit_price', null, ['class' => 'form-control']) !!}
</div>

<!-- Discount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('discount', 'Discount:') !!}
    {!! Form::number('discount', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control', 'maxlength' => 50, 'maxlength' => 50]) !!}
</div>

<!-- Date Allocated Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_allocated', 'Date Allocated:') !!}
    {!! Form::text('date_allocated', null, ['class' => 'form-control','id'=>'date_allocated']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date_allocated').datepicker()
    </script>
@endpush

<!-- Purchase Order Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('purchase_order_id', 'Purchase Order Id:') !!}
    {!! Form::number('purchase_order_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Inventory Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('inventory_id', 'Inventory Id:') !!}
    {!! Form::number('inventory_id', null, ['class' => 'form-control']) !!}
</div>