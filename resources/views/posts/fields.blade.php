<!-- Supplier Ids Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('supplier_ids', 'Supplier Ids:') !!}
    {!! Form::textarea('supplier_ids', null, ['class' => 'form-control']) !!}
</div>

<!-- Product Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_code', 'Product Code:') !!}
    {!! Form::text('product_code', null, ['class' => 'form-control', 'maxlength' => 25, 'maxlength' => 25]) !!}
</div>

<!-- Product Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_name', 'Product Name:') !!}
    {!! Form::text('product_name', null, ['class' => 'form-control', 'maxlength' => 50, 'maxlength' => 50]) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- List Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('list_price', 'List Price:') !!}
    {!! Form::number('list_price', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Product Category Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_category', 'Product Category:') !!}
    {!! Form::text('product_category', null, ['class' => 'form-control', 'maxlength' => 50, 'maxlength' => 50]) !!}
</div>

<!-- Product Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_image', 'Product Image:') !!}
    {!! Form::text('product_image', null, ['class' => 'form-control', 'required']) !!}
</div>