@include('layout.adminsidebar')

<div class="page-body">
    <div class="col-xl-6">
        <div class="card height-equal">
            <div class="card-header pb-0">
                <h3>Clients Info</h3>
                <p class="f-m-light mt-1"></p>
            </div>
            <a href="{{ url('client') }}" class="btn btn-primary my-4">Back</a>
            @if (session('status'))
                <div class="alert alert-success"> {{ session('status') }}</div>
            @endif
            <form action="{{ url('client/' . $clients->id . '/edit') }}" method="POST">
                {{ $clients }}
                @csrf
                @method('PUT')
                <div class="card-body custom-input">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-sm-3">Name</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" id="name" name="name"
                                        value= "{{ $clients->name }}" placeholder="Type Client Name">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3">Image</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="file" id="image" name="image"
                                        value= "{{ $clients->image }}" placeholder="Client Image">
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
