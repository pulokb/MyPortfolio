@include('layout.adminsidebar')

<div class="page-body">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header pb-0 card-no-border">
                <h4>Blogs</h4>
            </div>
            <div class="card-body">
                <div class="dt-ext table-responsive custom-scrollbar">
                    <table class="display" id="export-button">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Title</th>
                                <th>Image</th>
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
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                        </li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Date</th>
                                <th>Title</th>
                                <th>Image</th>
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
    @include('layout.adminfooter')
