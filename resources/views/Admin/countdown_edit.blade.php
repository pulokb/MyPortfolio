@include('layout.adminsidebar')

<div class="page-body">

    <div class="col-xl-6">
        <div class="card height-equal">
            <div class="card-header pb-0">
                <h3>Countdown</h3>
                <p class="f-m-light mt-1"></p>
            </div>
            <a href="{{ url('countdown') }}" class="btn btn-primary my-4">Back</a>
            @if (session('status'))
                <div class="alert alert-success"> {{ session('status') }}</div>
            @endif
            <form action="{{ url('countdown/' . $countdowns->id . '/edit') }}" method="POST">
                {{ $countdowns }}
                @csrf
                @method('PUT')
                <form class="form theme-form">
                    <div class="card-body custom-input">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3 row">
                                    <label class="col-sm-3">Experience</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="number" id="experience" name="experience"
                                            value= "{{ $countdowns->experience }}"
                                            placeholder="Enter years of your Experience">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3">Projects</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="number" id="projects" name="projects"
                                            value= "{{ $countdowns->projects }}"
                                            placeholder="Type Number of your Projects">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3">Clients</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="number" id="clients" name="clients"
                                            value= "{{ $countdowns->clients }}"
                                            placeholder="Type number of your Clients">
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
