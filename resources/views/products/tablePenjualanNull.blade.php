 <divc class="card-header">
                <h3 class="card-title">Produk Yang Tidak Terjual </h3>
            </div>
<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="products-table">
            <thead>
            <tr>
                <th>Product Code</th>
                <th>Product Name</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($reportData as $products)
                <tr>
                    <td>{{ $products->id }}</td>
                    <td>{{ $products->product_name }}</td>
                    
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
