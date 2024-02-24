@include('layout.adminsidebar')

<div class="page-body">
    <div class="card-footer text-end">
        <div class="col-sm-9 offset-sm-3">
            <button class="btn btn-primary me-4" type="submit">Create Backup</button>
            <input class="btn btn-light me-4" type="submit" value="Download Backup">
        </div>
    </div>
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header pb-0 card-no-border">
                <h4>Backup List</h4>
            </div>
            <div class="card-body">
                <div class="dt-ext table-responsive custom-scrollbar">
                    <table class="display" id="export-button">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>File Name</th>
                                <th>Size</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Backup File</td>
                                <td>100 MB</td>
                                <td>24/2/2024 09:00 PM</td>

                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                        </li>
                                        <li class="delete"><a href="#"><i class="icon-trash"
                                                    onclick="return confirm('Are You Sure?')"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>File Name</th>
                                <th>Size</th>
                                <th>Created At</th>
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
