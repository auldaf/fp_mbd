<!-- Product Code Field -->
<div class="col-sm-12">
    {!! Form::label('product_code', 'Product Code:') !!}
    <p>{{ $products->product_code }}</p>
</div>

<!-- Product Name Field -->
<div class="col-sm-12">
    {!! Form::label('product_name', 'Product Name:') !!}
    <p>{{ $products->product_name }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $products->description }}</p>
</div>

<!-- List Price Field -->
<div class="col-sm-12">
    {!! Form::label('list_price', 'List Price:') !!}
    <p>{{ $products->list_price }}</p>
</div>

<!-- Product Category Field -->
<div class="col-sm-12">
    {!! Form::label('product_category', 'Product Category:') !!}
    <p>{{ $products->product_category }}</p>
</div>

<!-- Product Image Field -->
<div class="col-sm-12">
    {!! Form::label('product_image', 'Product Image:') !!}
    <p>{{ $products->product_image }}</p>
</div>

