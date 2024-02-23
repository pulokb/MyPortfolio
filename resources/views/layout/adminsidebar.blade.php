<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="Pulok admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
  <meta name="keywords"
    content="admin template, Pulok admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="pixelstrap">
  <link rel="icon" href="dunzo/images/favicon.png" type="image/x-icon">
  <link rel="shortcut icon" href="dunzo/images/favicon.png" type="image/x-icon">
  <title>Admin</title>
  <!-- Google font-->
  <link href="https://fonts.googleapis.com/css?family=Outfit:400,400i,500,500i,700,700i&amp;display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
    rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="dunzo/css/font-awesome.css">
  <!-- ico-font-->
  <link rel="stylesheet" type="text/css" href="dunzo/css/vendors/icofont.css">
  <!-- Themify icon-->
  <link rel="stylesheet" type="text/css" href="dunzo/css/vendors/themify.css">
  <!-- Flag icon-->
  <link rel="stylesheet" type="text/css" href="dunzo/css/vendors/flag-icon.css">
  <!-- Feather icon-->
  <link rel="stylesheet" type="text/css" href="dunzo/css/vendors/feather-icon.css">
  <!-- Plugins css start-->
  <link rel="stylesheet" type="text/css" href="dunzo/css/vendors/slick.css">
  <link rel="stylesheet" type="text/css" href="dunzo/css/vendors/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="dunzo/css/vendors/scrollbar.css">
  <link rel="stylesheet" type="text/css" href="dunzo/css/vendors/animate.css">
  <link rel="stylesheet" type="text/css" href="dunzo/css/vendors/datatables.css">
  <link rel="stylesheet" type="text/css" href="dunzo/css/vendors/owlcarousel.css">
  <!-- Plugins css Ends-->
  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="dunzo/css/vendors/bootstrap.css">
  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="dunzo/css/style.css">
  <link id="color" rel="stylesheet" href="dunzo/css/color-1.css" media="screen">
  <!-- Responsive css-->
  <link rel="stylesheet" type="text/css" href="dunzo/css/responsive.css">
</head>

<body>
  {{-- <!-- loader starts-->
  <div class="loader-wrapper">
    <div class="theme-loader">
      <div class="loader-p"></div>
    </div>
  </div>
  <!-- loader ends--> --}}
  <!-- tap on top starts-->
  <div class="tap-top"><i data-feather="chevrons-up"></i></div>
  <!-- tap on tap ends-->
  <!-- page-wrapper Start-->
  <div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <div class="page-header">
      <div class="header-wrapper row m-0">
        <div class="header-logo-wrapper col-auto p-0">
          <div class="logo-wrapper"><a href="#"><img class="img-fluid for-light" src="dunzo/images/logo/logo-1.png"
                alt=""><img class="img-fluid for-dark" src="dunzo/images/logo/logo.png" alt=""></a></div>
          <div class="toggle-sidebar">
            <svg class="sidebar-toggle">
              <use href="dunzo/svg/icon-sprite.svg#stroke-animation"></use>
            </svg>
          </div>
        </div>
        <div class="nav-right col-xxl-7 col-xl-6 col-auto box-col-6 pull-right right-header p-0 ms-auto">
          <ul class="nav-menus">
            <li class="serchinput">
              <div class="serchbox">
                <svg>
                  <use href="dunzo/svg/icon-sprite.svg#fill-search"></use>
                </svg>
              </div>
              <div class="form-group search-form">
                <input type="text" placeholder="Search here...">
              </div>
            </li>
            <li>
              <div class="form-group w-100">
                <div class="Typeahead Typeahead--twitterUsers">
                  <div class="u-posRelative d-flex">
                    <svg class="search-bg svg-color me-2">
                      <use href="dunzo/svg/icon-sprite.svg#fill-search"></use>
                    </svg>
                    <input class="demo-input py-0 Typeahead-input form-control-plaintext w-100" type="text"
                      placeholder="Search Pulok .." name="q" title="">
                  </div>
                </div>
              </div>
            </li>
            <li class="onhover-dropdown">
              <div class="notification-box">
                <svg>
                  <use href="dunzo/svg/icon-sprite.svg#fill-Bell"></use>
                </svg>
              </div>
              <div class="onhover-show-div notification-dropdown">
                <h6 class="f-18 mb-0 dropdown-title">Notitications </h6>
              </div>
            </li>
            <li class="onhover-dropdown">
              <svg>
                <use href="dunzo/svg/icon-sprite.svg#fill-star"></use>
              </svg>
              <div class="onhover-show-div bookmark-flip">
                <div class="flip-card">
                  <div class="flip-card-inner">
                    <div class="front">
                      <h6 class="f-18 mb-0 dropdown-title">Bookmark</h6>
                    </div>
                    <div class="back">
                      <ul>
                        <li>
                          <div class="bookmark-dropdown flip-back-content">
                            <input type="text" placeholder="search...">
                          </div>
                        </li>
                        <li><a class="f-w-700 d-block flip-back" id="flip-back" href="javascript:void(0)">Back</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="cart-nav onhover-dropdown">
              <div class="cart-box">
                <svg>
                  <use href="dunzo/svg/icon-sprite.svg#fill-Buy"></use>
                </svg>
              </div>
              <div class="cart-dropdown onhover-show-div">
                <h6 class="f-18 mb-0 dropdown-title">Cart</h6>

              </div>
            </li>
            <li class="onhover-dropdown">
              <div class="message">
                <svg>
                  <use href="dunzo/svg/icon-sprite.svg#fill-message"></use>
                </svg><span class="rounded-pill badge-secondary"> </span>
              </div>
              <div class="onhover-show-div message-dropdown">
                <h6 class="f-18 mb-0 dropdown-title">Message </h6>

              </div>
            </li>
            <li>
              <div class="mode">
                <svg>
                  <use href="dunzo/svg/icon-sprite.svg#fill-dark"></use>
                </svg>
              </div>
            </li>
            <li class="profile-nav onhover-dropdown p-0">
              <div class="d-flex align-items-center profile-media"><img class="b-r-10 img-40"
                  src="dunzo/images/dashboard/profile.png" alt="">
                <div class="flex-grow-1"><span>Pulok Biswas</span>
                  <p class="mb-0"> Admin Panel<i class="middle fa fa-angle-down"></i></p>
                </div>
              </div>
              <ul class="profile-dropdown onhover-show-div">
                <li><a href="{{ route('profile') }}"><i data-feather="user"></i><span>Account </span></a></li>
                <li><a href="{{ route('editprofile') }}"><i data-feather="settings"></i><span>Settings</span></a></li>
                <li><a href="{{ route('logout') }}"><i data-feather="log-in"> </i><span>Log Out</span></a></li>
              </ul>
            </li>
          </ul>
        </div>
        <script class="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">name</div>
            </div>
            </div>
          </script>
        <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">hello</div></script>
      </div>
    </div>
    <!-- Page Header Ends-->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
      <!-- Page Sidebar Start-->
      <div class="sidebar-wrapper" data-layout="fill-svg">
        <div>
          <div class="logo-wrapper"><a href="{{ route('adminindex') }}"><img class="img-fluid" src="dunzo/images/logo/logo.png" alt=""></a>
            <div class="toggle-sidebar">
              <svg class="sidebar-toggle">
                <use href="dunzo/svg/icon-sprite.svg#toggle-icon"></use>
              </svg>
            </div>
          </div>
          <div class="logo-icon-wrapper"><a href="{{ route('adminindex') }}"><img class="img-fluid" src="dunzo/images/logo/logo-icon.png"
                alt=""></a></div>
          <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
              <ul class="sidebar-links" id="simple-bar">
                <li class="back-btn"><a href="{{ route('adminindex') }}"><img class="img-fluid" src="dunzo/images/logo/logo-icon.png"
                      alt=""></a>
                  <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                      aria-hidden="true"></i></div>
                </li>
                <li class="pin-title sidebar-main-title">
                  <div>
                    <h6>Pinned</h6>
                  </div>
                </li>
                <li class="sidebar-main-title">
                  <div>
                    <h6 class="lan-1">General</h6>
                  </div>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav"
                  href="{{ route('adminindex') }}">
                  <svg class="stroke-icon">
                    <use href="dunzo/svg/icon-sprite.svg#stroke-home"></use>
                  </svg>
                  <svg class="fill-icon">
                    <use href="dunzo/svg/icon-sprite.svg#fill-home"></use>
                  </svg><span>Dashboard</span></a>
                </li>
                <li class="sidebar-main-title">
                  <div>
                    <h6 class="lan-8">Applications</h6>
                  </div>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"> </i><a class="sidebar-link sidebar-title"
                    href="#">
                    <svg class="stroke-icon">
                      <use href="dunzo/svg/icon-sprite.svg#stroke-project"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="dunzo/svg/icon-sprite.svg#fill-project"></use>
                    </svg><span>Home </span></a>
                  <ul class="sidebar-submenu">
                    <li><a href="{{ route('homeinfo') }}">Home Info</a></li>
                    <li><a href="{{ route('home') }}">Home Title</a></li>
                    {{-- <li><a href="{{ route('createhome') }}">Create</a></li> --}}
                  </ul>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"> </i><a class="sidebar-link sidebar-title"
                    href="#">
                    <svg class="stroke-icon">
                      <use href="dunzo/svg/icon-sprite.svg#stroke-project"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="dunzo/svg/icon-sprite.svg#fill-project"></use>
                    </svg><span>About </span></a>
                  <ul class="sidebar-submenu">
                    <li><a href="{{ route('basicabout') }}">Basic About</a></li>
                    <li><a href="{{ route('aboutinfo') }}">About Info</a></li>
                    <li><a href="{{ route('countdown') }}">Countdown</a></li>
                    <li><a href="{{ route('experience') }}">Experience</a></li>
                    {{-- <li><a href="{{ route('createabout') }}">Create</a></li> --}}
                  </ul>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"> </i><a class="sidebar-link sidebar-title"
                    href="#">
                    <svg class="stroke-icon">
                      <use href="dunzo/svg/icon-sprite.svg#stroke-project"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="dunzo/svg/icon-sprite.svg#fill-project"></use>
                    </svg><span>Services</span></a>
                  <ul class="sidebar-submenu">
                    <li><a href="{{ route('adminservice') }}">Service List</a></li>
                    {{-- <li><a href="{{ route('createservice') }}">Create</a></li> --}}
                  </ul>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"> </i><a class="sidebar-link sidebar-title"
                    href="#">
                    <svg class="stroke-icon">
                      <use href="dunzo/svg/icon-sprite.svg#stroke-project"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="dunzo/svg/icon-sprite.svg#fill-project"></use>
                    </svg><span>Portfolio </span></a>
                  <ul class="sidebar-submenu">
                    <li><a href="{{ route('recent') }}">Recent</a></li>
                    <li><a href="{{ route('testimonial') }}">Testimonial</a></li>
                    <li><a href="{{ route('adminportfolio') }}">All Clients</a></li>
                    {{-- <li><a href="{{ route('createportfolio') }}">Create</a></li> --}}
                  </ul>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"> </i><a class="sidebar-link sidebar-title"
                    href="#">
                    <svg class="stroke-icon">
                      <use href="dunzo/svg/icon-sprite.svg#stroke-project"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="dunzo/svg/icon-sprite.svg#fill-project"></use>
                    </svg><span>Blog </span></a>
                  <ul class="sidebar-submenu">
                    <li><a href="{{ route('adminblog') }}">View Blogs</a></li>
                    {{-- <li><a href="{{ route('createblog') }}">Create Blog</a></li> --}}
                  </ul>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title"
                    href="#">
                    <svg class="stroke-icon">
                      <use href="dunzo/svg/icon-sprite.svg#stroke-file"></use>
                    </svg>
                    <svg class="fill-icon">
                    <use href="dunzo/svg/icon-sprite.svg#fill-file"></use>
                    </svg><span>Contact</span></a>
                      <ul class="sidebar-submenu">
                        <li><a href="{{ route('admincontact') }}">View Contact</a></li>
                        {{-- <li><a href="{{ route('createcontact') }}">Create Contact</a></li> --}}
                      </ul>
                </li>
                <li class="sidebar-main-title">
                  <div>
                    <h6>System Applications</h6>
                  </div>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                  <svg class="stroke-icon">
                    <use href="dunzo/svg/icon-sprite.svg#stroke-user"></use>
                  </svg>
                  <svg class="fill-icon">
                    <use href="dunzo/svg/icon-sprite.svg#fill-user"></use>
                  </svg><span>Users</span></a>
                <ul class="sidebar-submenu">
                  <li><a href="{{ route('profile') }}">Profile</a></li>
                  <li><a href="{{ route('editprofile') }}">Profile Edit</a></li>
                  <li><a href="{{ route('userprofile') }}">Users Cards</a></li>
                </ul>
              </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                    <svg class="stroke-icon">
                      <use href="dunzo/svg/icon-sprite.svg#stroke-form"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="dunzo/svg/icon-sprite.svg#fill-form"> </use>
                    </svg><span>settings</span></a>
                  <ul class="sidebar-submenu">
                    <li><a class="submenu-title" href="{{ route('general') }}">General
                        <h5 class="sub-arrow"><i class="fa fa-angle-right"></i></h5>
                      </a>
                    </li>
                    <li><a class="submenu-title" href="{{ route('email') }}">Email
                        <h5 class="sub-arrow"><i class="fa fa-angle-right"></i></h5>
                      </a>
                    </li>
                    <li><a class="submenu-title" href="{{ route('languages') }}">Languages
                        <h5 class="sub-arrow"><i class="fa fa-angle-right"></i></h5>
                      </a>
                    </li>
                    <li><a class="submenu-title" href="{{ route('backup') }}">Backup
                        <h5 class="sub-arrow"><i class="fa fa-angle-right"></i></h5>
                      </a>
                    </li>
                    <li><a class="submenu-title" href="{{ route('roles') }}">Roles
                        <h5 class="sub-arrow"><i class="fa fa-angle-right"></i></h5>
                      </a>
                    </li>
                    <li><a class="submenu-title" href="{{ route('administration') }}">Administration
                        <h5 class="sub-arrow"><i class="fa fa-angle-right"></i></h5>
                      </a>
                    </li>
                    <li><a class="submenu-title" href="{{ route('mantenance') }}">Mantenance Mood
                        <h5 class="sub-arrow"><i class="fa fa-angle-right"></i></h5>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav"
                  href="{{ route('supportticket') }}">
                  <svg class="stroke-icon">
                    <use href="dunzo/svg/icon-sprite.svg#stroke-support-tickets"></use>
                  </svg>
                  <svg class="fill-icon">
                    <use href="dunzo/svg/icon-sprite.svg#fill-support-tickets"></use>
                  </svg><span>Support Ticket</span></a>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav"
                  href="{{ route('logout') }}">
                  <svg class="stroke-icon">
                    <use href="dunzo/svg/icon-sprite.svg#stroke-support-tickets"></use>
                  </svg>
                  <svg class="fill-icon">
                    <use href="dunzo/svg/icon-sprite.svg#fill-support-tickets"></use>
                  </svg><span>Logout</span></a>
                </li>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
          </nav>
        </div>
      </div>
      <!-- Page Sidebar Ends-->
