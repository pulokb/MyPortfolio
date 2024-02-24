@include('layout.adminsidebar')

<div class="page-body">
    <div class="col-xl-6">
        <div class="card height-equal">
            <div class="card-header pb-0">
                <h3>Experience</h3>
                <p class="f-m-light mt-1"></p>
            </div>
            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif
            <form class="form theme-form" method="post" action="{{ url('experience') }}">
                @csrf
                <div class="card-body custom-input">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-sm-3">Start date</label>
                                <div class="col-sm-9">
                                    <input class="form-control digits" type="date" id="start_date" name="start_date"
                                        value="2018-01-01">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3">Ends On</label>
                                <div class="col-sm-9">
                                    <input class="form-control digits" type="date" id="ends_on" name="ends_on"
                                        value="2018-01-01">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3">Company</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" id="company" name="company"
                                        placeholder="Enter Company name you Works on">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3">Title</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" id="title" name="title"
                                        placeholder="Type Your Designation">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3">Details</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" id="details" name="details"
                                        placeholder="Type Details About your Experience">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3">Image</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="file" id="image" name="image"
                                        placeholder="Image">
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
</div>

@include('layout.adminfooter')
