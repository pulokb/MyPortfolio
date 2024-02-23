@include('layout.adminsidebar')

<div class="page-body">

    <div class="col-xl-6">
        <div class="card height-equal">
            <div class="card-header pb-0">
                <h3>About Info</h3>
                <p class="f-m-light mt-1"></p>
            </div>
            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif
            <form class="form theme-form" method="post" action="{{ url('aboutinfo') }}">
                @csrf
                <div class="card-body custom-input">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-sm-3">Age</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="Number" id="age" name="age"
                                        placeholder="Type your Age">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3">Born In</label>
                                <div class="col-sm-9">
                                    <input class="form-control digits" type="date" id="born" name="born"
                                        value="2018-01-01">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3">Email</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="email" id="email" name="email"
                                        placeholder="Enter Email">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3">Telephone</label>
                                <div class="col-sm-9">
                                    <input class="form-control m-input digits" type="tel" id="phone"
                                        name="phone" value="+8801793651750">
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
