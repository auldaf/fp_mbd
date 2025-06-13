<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="customers-table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email Address</th>
                <th>Mobile Phone</th>
                <th>Address</th>
                <th>Membership</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($customers as $customers)
                <tr>
                    <td>{{ $customers->name }}</td>
                    <td>{{ $customers->email_address }}</td>
                    <td>{{ $customers->mobile_phone }}</td>
                    <td>{{ $customers->address }}</td>
                    <td>{{ $customers->membership }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['customers.destroy', $customers->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('customers.show', [$customers->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('customers.edit', [$customers->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $customers])
        </div>
    </div>
</div>
