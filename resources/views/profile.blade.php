@include('Layout.app')

<div class="page-content header-clear-medium">
    <div class="card card-style mt-5 overflow-visible">

        @if (auth()->user()->gender == 'pria')
        <img src="v30/images/pictures/Male.png" data-src="v30/images/pictures/Male.png" width="150" height="150"
            class="mt-n5 preload-img mx-auto rounded-circle shadow-xl">
        @else
        <img src="v30/images/pictures/Female.png" data-src="v30/images/pictures/Female.png" width="150" height="150"
            class="mt-n5 preload-img mx-auto rounded-circle shadow-xl">
        @endif
        <div class="content text-center">
            <div class="px-3 mb-n3">
                <h1 class="font-700">{{auth()->user()->nama}}</h1>
                <p class="mb-2 opacity-60 font-13">
                    {{auth()->user()->auth}} |
                    @if (auth()->user()->jc == '02')
                    MAN 2 Makassar
                    @elseif (auth()->user()->jc == '05')
                    SMA Negeri 5 Makassar
                    @elseif (auth()->user()->jc == '17')
                    SMA Negeri 17 Makassar
                    @elseif (auth()->user()->jc == '08')
                    SMK Negeri 8 Makassar
                    @elseif (auth()->user()->jc == '21')
                    SMA Negeri 21 Makassar
                    @elseif (auth()->user()->jc == 'Laniang')
                    SMK Laniang Makassar
                    @elseif (auth()->user()->jc == 'non_nihonbu')
                    Non Anggota Nihonbu Doumei
                    @endif
                </p>
                <p class="font-10">
                    <strong class="color-theme">@</strong>{{auth()->user()->username}}
                </p>
            </div>
        </div>
        <div class="content">
            <div class="row mb-0">
                <div class="col-6">
                    <a href="https://chat.whatsapp.com/HBWfRbiZzRV6WrxhHcRpOO"
                        class="btn btn-full btn-s rounded-s text-uppercase font-900 gradient-highlight shadow-bg shadow-bg-s">Join Grup</a>
                </div>
                <div class="col-6">
                    <a href="https://api.whatsapp.com/send?phone=6282292729852"
                        class="btn btn-full btn-s btn-border rounded-s text-uppercase font-900 color-highlight border-blue-dark shadow-l">Kontak Admin</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-style">
        <div class="content">
            <h4>Registrasi Lomba</h4>
            <p class="mb-3">
                Scan QR Berikut ke Operator Registrasi saat Acara Berlangsung. Kamu tidak akan Mendapatkan Sertifikat
                ketika tidak registrasi 2 Kali.
            </p>
            <div class="mb-3">
                <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-qr" class="btn-full mb-n4 mt-n1 btn btn-m rounded-s gradient-highlight shadow-bg shadow-bg-s">Buka QR Registrasi</a>
            </div>
        </div>
    </div>
</div>


<div class="offcanvas offcanvas-bottom rounded-m offcanvas-detached" id="menu-qr" style="visibility: hidden;"
    aria-hidden="true">
    <div class="gradient-red px-3 py-3">
        <div class="d-flex mt-1">
            <div class="align-self-center">
                <i class="bi bi-qr-code-scan font-22 pe-2 scale-box color-white"></i>
            </div>
            <div class="align-self-center">
                <h1 class="font-800 color-white mb-0">Registrasi</h1>
            </div>
        </div>
        <p class="color-white opacity-60 pt-2">
            Scan QR di Operator Registrasi
            </p>
        <div class="card card-style bg-white">
            <div class="content">
                <img src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&amp;format=svg&amp;color=da4453&amp;data={{url('/')}}/registqr/{{auth()->user()->id}}"
                class="generate-qr-auto mx-auto" alt="Auto Generated QR Code">
            </div>
        </div>
        <a href="#" data-bs-dismiss="offcanvas" class="default-link btn btn-full btn-s bg-white color-highlight"
            style="">Tutup</a>
    </div>
</div>
@include('Layout.footer')
