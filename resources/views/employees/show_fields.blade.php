<!-- Company Field -->
<div class="col-sm-12">
    {!! Form::label('company', 'Company:') !!}
    <p>{{ $employees->company }}</p>
</div>

<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $employees->name }}</p>
</div>

<!-- Email Address Field -->
<div class="col-sm-12">
    {!! Form::label('email_address', 'Email Address:') !!}
    <p>{{ $employees->email_address }}</p>
</div>

<!-- Mobile Phone Field -->
<div class="col-sm-12">
    {!! Form::label('mobile_phone', 'Mobile Phone:') !!}
    <p>{{ $employees->mobile_phone }}</p>
</div>

<!-- Address Field -->
<div class="col-sm-12">
    {!! Form::label('address', 'Address:') !!}
    <p>{{ $employees->address }}</p>
</div>

