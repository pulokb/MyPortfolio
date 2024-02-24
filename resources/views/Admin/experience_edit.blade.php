@include('layout.adminsidebar')

<div class="page-body">
    <div class="col-xl-6">
        <div class="card height-equal">
            <div class="card-header pb-0">
                <h3>Experience</h3>
                <p class="f-m-light mt-1"></p>
            </div>
            <a href="{{ url('experience') }}" class="btn btn-primary my-4">Back</a>
            @if (session('status'))
                <div class="alert alert-success"> {{ session('status') }}</div>
            @endif
            <form action="{{ url('experience/' . $experiences->id . '/edit') }}" method="POST">
                {{ $experiences }}
                @csrf
                @method('PUT')
                <form class="form theme-form">
                    <div class="card-body custom-input">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3 row">
                                    <label class="col-sm-3">Start date</label>
                                    <div class="col-sm-9">
                                        <input class="form-control digits" type="date" id="start_date" name="start_date"
                                            value= "{{ $experiences->start_date }}" value="2018-01-01">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3">Ends On</label>
                                    <div class="col-sm-9">
                                        <input class="form-control digits" type="date" id="ends_on" name="ends_on"
                                            value= "{{ $experiences->ends_on }}" value="2018-01-01">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3">Company</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" id="company" name="company"
                                            value= "{{ $experiences->company }}"
                                            placeholder="Enter Company name you Works on">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3">Title</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" id="title" name="title"
                                            value= "{{ $experiences->title }}" placeholder="Type Your Designation">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3">Details</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" id="details" name="details"
                                            value= "{{ $experiences->details }}"
                                            placeholder="Type Details About your Experience">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3">Image</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" id="image" name="image"
                                            value= "{{ $experiences->image }}"
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
