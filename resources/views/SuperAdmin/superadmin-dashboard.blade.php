@extends('Layout.app')
@section('content')
<!-- [ Pre-loader ] start -->
<div class="loader-bg">
    <div class="loader-bar"></div>
</div>
<!-- [ Pre-loader ] end -->
<div id="nav_patch" class="nav_patch">
    <div class="nav_patch-overlay-box"></div>
    <div class="nav_patch-container navbar-wrapper">
        <!-- [ Header ] start -->
        <nav class="navbar header-navbar nav_patch-header backcolor">
            <div class="navbar-wrapper">
                <div class="navbar-logo">
                    <a href="index-2.html">
                        <!-- <img class="img-fluid" src="assets/images/logo.png" alt="Theme-Logo" /> -->
                        <h2>lOGO</h2>
                    </a>
                    <a class="mobile-menu" id="mobile-collapse" href="#!">
                        <i class="feather icon-menu menu"></i>
                    </a>
                    <a class="mobile-options waves-effect waves-light">
                        <i class="feather icon-more-horizontal"></i>
                    </a>
                </div>
                <div class="navbar-container container-fluid">
                    <ul class="nav-right">
                        <li class="header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="feather icon-bell"></i>
                                    <span class="badge bg-c-red">5</span>
                                </div>
                                <ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    <li>
                                        <h6>Notifications</h6>
                                        <label class="label label-danger">New</label>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="img-radius" src="{{asset('/public/assets/images/Avatar/user-4.png') }}" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">John Doe</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.
                                                </p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="img-radius" src="{{asset('/public/assets/images/Avatar/user-3.png') }}" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Joseph William</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.
                                                </p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="img-radius" src="{{asset('/public/assets/images/Avatar/user-4.png') }}" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Sara Soudein</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.
                                                </p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="user-profile header-notification">

                            <div class="dropdown-primary dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="{{asset('/public/assets/images/Avatar/user-4.png') }}" class="img-radius" alt="User-Profile-Image">
                                    <span>Abhishek Jaiswar</span>
                                    <i class="feather icon-chevron-down"></i>
                                </div>
                                <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    <li>
                                        <a href="#!">
                                            <i class="feather icon-settings"></i> Settings

                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="feather icon-user"></i> Profile

                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="feather icon-mail"></i> My Messages

                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="feather icon-lock"></i> Lock Screen

                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="feather icon-log-out"></i> Logout

                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="nav_patch-main-container">
            <div class="nav_patch-wrapper">
                <!-- [ navigation menu ] start -->
                <nav class="nav_patch-navbar">
                    <div class="nav-list">
                        <div class="nav_patch-inner-navbar main-menu">
                            <div class="nav_patch-navigation-label">Section 1</div>
                            <ul class="nav_patch-item nav_patch-left-item">
                                <li class="nav_patch-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="nav_patch-micon"><i class="feather icon-sidebar"></i></span>
                                        <span class="nav_patch-mtext">Dropdown</span>
                                        <span class="nav_patch-badge label label-warning">NEW</span>
                                    </a>
                                    <ul class="nav_patch-submenu">
                                        <li class=" nav_patch-hasmenu">
                                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                <span class="nav_patch-mtext">Menu 1</span>
                                            </a>
                                            <ul class="nav_patch-submenu">
                                                <li class="">
                                                    <a href="#" class="waves-effect waves-dark">
                                                        <span class="nav_patch-mtext">Sub Menu 1</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#" class="waves-effect waves-dark">
                                                        <span class="nav_patch-mtext">Sub Menu 2</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#" class="waves-effect waves-dark">
                                                        <span class="nav_patch-mtext">Sub Menu 3</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class=" nav_patch-hasmenu">
                                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                <span class="nav_patch-mtext">Menu 2</span>
                                            </a>
                                            <ul class="nav_patch-submenu">
                                                <li class="">
                                                    <a href="#" target="_blank" class="waves-effect waves-dark">
                                                        <span class="nav_patch-mtext">Sub Menu 1</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#" target="_blank" class="waves-effect waves-dark">
                                                        <span class="nav_patch-mtext">Sub Menu 2</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#" target="_blank" class="waves-effect waves-dark">
                                                        <span class="nav_patch-mtext">Sub Menu 3</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="#" class="waves-effect waves-dark">
                                        <span class="nav_patch-micon">
                                            <i class="feather icon-menu"></i>
                                        </span>
                                        <span class="nav_patch-mtext">Direct Page</span>
                                    </a>
                                </li>
                                <li class="nav_patch-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="nav_patch-micon">
                                            <i class="feather icon-layers"></i>
                                        </span>
                                        <span class="nav_patch-mtext">Dropdown</span>
                                        <!-- <span class="nav_patch-badge label label-danger">100</span> -->
                                    </a>
                                    <ul class="nav_patch-submenu">
                                        <li class="">
                                            <a href="#" class="waves-effect waves-dark">
                                                <span class="nav_patch-mtext">Action Page 1</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="waves-effect waves-dark">
                                                <span class="nav_patch-mtext">Action Page 2</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="waves-effect waves-dark">
                                                <span class="nav_patch-mtext">Action Page 3</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="nav_patch-navigation-label">Section 2</div>
                            <ul class="nav_patch-item nav_patch-left-item">
                                <li class="nav_patch-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="nav_patch-micon"><i class="feather icon-sidebar"></i></span>
                                        <span class="nav_patch-mtext">Dropdown</span>
                                        <span class="nav_patch-badge label label-warning">NEW</span>
                                    </a>
                                    <ul class="nav_patch-submenu">
                                        <li class=" nav_patch-hasmenu">
                                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                <span class="nav_patch-mtext">Menu 1</span>
                                            </a>
                                            <ul class="nav_patch-submenu">
                                                <li class="">
                                                    <a href="#" class="waves-effect waves-dark">
                                                        <span class="nav_patch-mtext">Sub Menu 1</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#" class="waves-effect waves-dark">
                                                        <span class="nav_patch-mtext">Sub Menu 2</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#" class="waves-effect waves-dark">
                                                        <span class="nav_patch-mtext">Sub Menu 3</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class=" nav_patch-hasmenu">
                                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                <span class="nav_patch-mtext">Menu 2</span>
                                            </a>
                                            <ul class="nav_patch-submenu">
                                                <li class="">
                                                    <a href="#" target="_blank" class="waves-effect waves-dark">
                                                        <span class="nav_patch-mtext">Sub Menu 1</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#" target="_blank" class="waves-effect waves-dark">
                                                        <span class="nav_patch-mtext">Sub Menu 2</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#" target="_blank" class="waves-effect waves-dark">
                                                        <span class="nav_patch-mtext">Sub Menu 3</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="#" class="waves-effect waves-dark">
                                        <span class="nav_patch-micon">
                                            <i class="feather icon-menu"></i>
                                        </span>
                                        <span class="nav_patch-mtext">Direct Page</span>
                                    </a>
                                </li>
                                <li class="nav_patch-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="nav_patch-micon">
                                            <i class="feather icon-layers"></i>
                                        </span>
                                        <span class="nav_patch-mtext">Dropdown</span>
                                    </a>
                                    <ul class="nav_patch-submenu">
                                        <li class="">
                                            <a href="#" class="waves-effect waves-dark">
                                                <span class="nav_patch-mtext">Action Page 1</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="waves-effect waves-dark">
                                                <span class="nav_patch-mtext">Action Page 2</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="waves-effect waves-dark">
                                                <span class="nav_patch-mtext">Action Page 3</span>
                                            </a>
                                        </li>

                                    </ul>
                                    <li class="">
                                        <a href="javascript:void(0)" class="disabled waves-effect waves-dark">
                                            <span class="nav_patch-micon">
                                            <i class="feather icon-power"></i>
                                        </span>
                                            <span class="nav_patch-mtext">Disabled Menu</span>
                                        </a>
                                    </li>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- [ navigation menu ] end -->
                <div class="nav_patch-content">
                    <div class="padding_10_12">
                        <div class="div_section padding_10">
                            <h1 class="no_margin">Color Palette</h1>
                        </div>
                    </div>
                    <div class="padding_10_12">
                        <div class="row">
                            <div class="col">
                                <div class="container-fluid">
                                    <div class="row div_section padding_10 height-200 no_padding">
                                        <div class="col" style="background: #B80C09;"></div>
                                        <div class="col" style="background: #6B2B06;"></div>
                                        <div class="col" style="background: #E5E7E6;"></div>
                                        <div class="col" style="background: #B7B5B3;"></div>
                                        <div class="col" style="background: #141301;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="container-fluid">
                                    <div class="row div_section padding_10 height-200 no_padding">
                                        <div class="col" style="background: #FFFFFC;"></div>
                                        <div class="col" style="background: #000000;"></div>
                                        <div class="col" style="background: #BEB7A4;"></div>
                                        <div class="col" style="background: #FF7F11;"></div>
                                        <div class="col" style="background: #FF3F00;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="container-fluid">
                                    <div class="row div_section padding_10 height-200 no_padding">
                                        <div class="col" style="background: #E8E9F3;"></div>
                                        <div class="col" style="background: #CECECE;"></div>
                                        <div class="col" style="background: #A6A6A8;"></div>
                                        <div class="col" style="background: #272635;"></div>
                                        <div class="col" style="background: #B1E5F2;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="padding_10_12">
                        <div class="row">
                            <div class="col">
                                <div class="container-fluid">
                                    <div class="row div_section padding_10 height-200 no_padding">
                                        <div class="col" style="background: #3D5A80;"></div>
                                        <div class="col" style="background: #98C1D9;"></div>
                                        <div class="col" style="background: #E0FBFC;"></div>
                                        <div class="col" style="background: #EE6C4D;"></div>
                                        <div class="col" style="background: #293241;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="container-fluid">
                                    <div class="row div_section padding_10 height-200 no_padding">
                                        <div class="col" style="background: #FF8811;"></div>
                                        <div class="col" style="background: #F4D06F;"></div>
                                        <div class="col" style="background: #FFF8F0;"></div>
                                        <div class="col" style="background: #9DD9D2;"></div>
                                        <div class="col" style="background: #392F5A;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="container-fluid">
                                    <div class="row div_section padding_10 height-200 no_padding">
                                        <div class="col" style="background: #B3001B;"></div>
                                        <div class="col" style="background: #262626;"></div>
                                        <div class="col" style="background: #255C99;"></div>
                                        <div class="col" style="background: #7EA3CC;"></div>
                                        <div class="col" style="background: #CCAD8F;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="padding_10_12">
                        <div class="row">
                            <div class="col">
                                <div class="container-fluid">
                                    <div class="row div_section padding_10 height-200 no_padding">
                                        <div class="col" style="background: #E0E0E2;"></div>
                                        <div class="col" style="background: #81D2C7;"></div>
                                        <div class="col" style="background: #B5BAD0;"></div>
                                        <div class="col" style="background: #7389AE;"></div>
                                        <div class="col" style="background: #416788;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="container-fluid">
                                    <div class="row div_section padding_10 height-200 no_padding">
                                        <div class="col" style="background: #0A0903;"></div>
                                        <div class="col" style="background: #FF0000;"></div>
                                        <div class="col" style="background: #FF8200;"></div>
                                        <div class="col" style="background: #FFC100;"></div>
                                        <div class="col" style="background: #FFEAAE;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="container-fluid">
                                    <div class="row div_section padding_10 height-200 no_padding">
                                        <div class="col" style="background: #00072D;"></div>
                                        <div class="col" style="background: #001C55;"></div>
                                        <div class="col" style="background: #0A2472;"></div>
                                        <div class="col" style="background: #0E6BA8;"></div>
                                        <div class="col" style="background: #A6E1FA;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ style Customizer ] start -->
                <div id="styleSelector">
                </div>
                <!-- [ style Customizer ] end -->
            </div>
        </div>
    </div>
</div>
@endsection
@section('addscriptscontent')
<script>
    $(document).ready(function() {
    });

</script>
@endsection
