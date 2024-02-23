@include('layout.adminsidebar')

<div class="page-body">

    <div class="card">
        <div class="card-header pb-0 card-no-border">
            <h4>Countdown</h4>
            <a href="{{ url('createcountdown') }}" class="btn btn-primary my-4">Create</a>
        </div>
        <div class="card-body">
            <div class="dt-ext table-responsive custom-scrollbar">
                <table class="display" id="export-button">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Experience</th>
                            <th>Projects</th>
                            <th>Clients</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($countdowns as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->experience }}</td>
                                <td>{{ $item->projects }}</td>
                                <td>{{ $item->clients }}</td>

                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="{{ url('countdown/' . $item->id . '/edit') }}"><i
                                                    class="icon-pencil-alt"></i></a>
                                        </li>
                                        <li class="delete"><a href="{{ url('countdown/' . $item->id . '/delete') }}"><i
                                                    class="icon-trash"
                                                    onclick="return confirm('Are You Sure?')"></i></a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Experience</th>
                            <th>Projects</th>
                            <th>Clients</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@include('layout.adminfooter')
