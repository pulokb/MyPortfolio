@include('layout.adminsidebar')

<div class="page-body">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header pb-0 card-no-border">
                <h4>Basic About</h4>
            </div>
            <div class="card-body">
                <div class="dt-ext table-responsive custom-scrollbar">
                    <table class="display" id="export-button">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Details</th>
                                <th>Sub Details</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Donna Snider</td>
                                <td>Customer Support</td>
                                <td>Customer Support</td>
                                <td>Customer Support</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="{{ url('adminabout/'.$item->id.'/edit') }}"><i class="icon-pencil-alt"></i></a>
                                        </li>
                                        <li class="delete"><a href="{{ url('adminabout/'.$item->id.'/delete') }}"><i class="icon-trash" onclick="return confirm('Are You Sure?')"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
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

        <div class="card">
            <div class="card-header pb-0 card-no-border">
                <h4>About Info</h4>
            </div>
            <div class="card-body">
                <div class="dt-ext table-responsive custom-scrollbar">
                    <table class="display" id="export-button">
                        <thead>
                            <tr>
                                <th>Age</th>
                                <th>Born In</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Donna Snider</td>
                                <td>Customer Support</td>
                                <td>Customer Support</td>
                                <td>Customer Support</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="{{ url('adminabout/'.$item->id.'/edit') }}"><i class="icon-pencil-alt"></i></a>
                                        </li>
                                        <li class="delete"><a href="{{ url('adminabout/'.$item->id.'/delete') }}"><i class="icon-trash" onclick="return confirm('Are You Sure?')"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
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

        <div class="card">
            <div class="card-header pb-0 card-no-border">
                <h4>Countdown</h4>
            </div>
            <div class="card-body">
                <div class="dt-ext table-responsive custom-scrollbar">
                    <table class="display" id="export-button">
                        <thead>
                            <tr>
                                <th>Experience</th>
                                <th>Projects</th>
                                <th>Clients</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Donna Snider</td>
                                <td>Customer Support</td>
                                <td>Customer Support</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="{{ url('adminabout/'.$item->id.'/edit') }}"><i class="icon-pencil-alt"></i></a>
                                        </li>
                                        <li class="delete"><a href="{{ url('adminabout/'.$item->id.'/delete') }}"><i class="icon-trash" onclick="return confirm('Are You Sure?')"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
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

        <div class="card">
            <div class="card-header pb-0 card-no-border">
                <h4>Experience</h4>
            </div>
            <div class="card-body">
                <div class="dt-ext table-responsive custom-scrollbar">
                    <table class="display" id="export-button">
                        <thead>
                            <tr>
                                <th>Start date</th>
                                <th>Ends On</th>
                                <th>Company</th>
                                <th>Title</th>
                                <th>Details</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Donna Snider</td>
                                <td>Customer Support</td>
                                <td>Customer Support</td>
                                <td>Customer Support</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="{{ url('adminabout/'.$item->id.'/edit') }}"><i class="icon-pencil-alt"></i></a>
                                        </li>
                                        <li class="delete"><a href="{{ url('adminabout/'.$item->id.'/delete') }}"><i class="icon-trash" onclick="return confirm('Are You Sure?')"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Date</th>
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


        <div class="card">
            <div class="card-header pb-0 card-no-border">
                <h4>Experience</h4>
            </div>
            <div class="card-body">
                <div class="dt-ext table-responsive custom-scrollbar">
                    <table class="display" id="export-button">
                        <thead>
                            <tr>
                                <th>Number</th>
                                <th>Title</th>
                                <th>Details</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Donna Snider</td>
                                <td>Customer Support</td>
                                <td>Customer Support</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="{{ url('adminabout/'.$item->id.'/edit') }}"><i class="icon-pencil-alt"></i></a>
                                        </li>
                                        <li class="delete"><a href="{{ url('adminabout/'.$item->id.'/delete') }}"><i class="icon-trash" onclick="return confirm('Are You Sure?')"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Number</th>
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
        <!-- Container-fluid Ends-->
</div>
    @include('layout.adminfooter')
