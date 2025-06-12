<!-- Company Field -->
<div class="form-group col-sm-6">
    {!! Form::label('company', 'Company:') !!}
    {!! Form::text('company', null, ['class' => 'form-control', 'maxlength' => 50, 'maxlength' => 50]) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Email Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email_address', 'Email Address:') !!}
    {!! Form::text('email_address', null, ['class' => 'form-control', 'maxlength' => 50, 'maxlength' => 50]) !!}
</div>

<!-- Mobile Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mobile_phone', 'Mobile Phone:') !!}
    {!! Form::text('mobile_phone', null, ['class' => 'form-control', 'maxlength' => 25, 'maxlength' => 25]) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::textarea('address', null, ['class' => 'form-control']) !!}
</div>