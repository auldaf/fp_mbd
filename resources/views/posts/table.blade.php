<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="posts-table">
            <thead>
            <tr>
                <th>Supplier Ids</th>
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
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->supplier_ids }}</td>
                    <td>{{ $post->product_code }}</td>
                    <td>{{ $post->product_name }}</td>
                    <td>{{ $post->description }}</td>
                    <td>{{ $post->list_price }}</td>
                    <td>{{ $post->product_category }}</td>
                    <td>{{ $post->product_image }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('posts.show', [$post->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('posts.edit', [$post->id]) }}"
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

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $posts])
        </div>
    </div>
</div>
