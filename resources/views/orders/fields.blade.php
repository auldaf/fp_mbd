<!-- Employee Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('employee_id', 'Employee Id:') !!}
    {!! Form::number('employee_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Customer Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer_id', 'Customer Id:') !!}
    {!! Form::number('customer_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Order Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('order_date', 'Order Date:') !!}
    {!! Form::text('order_date', null, ['class' => 'form-control','id'=>'order_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#order_date').datepicker()
    </script>
@endpush

<!-- Shipped Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('shipped_date', 'Shipped Date:') !!}
    {!! Form::text('shipped_date', null, ['class' => 'form-control','id'=>'shipped_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#shipped_date').datepicker()
    </script>
@endpush

<!-- Shipper Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('shipper_id', 'Shipper Id:') !!}
    {!! Form::number('shipper_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Ship Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ship_name', 'Ship Name:') !!}
    {!! Form::text('ship_name', null, ['class' => 'form-control', 'maxlength' => 50, 'maxlength' => 50]) !!}
</div>

<!-- Ship Address Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('ship_address', 'Ship Address:') !!}
    {!! Form::textarea('ship_address', null, ['class' => 'form-control']) !!}
</div>

<!-- Shipping Fee Field -->
<div class="form-group col-sm-6">
    {!! Form::label('shipping_fee', 'Shipping Fee:') !!}
    {!! Form::number('shipping_fee', null, ['class' => 'form-control']) !!}
</div>

<!-- Payment Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('payment_type', 'Payment Type:') !!}
    {!! Form::text('payment_type', null, ['class' => 'form-control', 'maxlength' => 50, 'maxlength' => 50]) !!}
</div>

<!-- Paid Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('paid_date', 'Paid Date:') !!}
    {!! Form::text('paid_date', null, ['class' => 'form-control','id'=>'paid_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#paid_date').datepicker()
    </script>
@endpush

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control', 'maxlength' => 50, 'maxlength' => 50]) !!}
</div>