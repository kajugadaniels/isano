<div class="page-header row">
    <div class="header-logo-wrapper col-auto">
        <div class="logo-wrapper">
            <a href="{{ route('admin.dashboard') }}">
                <img class="img-fluid for-light" src="{{ asset('images/logo/logo.png') }}" alt="" />
                <img class="img-fluid for-dark" src="{{ asset('images/logo/logo_light.png') }}" alt="" />
            </a>
        </div>
    </div>
    <div class="col-4 col-xl-4 page-title">
        <h4 class="f-w-700">Dashboard</h4>
        <nav>
            <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"> <i data-feather="home"> </i></a></li>
                <li class="breadcrumb-item f-w-400">Dashboard</li>
            </ol>
        </nav>
    </div>
    <div class="header-wrapper col m-0">
        <div class="row">
            <div class="header-logo-wrapper col-auto p-0">
                <div class="logo-wrapper">
                    <a href="{{ route('admin.dashboard') }}">
                        <img class="img-fluid" src="{{ asset('images/logo/logo.png') }}" alt="">
                    </a>
                </div>
                <div class="toggle-sidebar">
                    <svg class="stroke-icon sidebar-toggle status_toggle middle">
                        <use href="{{ asset('svg/icon-sprite.svg#toggle-icon') }}"></use>
                    </svg>
                </div>
            </div>
            <div class="nav-right col-xxl-8 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
                <ul class="nav-menus">
                    <li class="cart-nav onhover-dropdown">

                    </li>
                    <li class="profile-nav onhover-dropdown px-0 py-0">
                        <div class="d-flex profile-media align-items-center"><img class="img-30"
                                src="{{ asset('images/dashboard/profile.png') }}" alt="">
                            <div class="flex-grow-1"><span>Alen Miller</span>
                                <p class="mb-0 font-outfit">UI Designer<i class="fa fa-angle-down"></i></p>
                            </div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div">
                            <li><a href="#"><i data-feather="user"></i><span>Account </span></a></li>
                            <li><a href="{{ route('logout') }}"><i data-feather="log-out"> </i><span>Log out</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
