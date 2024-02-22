@include('layout.adminsidebar')

<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 ps-0">
                    <h3>User Profile</h3>
                </div>
                <div class="col-sm-6 pe-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html">
                                <svg class="stroke-icon">
                                    <use href="dunzo/svg/icon-sprite.svg#stroke-home"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Users</li>
                        <li class="breadcrumb-item active">User Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="user-profile">
            <div class="row">
                <!-- user profile first-style start-->
                <div class="col-sm-12">
                    <div class="card hovercard text-center">
                        <div class="cardheader"></div>
                        <div class="user-image">
                            <div class="avatar"><img alt="" src="dunzo/images/dashboard/profile.png"></div>
                            <div class="icon-wrapper"><i class="icofont icofont-pencil-alt-5"></i></div>
                        </div>
                        <div class="info">
                            <div class="row">
                                <div class="col-sm-6 col-lg-4 order-sm-1 order-xl-0">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="ttl-info text-start">
                                                <h5><i class="fa fa-envelope"></i>   Email</h5>
                                                <span>pulok.skoder@gmail.com</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="ttl-info text-start">
                                                <h5><i class="fa fa-calendar"></i>   BOD</h5><span>24 December
                                                    1998</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-4 order-sm-0 order-xl-1">
                                    <div class="user-designation">
                                        <div class="title"><a target="_blank" href="#">Pulok Biswas</a></div>
                                        <div class="desc">Admin</div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4 order-sm-2 order-xl-2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="ttl-info text-start">
                                                <h5><i class="fa fa-phone"></i>   Contact</h5><span>BD
                                                    +8801793651750</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="ttl-info text-start">
                                                <h5><i class="fa fa-location-arrow"></i>   Location</h5>
                                                <span>Dhaka, Bangladesh</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="social-media">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="https://www.facebook.com/" target="_blank"><i
                                                class="fa fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="https://twitter.com/" target="_blank"><i
                                                class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="https://www.instagram.com/" target="_blank"><i
                                                class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>

                @include('layout.adminfooter')
