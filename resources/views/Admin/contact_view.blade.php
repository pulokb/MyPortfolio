@include('layout.adminsidebar')

<div class="page-body">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header pb-0 card-no-border">
                <h4>Contacts</h4>
            </div>
            <div class="card-body">
                <div class="dt-ext table-responsive custom-scrollbar">
                    <table class="display" id="export-button">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Details</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>pulok</td>
                                <td>email</td>
                                <td>edrtfgyuhijok</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                        </li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
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
