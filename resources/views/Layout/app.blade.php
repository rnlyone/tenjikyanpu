<!DOCTYPE HTML>
<html lang="en">

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
    <link rel="manifest" href="_manifest.json">
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
                    class="badge bg-highlight ms-1">3</em><i class="font-14 bi bi-bell-fill"></i></a>
            <a href="#" class="show-on-theme-light" data-toggle-theme><i class="bi bi-moon-fill font-13"></i></a>
            <a href="#" class="show-on-theme-dark" data-toggle-theme><i
                    class="bi bi-lightbulb-fill color-yellow-dark font-13"></i></a>
        </div>

        <div id="footer-bar" class="footer-bar footer-bar-detached">
            <a href="index-pages.html" class="{{$radio ?? ''}}"><i class="bi bi-broadcast-pin font-15"></i><span>Radio</span></a>
            <a href="index-components.html" class="{{$schedule ?? ''}}"><i class="bi bi-clock-fill font-17"></i><span>Schedule</span></a>
            <a href="/" class="{{$home ?? ''}}"><i class="bi bi-house-fill font-16"></i><span>Home</span></a>
            <a href="index-media.html" class="{{$live ?? ''}}"><i class="bi bi-play-btn-fill font-16"></i><span>Live</span></a>
            @auth
            <a href="index-media.html" class="{{$notifications ?? ''}}"><i class="bi bi-person-fill font-16"></i><span>Profile</span></a>
            @endauth
            @guest
            <a href="login" class="{{$notifications ?? ''}}"><i class="bi bi-person-fill font-16"></i><span>Profile</span></a>
            @endguest
        </div>

        <div id="menu-main" data-menu-active="nav-homes" data-menu-load="sidebar" style="width:280px;"
            class="offcanvas offcanvas-start offcanvas-detached rounded-m">
        </div>

        <div id="menu-bell" data-menu-load="notifications" style="height:400px;"
            class="offcanvas offcanvas-top offcanvas-detached rounded-m">
        </div>
