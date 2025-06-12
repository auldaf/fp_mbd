<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="products-table">
            <thead>
            <tr>
                <th>Product Code</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>List Price</th>
                <th>Product Category</th>
                <th>Product Image</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $products)
                <tr>
                    <td>{{ $products->product_code }}</td>
                    <td>{{ $products->product_name }}</td>
                    <td>{{ $products->description }}</td>
                    <td>{{ $products->list_price }}</td>
                    <td>{{ $products->product_category }}</td>
                    <!-- <td>{{ $products->product_image }}</td> -->
                    <td>
                        @if ($products->product_image)
                            <img src="data:{{ $products->image_mime_type }};base64,{{ base64_encode($products->product_image) }}" 
                                alt="Product Image" width="150">
                        @else
                            <p>No image</p>
                        @endif
                    </td>
                    
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['products.destroy', $products->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('products.show', [$products->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('products.edit', [$products->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

   
</div>
