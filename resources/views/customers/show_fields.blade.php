<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $customers->name }}</p>
</div>

<!-- Email Address Field -->
<div class="col-sm-12">
    {!! Form::label('email_address', 'Email Address:') !!}
    <p>{{ $customers->email_address }}</p>
</div>

<!-- Mobile Phone Field -->
<div class="col-sm-12">
    {!! Form::label('mobile_phone', 'Mobile Phone:') !!}
    <p>{{ $customers->mobile_phone }}</p>
</div>

<!-- Address Field -->
<div class="col-sm-12">
    {!! Form::label('address', 'Address:') !!}
    <p>{{ $customers->address }}</p>
</div>

<!-- Membership Field -->
<div class="col-sm-12">
    {!! Form::label('membership', 'Membership:') !!}
    <p>{{ $customers->membership }}</p>
</div>

