@include('layout.adminsidebar')

<div class="page-body">
    <div class="col-xl-6">
        <div class="card height-equal">
            <div class="card-header pb-0">
                <h3>Set Languages</h3>
                <p class="f-m-light mt-1"></p>
            </div>
            <form class="form theme-form">
                <div class="card-body custom-input">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-sm-3">Set Language</label>
                                <div class="col-sm-9">
                                    <select name="language" id="language">
                                        <option value="english">English</option>
                                        <option value="bangla">Bangla</option>
                                        <option value="hindi">Hindi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3">Status</label>
                                <div class="col-sm-9">
                                    <select name="status" id="status">
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <div class="col-sm-9 offset-sm-3">
                        <button class="btn btn-primary me-3" type="submit">Submit</button>
                        <input class="btn btn-light" type="reset" value="Cancel">
                    </div>
                </div>
            </form>
        </div>
    </div>
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
                                <th>Language</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>English</td>
                                <td>Active</td>

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
                                <th>Language</th>
                                <th>Status</th>
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
