@include('layout.adminsidebar')

<div class="page-body">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header pb-0 card-no-border">
                <a href="{{ url('createhome') }}" class="btn btn-primary my-4">Create</a>
                <h4>Home</h4>
            </div>
            <div class="card-body">
                <div class="dt-ext table-responsive custom-scrollbar">
                    <table class="display" id="export-button">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Title</th>
                                <th>Details</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($homes as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->details }}</td>

                                    <td>
                                        <ul class="action">
                                            <li class="edit"> <a href="{{ url('home/' . $item->id . '/edit') }}"><i
                                                        class="icon-pencil-alt"></i></a>
                                            </li>
                                            <li class="delete"><a href="{{ url('home/' . $item->id . '/delete') }}"><i
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
                                <th>Name</th>
                                <th>Title</th>
                                <th>Details</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
</div>
@include('layout.adminfooter')
