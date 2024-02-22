@include('layout.adminsidebar')

<div class="page-body">
    <div class="col-xl-6">
        <div class="card height-equal">
            <div class="card-header pb-0">
                <h3>Basic About</h3>
                <p class="f-m-light mt-1"></p>
            </div>
            <form class="form theme-form">
                <div class="card-body custom-input">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-sm-3">Name</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" placeholder="Type your Name">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3">Designation</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" placeholder="Type your Designation">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3">Details</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="textarea" placeholder="Type Details">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3">Sub Details</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="textarea" placeholder="Type Sub Details">
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
                <h3>About Info</h3>
                <p class="f-m-light mt-1"></p>
            </div>
            <form class="form theme-form">
                <div class="card-body custom-input">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-sm-3">Age</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="Number" placeholder="Type your Age">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3">Born In</label>
                                <div class="col-sm-9">
                                  <input class="form-control digits" type="date" value="2018-01-01">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3">Email</label>
                                <div class="col-sm-9">
                                  <input class="form-control" type="email" placeholder="Enter Email">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3">Telephone</label>
                                <div class="col-sm-9">
                                  <input class="form-control m-input digits" type="tel" value="+8801793651750">
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
                <h3>Countdown</h3>
                <p class="f-m-light mt-1"></p>
            </div>
            <form class="form theme-form">
                <div class="card-body custom-input">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-sm-3">Experience</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="number" placeholder="Enter years of your Experience">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3">Projects</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="number" placeholder="Type Number of your Projects">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3">Clients</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="number" placeholder="Type number of your Clients">
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
                <h3>Experience</h3>
                <p class="f-m-light mt-1"></p>
            </div>
            <form class="form theme-form">
                <div class="card-body custom-input">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-sm-3">Start date</label>
                                <div class="col-sm-9">
                                  <input class="form-control digits" type="date" value="2018-01-01">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3">Ends On</label>
                                <div class="col-sm-9">
                                  <input class="form-control digits" type="date" value="2018-01-01">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3">Company</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" placeholder="Enter Company name you Works on">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3">Title</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" placeholder="Type Your Designation">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3">Details</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" placeholder="Type Details About your Experience">
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
