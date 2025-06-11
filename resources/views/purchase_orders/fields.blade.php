<!-- Supplier Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('supplier_id', 'Supplier Id:') !!}
    {!! Form::number('supplier_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Created By Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_by', 'Created By:') !!}
    {!! Form::number('created_by', null, ['class' => 'form-control']) !!}
</div>

<!-- Submitted Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('submitted_date', 'Submitted Date:') !!}
    {!! Form::text('submitted_date', null, ['class' => 'form-control','id'=>'submitted_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#submitted_date').datepicker()
    </script>
@endpush

<!-- Creation Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('creation_date', 'Creation Date:') !!}
    {!! Form::text('creation_date', null, ['class' => 'form-control','id'=>'creation_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#creation_date').datepicker()
    </script>
@endpush

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control', 'maxlength' => 50, 'maxlength' => 50]) !!}
</div>

<!-- Expected Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('expected_date', 'Expected Date:') !!}
    {!! Form::text('expected_date', null, ['class' => 'form-control','id'=>'expected_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#expected_date').datepicker()
    </script>
@endpush

<!-- Shipping Fee Field -->
<div class="form-group col-sm-6">
    {!! Form::label('shipping_fee', 'Shipping Fee:') !!}
    {!! Form::number('shipping_fee', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Payment Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('payment_date', 'Payment Date:') !!}
    {!! Form::text('payment_date', null, ['class' => 'form-control','id'=>'payment_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#payment_date').datepicker()
    </script>
@endpush

<!-- Payment Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('payment_amount', 'Payment Amount:') !!}
    {!! Form::number('payment_amount', null, ['class' => 'form-control']) !!}
</div>

<!-- Payment Method Field -->
<div class="form-group col-sm-6">
    {!! Form::label('payment_method', 'Payment Method:') !!}
    {!! Form::text('payment_method', null, ['class' => 'form-control', 'maxlength' => 50, 'maxlength' => 50]) !!}
</div>