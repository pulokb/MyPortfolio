@include('layout.adminsidebar')

<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 ps-0">
                    <h3>User Cards</h3>
                </div>
                <div class="col-sm-6 pe-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html">
                                <svg class="stroke-icon">
                                    <use href="dunzo/svg/icon-sprite.svg#stroke-home"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Users</li>
                        <li class="breadcrumb-item active">User Cards</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 col-sm-6 col-xxl-3 col-ed-4 box-col-4">
                <div class="card social-profile">
                    <div class="card-body">
                        <div class="social-img-wrap">
                            <div class="social-img"><img src="dunzo/images/dashboard/profile.png" alt="profile">
                            </div>
                            <div class="icon-wrapper"><i class="icofont icofont-pencil-alt-5"></i></div>
                            <div class="edit-icon">
                                <svg>
                                    <use href="dunzo/svg/icon-sprite.svg#profile-check"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="social-details">
                            <h5 class="mb-1"><a href="social-app.html">Pulok Biswas</a></h5><span
                                class="f-light">pulok.skoder@gmail.com</span>
                            <ul class="card-social">
                                <li><a href="https://www.facebook.com/" target="_blank"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="https://www.instagram.com/" target="_blank"><i
                                            class="fa fa-instagram"></i></a></li>
                            </ul>
                            {{-- <ul class="social-follow">
                                <li>
                                    <h5 class="mb-0">1,908</h5><span class="f-light">Posts</span>
                                </li>
                                <li>
                                    <h5 class="mb-0">34.0k</h5><span class="f-light">Followers</span>
                                </li>
                                <li>
                                    <h5 class="mb-0">897</h5><span class="f-light">Following</span>
                                </li>
                            </ul> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>

@include('layout.adminfooter')
