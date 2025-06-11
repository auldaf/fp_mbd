<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="suppliers-table">
            <thead>
            <tr>
                <th>Company</th>
                <th>Name</th>
                <th>Email Address</th>
                <th>Business Phone</th>
                <th>Address</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($suppliers as $suppliers)
                <tr>
                    <td>{{ $suppliers->company }}</td>
                    <td>{{ $suppliers->name }}</td>
                    <td>{{ $suppliers->email_address }}</td>
                    <td>{{ $suppliers->business_phone }}</td>
                    <td>{{ $suppliers->address }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['suppliers.destroy', $suppliers->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('suppliers.show', [$suppliers->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('suppliers.edit', [$suppliers->id]) }}"
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
