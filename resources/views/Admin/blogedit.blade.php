@include('layout.adminsidebar')

<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 ps-0">
                    <h3>Blog Create</h3>
                </div>
                <div class="col-sm-6 pe-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html">
                                <svg class="stroke-icon">
                                    <use href="dunzo/svg/icon-sprite.svg#stroke-home"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Apps</li>
                        <li class="breadcrumb-item active">Blog Create</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ url('adminblog') }}" class="btn btn-primary my-4">Back</a>
                        @if (session('status'))
                            <div class="alert alert-success"> {{ session('status') }}</div>
                        @endif
                        <form action="{{ url('adminblog/' . $blogs->id . '/edit') }}" method="POST">
                            {{ $blogs }}
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label>Date</label>
                                        <input class="datepicker-here form-control" type="date" id="date"
                                            name="date" value= "{{ $blogs->date }}" data-language="en">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Blog Title</label>
                                        <input class="form-control" type="text" id="title" name="title"
                                            value= "{{ $blogs->title }}" placeholder="Blog name *">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Blog Image</label>
                                        <input class="form-control" type="file" id="image" name="image"
                                            value= "{{ $blogs->image }}" placeholder="Blog Image">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Enter some Details</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea4" name="details" value= "{{ $blogs->details }}"
                                            rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="text-end">
                                        <button class="btn btn-success me-3" type="submit">Add</button>
                                        <button class="btn btn-danger" type="button">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
@include('layout.adminfooter')
