@include('layout.adminsidebar')

<div class="page-body">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header pb-0 card-no-border">
                <h4>Activity</h4>
            </div>
            <div class="card-body">
                <div class="dt-ext table-responsive custom-scrollbar">
                    <table class="display" id="export-button">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Description</th>
                                <th>Subject</th>
                                <th>Subject ID</th>
                                <th>Causer</th>
                                <th>Causer ID</th>
                                <th>Time</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Login in the System</td>
                                    <td>Login</td>
                                    <td>4</td>
                                    <td>Pulok Biswas</td>
                                    <td>2</td>
                                    <td>24/2/2024 09:00 PM</td>

                                    <td>
                                        <ul class="action">
                                            <li class="edit"> <a
                                                    href="#"><i
                                                        class="icon-pencil-alt"></i></a>
                                            </li>
                                            <li class="delete"><a
                                                    href="#"><i
                                                        class="icon-trash"
                                                        onclick="return confirm('Are You Sure?')"></i></a></li>
                                        </ul>
                                    </td>
                                </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Description</th>
                                <th>Subject</th>
                                <th>Subject ID</th>
                                <th>Causer</th>
                                <th>Causer ID</th>
                                <th>Time</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
    @include('layout.adminfooter')
