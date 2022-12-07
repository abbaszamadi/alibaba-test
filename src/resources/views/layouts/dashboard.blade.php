<?php
    $user = auth()->user();
    $route = Route::currentRouteName();
?>
<!DOCTYPE html>
<html class="loading bordered-layout" lang="en" data-layout="bordered-layout" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy dashboard-assets is super flexible, powerful, clean &amp; modern responsive bootstrap 4 dashboard-assets template with unlimited possibilities.">
    <meta name="keywords" content="dashboard-assets template, Vuexy dashboard-assets template, dashboard-assets template, flat dashboard-assets template, responsive dashboard-assets template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Automation</title>
    <link rel="apple-touch-icon" href="{{ asset('dashboard-assets/app-assets') }}/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('dashboard-assets/app-assets') }}/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    @yield('page_vendor_styles')
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard-assets/app-assets') }}/css-rtl/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard-assets/app-assets') }}/css-rtl/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard-assets/app-assets') }}/css-rtl/colors.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard-assets/app-assets') }}/css-rtl/components.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard-assets/app-assets') }}/css-rtl/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard-assets/app-assets') }}/css-rtl/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard-assets/app-assets') }}/css-rtl/themes/semi-dark-layout.css">


    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard-assets/app-assets') }}/css-rtl/core/menu/menu-types/vertical-menu.min.css">
    @yield('page_styles')
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard-assets/app-assets') }}/css-rtl/custom-rtl.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard-assets/assets/css/style-rtl.css') }}">
    <!-- END: Custom CSS-->

    <!-- BEGIN: Custom styles by abbas zamadi  -->

    <link rel="preconnect" href="//fdn.fontcdn.ir"><link rel="preconnect" href="//v1.fontapi.ir">
    <link href="https://v1.fontapi.ir/css/Vazir" rel="stylesheet">
    <!-- END: Custom styles by abbas zamadi  -->



    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/blueimp-gallery/2.15.1/css/blueimp-gallery.min.css">



    <style>
        body,p,a, span,h1,h2,h3,h4,h5,h6{
            font-family: 'Vazir', sans-serif !important;
        }
    </style>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

<!-- BEGIN: Header-->
<nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon" data-feather="menu"></i></a></li>
            </ul>
            <h3>پنل مدیریت سیستم</h3>
        </div>
        <ul class="nav navbar-nav align-items- ms-auto">

            <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>

            <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder">{{$user->first_name}}</span><span class="user-status">{{$user->role? $user->role->name :  'کاربر عادی'}}</span></div><span class="avatar"><img class="round" src="{{ asset('dashboard-assets/app-assets') }}/images/portrait/small/abbas-avatar.jpg" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                    <a class="dropdown-item" href="#">
                        <i class="me-50" data-feather="user"></i>پروفایل</a>
                    <a class="dropdown-item" href="#">
                        <i class="me-50" data-feather="mail"></i> پیام ها</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <i class="me-50" data-feather="settings"></i> تنظیمات</a>
                    <a class="dropdown-item" href="">
                        <form action="{{route('logout')}}" method="post" style="display: inline">
                            @csrf
                            <button class="btn text-danger">
                                <i class="" data-feather="power"></i>
                                خروج
                            </button>
                        </form>

                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<ul class="main-search-list-defaultlist d-none">
    <li class="d-flex align-items-center"><a href="#">
            <h6 class="section-label mt-75 mb-0">Files</h6>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
            <div class="d-flex">
                <div class="me-75"><img src="{{ asset('dashboard-assets/app-assets') }}/images/icons/xls.png" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing Manager</small>
                </div>
            </div><small class="search-data-size me-50 text-muted">&apos;17kb</small>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
            <div class="d-flex">
                <div class="me-75"><img src="{{ asset('dashboard-assets/app-assets') }}/images/icons/jpg.png" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd Developer</small>
                </div>
            </div><small class="search-data-size me-50 text-muted">&apos;11kb</small>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
            <div class="d-flex">
                <div class="me-75"><img src="{{ asset('dashboard-assets/app-assets') }}/images/icons/pdf.png" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital Marketing Manager</small>
                </div>
            </div><small class="search-data-size me-50 text-muted">&apos;150kb</small>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
            <div class="d-flex">
                <div class="me-75"><img src="{{ asset('dashboard-assets/app-assets') }}/images/icons/doc.png" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web Designer</small>
                </div>
            </div><small class="search-data-size me-50 text-muted">&apos;256kb</small>
        </a></li>
    <li class="d-flex align-items-center"><a href="#">
            <h6 class="section-label mt-75 mb-0">Members</h6>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
            <div class="d-flex align-items-center">
                <div class="avatar me-75"><img src="{{ asset('dashboard-assets/app-assets') }}/images/portrait/small/avatar-s-8.jpg" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
            <div class="d-flex align-items-center">
                <div class="avatar me-75"><img src="{{ asset('dashboard-assets/app-assets') }}/images/portrait/small/avatar-s-1.jpg" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd Developer</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
            <div class="d-flex align-items-center">
                <div class="avatar me-75"><img src="{{ asset('dashboard-assets/app-assets') }}/images/portrait/small/avatar-s-14.jpg" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing Manager</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
            <div class="d-flex align-items-center">
                <div class="avatar me-75"><img src="{{ asset('dashboard-assets/app-assets') }}/images/portrait/small/avatar-s-6.jpg" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                </div>
            </div>
        </a></li>
</ul>
<ul class="main-search-list-defaultlist-other-list d-none">
    <li class="auto-suggestion justify-content-between"><a class="d-flex align-items-center justify-content-between w-100 py-50">
            <div class="d-flex justify-content-start"><span class="me-75" data-feather="alert-circle"></span><span>No results found.</span></div>
        </a></li>
</ul>
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto">
                <a class="navbar-brand" href="{{route('dashboard')}}"><span class="brand-logo">
                            <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                                <defs>
                                    <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                                        <stop stop-color="#000000" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                    <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                                        <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                        <g id="Group" transform="translate(400.000000, 178.000000)">
                                            <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill:currentColor"></path>
                                            <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                                            <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                                            <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                                            <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg></span>
                    <h2 class="brand-text">سهند</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="dashboard-assetss">دسترسی سریع</span><span class="badge badge-light-warning rounded-pill ms-auto me-1">2</span></a>
                <ul class="menu-content">
                    <li class="{{$route == 'files.index' ? 'active' : null}}"><a class="d-flex align-items-center" href="{{route('files.index')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">لیست فایل ها</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{route('applicants.index')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">لیست متقاضی ها</span></a>
                    </li>

                    <li><a class="d-flex align-items-center" href="{{route('applicants.archived')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce"> متقاضی های آرشیو شده</span></a>
                    </li>

{{--                    <li><a class="d-flex align-items-center" href="{{route('roles.show', 3)}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">لیست متقاضی ها</span></a>--}}
{{--                    </li>--}}

                </ul>
            </li>
            <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">هسته سیستم</span><i data-feather="more-horizontal"></i>
            </li>

            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Invoice">فایل ها(ملک ها)</span></a>
                <ul class="menu-content">
                    <li>
                        <a class="d-flex align-items-center" href="{{route('files.index', ['category_id' => 1])}}">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="List"> رهن و اجاره</span>
                        </a>
                    </li>
                    <li>
                        <a class="d-flex align-items-center" href="{{route('files.index', ['category_id' => 2])}}">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="List">خرید و فروش</span>
                        </a>
                    </li>

                    <li>
                        <a class="d-flex align-items-center" href="{{route('files.index', ['category_id' => 3])}}">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="List">مشارکتی</span>
                        </a>
                    </li>

                    <li>
                        <a class="d-flex align-items-center" href="{{route('files.archived')}}">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="List">آرشیو شده</span>
                        </a>
                    </li>

                </ul>
            </li>



            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Invoice">ساختار سیستم</span></a>
                <ul class="menu-content">
                    <li class="{{in_array($route, ['files_types.index']) ? 'active' : null}}"><a class="d-flex align-items-center" href="{{route('files_types.index')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">انواع فایل ها</span></a>
                    </li>
                    <li class="{{in_array($route, ['attributes.index']) ? 'active' : null}}"><a class="d-flex align-items-center" href="{{route('attributes.index')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">فیلد ها</span></a>
                    </li>

                    <li class="{{in_array($route, ['zones.index']) ? 'active' : null}}"><a class="d-flex align-items-center" href="{{route('zones.index')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">مناطق</span></a>
                    </li>


                </ul>
            </li>




            <li class=" navigation-header"><span data-i18n="Misc">مدیریت</span><i data-feather="more-horizontal"></i>
            </li>
            <li class="{{in_array($route, ['users.index'])? 'active' : null}} nav-item"><a class="d-flex align-items-center" href="{{route('users.index')}}" ><i data-feather="users"></i>
                    <span class="menu-title text-truncate" data-i18n="Documentation">مدیریت کاربران</span></a>
            </li>
            <li class="{{in_array($route, ['roles.index', 'roles.show'])? 'active' : null}} nav-item"><a class="d-flex align-items-center" href="{{route('roles.index')}}">
                    <i data-feather="life-buoy"></i>
                    <span class="menu-title text-truncate" data-i18n="Raise Support">مدیریت دسترسی ها</span></a>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- dashboard-assets Analytics Start -->
            @yield('content')
            <!-- dashboard-assets Analytics end -->

        </div>
    </div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">

</footer>
<button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="{{ asset('dashboard-assets/app-assets') }}/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

@yield('page_vendor_scripts')

<!-- BEGIN: Theme JS-->
<script src="{{ asset('dashboard-assets/app-assets') }}/js/core/app-menu.js"></script>
<script src="{{ asset('dashboard-assets/app-assets') }}/js/core/app.js"></script>
<script src="{{ asset('dashboard-assets/app-assets') }}/js/scripts/customizer.min.js"></script>

<!-- END: Theme JS-->


@yield('page_scripts')

@yield('last_scripts')
<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>



</body>
<!-- END: Body-->

</html>
