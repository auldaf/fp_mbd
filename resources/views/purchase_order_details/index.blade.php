@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Purchase Order Details</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('purchase-order-details.create') }}">
                        Add New
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            @include('purchase_order_details.table')
        </div>

         <div class="card-footer clearfix">
            <div class="float-right">
                @include('adminlte-templates::common.paginate', ['records' => $purchaseOrderDetails])
            </div>
        </div>
    </div>

@endsection
