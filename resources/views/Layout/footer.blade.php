{{-- toast untuk login sukses --}}
@auth
<div id="login-sukses" class="toast toast-bar toast-top rounded-l bg-green-dark shadow-bg shadow-bg-s fade hide"
    data-bs-delay="3000">
    <div class="align-self-center">
        <i class="icon icon-s bg-green-light rounded-l bi bi-check font-28 me-2"></i>
    </div>
    <div class="align-self-center ps-1">
        <strong class="font-13 mb-n2">Wih Login</strong>
        <span class="font-10 mt-n1 opacity-70">Irasshaimase :), {{auth()->user()->username}}</span>
    </div>
    <div class="align-self-center ms-auto">
        <button type="button" class="btn-close btn-close-white me-2 m-auto font-9" data-bs-dismiss="toast"></button>
    </div>
</div>
@endauth

@if (session()->get('login-sukses'))
<script>
    window.onload = (event) => {
        var toastLiveExample = document.getElementById('login-sukses')
        var toast = new bootstrap.Toast(toastLiveExample)
        toast.show()
    }

</script>
@endif

{{-- toast login gagal --}}
<div id="login-gagal" class="toast toast-bar toast-top rounded-l bg-red-dark shadow-bg shadow-bg-s fade hide"
    data-bs-delay="3000">
    <div class="align-self-center">
        <i
            class="icon icon-s bg-white color-red-dark rounded-l shadow-s bi bi-exclamation-triangle-fill font-22 me-3"></i>
    </div>
    <div class="align-self-center">
        <strong class="font-13 mb-n2">Login Dekinai :(</strong>
        <span class="font-10 mt-n1 opacity-70">Gagal ki Login. Cobaki Lagi.</span>
    </div>
    <div class="align-self-center ms-auto">
        <button type="button" class="btn-close btn-close-white me-2 m-auto font-9" data-bs-dismiss="toast"></button>
    </div>
</div>

</div>

@if (session()->get('login-gagal'))
<script>
    window.onload = (event) => {
        var toastLiveExample = document.getElementById('login-gagal')
        var toast = new bootstrap.Toast(toastLiveExample)
        toast.show()
    }
</script>
@endif

{{-- toast 403 --}}
<div id="forbidden" class="toast toast-bar toast-top rounded-l bg-red-dark shadow-bg shadow-bg-s fade hide"
    data-bs-delay="3000">
    <div class="align-self-center">
        <i
            class="icon icon-s bg-white color-red-dark rounded-l shadow-s bi bi-exclamation-triangle-fill font-22 me-3"></i>
    </div>
    <div class="align-self-center">
        <strong class="font-13 mb-n2">403 Forbidden</strong>
        <span class="font-10 mt-n1 opacity-70">Maap, Nda Boleh Akses :(</span>
    </div>
    <div class="align-self-center ms-auto">
        <button type="button" class="btn-close btn-close-white me-2 m-auto font-9" data-bs-dismiss="toast"></button>
    </div>
</div>

</div>

@if (session()->get('forbidden'))
<script>
    window.onload = (event) => {
        var toastLiveExample = document.getElementById('forbidden')
        var toast = new bootstrap.Toast(toastLiveExample)
        toast.show()
    }
</script>
@endif


<div id="sukses" class="toast toast-bar toast-top rounded-l bg-green-dark shadow-bg shadow-bg-s fade hide"
    data-bs-delay="3000">
    <div class="align-self-center">
        <i class="icon icon-s bg-green-light rounded-l bi bi-check font-28 me-2"></i>
    </div>
    <div class="align-self-center ps-1">
        <strong class="font-13 mb-n2">Sukses</strong>
        <span class="font-10 mt-n1 opacity-70">{{session('sukses')}}</span>
    </div>
    <div class="align-self-center ms-auto">
        <button type="button" class="btn-close btn-close-white me-2 m-auto font-9" data-bs-dismiss="toast"></button>
    </div>
</div>

@if (session()->get('sukses'))
<script>
    window.onload = (event) => {
        var toastLiveExample = document.getElementById('sukses')
        var toast = new bootstrap.Toast(toastLiveExample)
        toast.show()
    }

</script>
@endif

{{-- toast gagal --}}
<div id="gagal" class="toast toast-bar toast-top rounded-l bg-red-dark shadow-bg shadow-bg-s fade hide"
    data-bs-delay="3000">
    <div class="align-self-center">
        <i
            class="icon icon-s bg-white color-red-dark rounded-l shadow-s bi bi-exclamation-triangle-fill font-22 me-3"></i>
    </div>
    <div class="align-self-center">
        <strong class="font-13 mb-n2">Gagal</strong>
        <span class="font-10 mt-n1 opacity-70">{{session('gagal')}}</span>
    </div>
    <div class="align-self-center ms-auto">
        <button type="button" class="btn-close btn-close-white me-2 m-auto font-9" data-bs-dismiss="toast"></button>
    </div>
</div>

</div>

@if (session()->get('gagal'))
<script>
    window.onload = (event) => {
        var toastLiveExample = document.getElementById('gagal')
        var toast = new bootstrap.Toast(toastLiveExample)
        toast.show()
    }
</script>
@endif


<script type="text/javascript">
    if (screen.width >= 720) {
        window.location = "notforpc";
    }

</script>
<script src="v30/scripts/bootstrap.min.js"></script>
<script src="v30/scripts/custom.js"></script>
</body>
