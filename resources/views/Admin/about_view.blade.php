@include('layout.adminsidebar')

<div class="page-body">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header pb-0 card-no-border">
                <h4>Basic About</h4>
                <a href="{{ url('createbasicabout') }}" class="btn btn-primary my-4">Create</a>
            </div>
            <div class="card-body">
                <div class="dt-ext table-responsive custom-scrollbar">
                    <table class="display" id="export-button">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Details</th>
                                <th>Sub Details</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($basicabouts as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->designation }}</td>
                                    <td>{{ $item->details }}</td>
                                    <td>{{ $item->subdetails }}</td>

                                    <td>
                                        <ul class="action">
                                            <li class="edit"> <a href="{{ url('basicabout/' . $item->id . '/edit') }}"><i
                                                        class="icon-pencil-alt"></i></a>
                                            </li>
                                            <li class="delete"><a href="{{ url('basicabout/' . $item->id . '/delete') }}"><i
                                                        class="icon-trash"
                                                        onclick="return confirm('Are You Sure?')"></i></a></li>
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Details</th>
                                <th>Sub Details</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

    </div>
        <!-- Container-fluid Ends-->
</div>
    @include('layout.adminfooter')
