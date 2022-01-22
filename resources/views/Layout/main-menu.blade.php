<div class="card card-style bg-23 mb-3 rounded-m mt-3" data-card-height="150">
    <div class="card-top m-3">
        <a href="#" data-bs-dismiss="offcanvas" class="icon icon-xs bg-theme rounded-s color-theme float-end"><i
                class="bi bi-caret-left-fill"></i></a>
    </div>
    <div class="card-bottom p-3">
        <h1 class="color-white font-20 font-700 mb-n2">Smunel JC</h1>
        <p class="color-white font-12 opacity-70 mb-n1">Tenji Kyanpu 2022</p>
    </div>
    <div class="card-overlay bg-gradient-fade rounded-0"></div>
</div>
@auth
<div class="bg-theme mx-3 rounded-m shadow-m mt-3 mb-3">
    <div class="d-flex px-2 pb-2 pt-2">
        <div>
            @if (auth()->user()->gender == 'pria')
            <a href="#"><img src="v30/images/pictures/Male.png" width="45" class="rounded-s" alt="img"></a>
            @else
            <a href="#"><img src="v30/images/pictures/Female.png" width="45" class="rounded-s" alt="img"></a>
            @endif
        </div>
        <div class="ps-2 align-self-center">
            <h5 class="ps-1 mb-0 line-height-xs pt-1">{{auth()->user()->nama}}</h5>
            <h6 class="ps-1 mb-0 font-400 opacity-40">{{auth()->user()->auth}}</h6>
        </div>
        <div class="ms-auto">
            <a href="#" data-bs-toggle="dropdown" class="icon icon-m ps-3"><i
                    class="bi bi-three-dots-vertical font-18 color-theme"></i></a>
            <div class="dropdown-menu  bg-transparent border-0 mt-n1 ms-3">
                <div class="card card-style rounded-m shadow-xl mt-1 me-1">
                    <div class="list-group list-custom list-group-s list-group-flush rounded-xs px-3 py-1">
                        <a href="page-profile-admin.html" class="color-theme opacity-70 list-group-item py-1"><strong
                                class="font-500 font-12">Your Profile</strong><i class="bi bi-chevron-right"></i></a>
                        <a href="page-activity.html" class="color-theme opacity-70 list-group-item py-1"><strong
                                class="font-500 font-12">Notifications</strong><i class="bi bi-chevron-right"></i></a>
                        <a href="logout" class="color-theme opacity-70 list-group-item py-1"><strong
                                class="font-500 font-12">Log Out</strong><i class="bi bi-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endauth
@guest
<div class="menu-list">
    <div class="card card-style rounded-m p-3 py-2 mb-0">
        <a href="login">
            <i class="gradient-highlight shadow-bg shadow-bg-xs bi bi-door-open-fill"></i>
            <span>Login</span>
            <i class="bi bi-chevron-right"></i>
        </a>
    </div>
</div>
@endguest
<span class="menu-divider">NAVIGATION</span>
<div class="menu-list">
    <div class="card card-style rounded-m p-3 py-2 mb-0">
        <a href="/" id="nav-homes"><i
                class="gradient-blue shadow-bg shadow-bg-xs bi bi-house-fill"></i><span>Home</span><i
                class="bi bi-chevron-right"></i></a>
        <a href="radio" id="nav-comps"><i
                class="gradient-red shadow-bg shadow-bg-xs bi bi-broadcast-pin"></i><span>Radio</span><i
                class="bi bi-chevron-right"></i></a>
        <a href="schedule" id="nav-pages"><i
                class="gradient-green shadow-bg shadow-bg-xs bi bi-clock-fill"></i><span>Schedule</span><i
                class="bi bi-chevron-right"></i></a>
        <a href="live" id="nav-media"><i
                class="gradient-yellow shadow-bg shadow-bg-xs bi bi-play-btn-fill"></i><span>Live</span><i
                class="bi bi-chevron-right"></i></a>
        <a href="profile" id="nav-mails"><i
                class="gradient-magenta shadow-bg shadow-bg-xs bi bi-person-fill"></i><span>Profile</span><i
                class="bi bi-chevron-right"></i></a>
    </div>
</div>
<span class="menu-divider mt-4">SETTINGS</span>
<div class="menu-list">
    <div class="card card-style rounded-m p-3 py-2 mb-0">
        <a href="#" data-toggle-theme data-trigger-switch="switch-1">
            <i class="gradient-dark shadow-bg shadow-bg-xs bi bi-moon-fill font-13"></i>
            <span>Dark Mode</span>
            <div class="form-switch ios-switch switch-green switch-s me-2">
                <input type="checkbox" data-toggle-theme class="ios-input" id="switch-1">
                <label class="custom-control-label" for="switch-1"></label>
            </div>
        </a>
    </div>
</div>
<span class="menu-divider mt-4"></span>
<p class="text-center mb-0 mt-n3 pb-3 font-9 text-uppercase font-600 color-theme">Made with <i
        class=" font-9 px-1 bi bi-heart-fill color-red-dark"></i> by SmunelJC <span class="copyright-year"></span>.
</p>
