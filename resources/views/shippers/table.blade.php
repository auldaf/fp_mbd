<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="shippers-table">
            <thead>
            <tr>
                <th>Company</th>
                <th>Name</th>
                <th>Email Address</th>
                <th>Address</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($shippers as $shippers)
                <tr>
                    <td>{{ $shippers->company }}</td>
                    <td>{{ $shippers->name }}</td>
                    <td>{{ $shippers->email_address }}</td>
                    <td>{{ $shippers->address }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['shippers.destroy', $shippers->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('shippers.show', [$shippers->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('shippers.edit', [$shippers->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $shippers])
        </div>
    </div>
</div>
