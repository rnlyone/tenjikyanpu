<!DOCTYPE HTML>
<html lang="en">

@php
    use App\Models\Notif;

    $ntotal = Notif::all()->count();
@endphp

<!-- Mirrored from www.enableds.com/products/duo/v30/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jan 2022 17:30:37 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <title>Tenji Kyanpu</title>
    <link rel="stylesheet" type="text/css" href="v30/styles/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="v30/fonts/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@500;600;700;800&amp;family=Roboto:wght@400;500;700&amp;display=swap"
        rel="stylesheet">
    <link rel="manifest" href="/manifest.json">
    <meta id="theme-check" name="theme-color" content="#FFFFFF">
    <link rel="apple-touch-icon" sizes="180x180" href="v30/app/icons/icon-192x192.html">
</head>

<body class="theme-light">
    <div id="preloader">
        <div class="spinner-border color-highlight" role="status"></div>
    </div>
    <div id="page">

        <div class="header-bar header-fixed header-app header-bar-detached">
            <a data-bs-toggle="offcanvas" data-bs-target="#menu-main" href="#"><i
                    class="bi bi-list color-theme"></i></a>
            <a href="#" class="header-title color-theme">
                <img class="logo"></a>
            <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-bell"><em
                    class="badge bg-highlight ms-1">{{$ntotal}}</em><i class="font-14 bi bi-bell-fill"></i></a>
            <a href="#" class="show-on-theme-light" data-toggle-theme><i class="bi bi-moon-fill font-13"></i></a>
            <a href="#" class="show-on-theme-dark" data-toggle-theme><i
                    class="bi bi-lightbulb-fill color-yellow-dark font-13"></i></a>
        </div>

        <div id="footer-bar" class="footer-bar footer-bar-detached">
            <a href="radio" class="{{$radio ?? ''}}"><i
                    class="bi bi-broadcast-pin font-15"></i><span>Radio</span></a>
            <a href="schedule" class="{{$schedule ?? ''}}"><i
                    class="bi bi-clock-fill font-17"></i><span>Schedule</span></a>
            <a href="/" class="{{$home ?? ''}}"><i class="bi bi-house-fill font-16"></i><span>Home</span></a>
            <a href="media" class="{{$media ?? ''}}"><i
                    class="bi bi-play-btn-fill font-16"></i><span>Media</span></a>
            <a href="profile" class="{{$profile ?? ''}}"><i
                    class="bi bi-person-fill font-16"></i><span>Profile</span></a>
        </div>

        <div id="menu-main" data-menu-active="nav-homes" data-menu-load="sidebar" style="width:280px;"
            class="offcanvas offcanvas-start offcanvas-detached rounded-m">
        </div>

        <div id="menu-bell" data-menu-load="topnotif" style="height:400px;"
            class="offcanvas offcanvas-top offcanvas-detached rounded-m">
        </div>

        <div class="offcanvas offcanvas-bottom rounded-m offcanvas-detached bg-theme" id="menu-login">
            <div class="content">
                <h5 class="mb-n1 font-12 color-highlight font-700 text-uppercase pt-1">Welcome</h5>
                <h1 class="font-24 font-800 mb-3">Login</h1>
                <form action="login" method="post">
                    @csrf
                    <div class="form-custom form-label form-border form-icon mb-3 bg-transparent">
                        <i class="bi bi-person-circle font-13"></i>
                        <input name="username" type="text" class="form-control rounded-xs" id="c1" placeholder="Username" />
                        <label for="c1" class="color-theme">Username</label>
                        <span>(required)</span>
                    </div>
                    <div class="form-custom form-label form-border form-icon mb-4 bg-transparent">
                        <i class="bi bi-asterisk font-13"></i>
                        <input name="password" type="password" class="form-control rounded-xs" id="c2" placeholder="Password" />
                        <label for="c2" class="color-theme">Password</label>
                        <span>(required)</span>
                    </div>
                    <button type="submit" class="btn btn-full gradient-green shadow-bg shadow-bg-s mt-4">SIGN IN</button>
                    <div class="row">
                        <div class="col-6 text-start">
                            <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-forgot"
                                class="font-11 color-theme opacity-40 pt-3 d-block">Forgot Password?</a>
                        </div>
                        <div class="col-6 text-end">
                            <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-register"
                                class="font-11 color-theme opacity-40 pt-3 d-block">Create Account</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
