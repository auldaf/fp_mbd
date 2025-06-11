<!-- Order Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('order_id', 'Order Id:') !!}
    {!! Form::number('order_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Invoice Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('invoice_date', 'Invoice Date:') !!}
    {!! Form::text('invoice_date', null, ['class' => 'form-control','id'=>'invoice_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#invoice_date').datepicker()
    </script>
@endpush

<!-- Due Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('due_date', 'Due Date:') !!}
    {!! Form::text('due_date', null, ['class' => 'form-control','id'=>'due_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#due_date').datepicker()
    </script>
@endpush

<!-- Shipping Field -->
<div class="form-group col-sm-6">
    {!! Form::label('shipping', 'Shipping:') !!}
    {!! Form::number('shipping', null, ['class' => 'form-control']) !!}
</div>

<!-- Amount Due Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount_due', 'Amount Due:') !!}
    {!! Form::number('amount_due', null, ['class' => 'form-control']) !!}
</div>