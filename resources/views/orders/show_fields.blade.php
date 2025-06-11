<!-- Employee Id Field -->
<div class="col-sm-12">
    {!! Form::label('employee_id', 'Employee Id:') !!}
    <p>{{ $orders->employee_id }}</p>
</div>

<!-- Customer Id Field -->
<div class="col-sm-12">
    {!! Form::label('customer_id', 'Customer Id:') !!}
    <p>{{ $orders->customer_id }}</p>
</div>

<!-- Order Date Field -->
<div class="col-sm-12">
    {!! Form::label('order_date', 'Order Date:') !!}
    <p>{{ $orders->order_date }}</p>
</div>

<!-- Shipped Date Field -->
<div class="col-sm-12">
    {!! Form::label('shipped_date', 'Shipped Date:') !!}
    <p>{{ $orders->shipped_date }}</p>
</div>

<!-- Shipper Id Field -->
<div class="col-sm-12">
    {!! Form::label('shipper_id', 'Shipper Id:') !!}
    <p>{{ $orders->shipper_id }}</p>
</div>

<!-- Ship Name Field -->
<div class="col-sm-12">
    {!! Form::label('ship_name', 'Ship Name:') !!}
    <p>{{ $orders->ship_name }}</p>
</div>

<!-- Ship Address Field -->
<div class="col-sm-12">
    {!! Form::label('ship_address', 'Ship Address:') !!}
    <p>{{ $orders->ship_address }}</p>
</div>

<!-- Shipping Fee Field -->
<div class="col-sm-12">
    {!! Form::label('shipping_fee', 'Shipping Fee:') !!}
    <p>{{ $orders->shipping_fee }}</p>
</div>

<!-- Payment Type Field -->
<div class="col-sm-12">
    {!! Form::label('payment_type', 'Payment Type:') !!}
    <p>{{ $orders->payment_type }}</p>
</div>

<!-- Paid Date Field -->
<div class="col-sm-12">
    {!! Form::label('paid_date', 'Paid Date:') !!}
    <p>{{ $orders->paid_date }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $orders->status }}</p>
</div>

