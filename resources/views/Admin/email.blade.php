@include('layout.adminsidebar')

<div class="page-body">
    <div class="col-xl-6">
        <div class="card height-equal">
            <div class="card-header pb-0">
                <h3>Email Setting</h3>
                <p class="f-m-light mt-1"></p>
            </div>
            <form class="form theme-form">
                <div class="card-body custom-input">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-sm-3">Mail Mailder</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text"
                                        placeholder="Mail Mailder">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3">Mail Host</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text"
                                        placeholder="Mail Host">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3">Mail Port</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text"
                                        placeholder="Mail Port">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3">Mail UserName</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text"
                                        placeholder="Mail UserName">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3">Mail Password</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text"
                                        placeholder="Mail Password">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3">Mail Encryption</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text"
                                        placeholder="Mail Encryption">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3">Mail From Address</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text"
                                        placeholder="Mail From Address">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3">Mail From Name</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text"
                                        placeholder="Mail From Name">
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
                <h3>Send Mail</h3>
                <p class="f-m-light mt-1"></p>
            </div>
            <form class="form theme-form">
                <div class="card-body custom-input">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-sm-3">To</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text"
                                    placeholder="Mail To">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3">Subject</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text"
                                    placeholder="Subject">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3">Body</label>
                                <div class="col-sm-9">
                                    <textarea id="body" name="body"> Body </textarea>
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
                <h3>Send Mail Test</h3>
                <p class="f-m-light mt-1"></p>
            </div>
            <form class="form theme-form">
                <div class="card-body custom-input">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-sm-3">Enter Email Address</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="email"
                                    placeholder="Email Address">
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
