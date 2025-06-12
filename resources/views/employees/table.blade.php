<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="employees-table">
            <thead>
            <tr>
                <th>Company</th>
                <th>Name</th>
                <th>Email Address</th>
                <th>Mobile Phone</th>
                <th>Address</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($employees as $employees)
                <tr>
                    <td>{{ $employees->company }}</td>
                    <td>{{ $employees->name }}</td>
                    <td>{{ $employees->email_address }}</td>
                    <td>{{ $employees->mobile_phone }}</td>
                    <td>{{ $employees->address }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['employees.destroy', $employees->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('employees.show', [$employees->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('employees.edit', [$employees->id]) }}"
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
