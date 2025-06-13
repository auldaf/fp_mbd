@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Products by Category</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('products.by.category.show') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="category_name">Category Name:</label>
                        <input type="text" name="category_name" id="category_name" class="form-control" value="{{ $categoryName ?? '' }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Get Products</button>
                </form>

                @if (isset($products) && count($products) > 0)
                    <h3 class="mt-4">Products in Category: {{ $categoryName }}</h3>
                    <table class="table table-bordered mt-3">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Product Code</th>
                                <th>Product Name</th>
                                <th>List Price</th>
                                <th>Product Category</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->product_code }}</td>
                                    <td>{{ $product->product_name }}</td>
                                    <td>{{ $product->list_price }}</td>
                                    <td>{{ $product->product_category }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @elseif (isset($products) && count($products) == 0 && isset($categoryName))
                    <p class="mt-4">No products found for category: {{ $categoryName }}</p>
                @endif
            </div>
        </div>
    </div>
@endsection
