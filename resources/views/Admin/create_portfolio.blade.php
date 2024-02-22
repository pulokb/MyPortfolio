@include('layout.adminsidebar')

<div class="page-body">
    <div class="col-xl-6">
        <div class="card height-equal">
            <div class="card-header pb-0">
                <h3>Recent</h3>
                <p class="f-m-light mt-1"></p>
            </div>
            <form class="form theme-form">
                <div class="card-body custom-input">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-sm-3">Image</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="file" placeholder="project Image">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3">Title</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" placeholder="Type your Title">
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
    <div class="col-xl-6">
        <div class="card height-equal">
            <div class="card-header pb-0">
                <h3>Clients Info</h3>
                <p class="f-m-light mt-1"></p>
            </div>
            <form class="form theme-form">
                <div class="card-body custom-input">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-sm-3">Name</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" placeholder="Type Client Name">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3">Image</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="file" placeholder="Client Image">
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
    <div class="col-xl-6">
        <div class="card height-equal">
            <div class="card-header pb-0">
                <h3>Testimonial Details</h3>
                <p class="f-m-light mt-1"></p>
            </div>
            <form class="form theme-form">
                <div class="card-body custom-input">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-sm-3">Name</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" placeholder="Clinet Name">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3">Image</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="file" placeholder="Client Image">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3">Details</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" placeholder="Details Testimonial">
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
