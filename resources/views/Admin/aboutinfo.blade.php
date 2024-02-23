@include('layout.adminsidebar')

<div class="page-body">

    <div class="card">
        <div class="card-header pb-0 card-no-border">
            <h4>About Info</h4>
            <a href="{{ url('createaboutinfo') }}" class="btn btn-primary my-4">Create</a>
        </div>
        <div class="card-body">
            <div class="dt-ext table-responsive custom-scrollbar">
                <table class="display" id="export-button">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Age</th>
                            <th>Born In</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($aboutinfos as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->age }}</td>
                                    <td>{{ $item->born }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone }}</td>

                                    <td>
                                        <ul class="action">
                                            <li class="edit"> <a href="{{ url('aboutinfo/' . $item->id . '/edit') }}"><i
                                                        class="icon-pencil-alt"></i></a>
                                            </li>
                                            <li class="delete"><a href="{{ url('aboutinfo/' . $item->id . '/delete') }}"><i
                                                        class="icon-trash"
                                                        onclick="return confirm('Are You Sure?')"></i></a></li>
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Age</th>
                            <th>Born In</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@include('layout.adminfooter')
