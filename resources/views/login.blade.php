@include('Layout.app')

<div class="page-content mb-0 pb-0">
    <div class="card card-style mb-0 bg-transparent shadow-0 bg-20 mx-0 rounded-0" data-card-height="cover">
        <div class="card-center">
            <div class="card card-style">
                <div class="content">
                    <h1 class="text-center font-800 font-30 mb-2">Login</h1>
                    <p class="text-center font-13 mt-n2 mb-3">Tenji Kyanpu 2022</p>
                    <form action="login" method="post">
                        @csrf
                        <div class="form-custom form-label form-icon mb-3">
                            <i class="bi bi-person-circle font-14"></i>
                            <input name="username" type="text" class="form-control rounded-xs" id="c1"
                                placeholder="Username" />
                            <label for="c1" class="color-black">Username</label>
                            <span>(required)</span>
                        </div>
                        <div class="form-custom form-label form-icon mb-3">
                            <i class="bi bi-asterisk font-12"></i>
                            <input name="password" type="password" class="form-control rounded-xs" id="c2"
                                placeholder="Password" />
                            <label for="c2" class="color-black">Password</label>
                            <span>(required)</span>
                        </div>
                        <button type="submit"
                            class='btn rounded-sm btn-m gradient-highlight text-uppercase font-700 mt-4 mb-3 btn-full shadow-bg shadow-bg-s'>Sign
                            In</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@include('Layout.footer')
