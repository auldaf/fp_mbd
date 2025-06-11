<!-- Transaction Type Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('transaction_type', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('transaction_type', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('transaction_type', 'Transaction Type', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Transaction Created Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('transaction_created_date', 'Transaction Created Date:') !!}
    {!! Form::text('transaction_created_date', null, ['class' => 'form-control','id'=>'transaction_created_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#transaction_created_date').datepicker()
    </script>
@endpush

<!-- Transaction Modified Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('transaction_modified_date', 'Transaction Modified Date:') !!}
    {!! Form::text('transaction_modified_date', null, ['class' => 'form-control','id'=>'transaction_modified_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#transaction_modified_date').datepicker()
    </script>
@endpush

<!-- Product Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_id', 'Product Id:') !!}
    {!! Form::number('product_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Quantity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantity', 'Quantity:') !!}
    {!! Form::number('quantity', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Purchase Order Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('purchase_order_id', 'Purchase Order Id:') !!}
    {!! Form::number('purchase_order_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Customer Order Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer_order_id', 'Customer Order Id:') !!}
    {!! Form::number('customer_order_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Comments Field -->
<div class="form-group col-sm-6">
    {!! Form::label('comments', 'Comments:') !!}
    {!! Form::text('comments', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>