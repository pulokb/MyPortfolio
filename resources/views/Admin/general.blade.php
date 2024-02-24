@include('layout.adminsidebar')

<div class="page-body">
    <div class="col-xl-6">
        <div class="card height-equal">
            <div class="card-header pb-0">
                <h3>General Setting</h3>
                <p class="f-m-light mt-1"></p>
            </div>
            <form class="form theme-form">
                <div class="card-body custom-input">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-sm-3">Site Title</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text"
                                        placeholder="Type your Site Title">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3">Site Description</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text"
                                        placeholder="Type your Site Description">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3">Favicon</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="File"
                                        placeholder="Favicon">
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
                <h3>Social Media Setting</h3>
                <p class="f-m-light mt-1"></p>
            </div>
            <form class="form theme-form">
                <div class="card-body custom-input">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-sm-3">Facebook</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="url"
                                    value="https://pulok.info">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3">Linkedin</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="url"
                                    value="https://pulok.info">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3">Twitter</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="url"
                                    value="https://pulok.info">
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
                <h3>Admin Panel Setting</h3>
                <p class="f-m-light mt-1"></p>
            </div>
            <form class="form theme-form">
                <div class="card-body custom-input">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 row">
                                <div>
                                    <label class="col-sm-3">Header Color</label>
                                    <input type="color" id="head" name="head" value="#e66465" />
                                  </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3">Side Bar</label>
                                <div class="col-sm-9">
                                    <input type="color" id="body" name="body" value="#f6b73c" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3">Admin Logo</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="file"
                                        placeholder="Favicon">
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
