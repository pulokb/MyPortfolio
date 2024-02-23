@include('layout.adminsidebar')
<div class="page-body">

    <div class="card">
        <div class="card-header pb-0 card-no-border">
            <h4>Experience</h4>
            <a href="{{ url('createexperience') }}" class="btn btn-primary my-4">Create</a>
        </div>
        <div class="card-body">
            <div class="dt-ext table-responsive custom-scrollbar">
                <table class="display" id="export-button">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Start date</th>
                            <th>Ends On</th>
                            <th>Company</th>
                            <th>Title</th>
                            <th>Details</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($experiences as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->start_date }}</td>
                                <td>{{ $item->ends_on }}</td>
                                <td>{{ $item->company }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->details }}</td>

                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="{{ url('experience/' . $item->id . '/edit') }}"><i
                                                    class="icon-pencil-alt"></i></a>
                                        </li>
                                        <li class="delete"><a href="{{ url('experience/' . $item->id . '/delete') }}"><i
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
                            <th>Start date</th>
                            <th>Ends On</th>
                            <th>Company</th>
                            <th>Title</th>
                            <th>Details</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@include('layout.adminfooter')
