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
                            @endif
                        </p>
                        <p class="font-10">
                            <strong class="color-theme pe-1">1k</strong>Followers
                            <strong class="color-theme ps-3 pe-1">342</strong>Following
                        </p>
                    </div>
                </div>
                <div class="content">
                    <div class="row mb-0">
                        <div class="col-6">
                            <a href="#"
                                class="btn btn-full btn-s rounded-s text-uppercase font-900 gradient-highlight shadow-bg shadow-bg-s">Follow</a>
                        </div>
                        <div class="col-6">
                            <a href="#"
                                class="btn btn-full btn-s btn-border rounded-s text-uppercase font-900 color-highlight border-blue-dark shadow-l">Message</a>
                        </div>
                    </div>
                </div>

                </div>
            </div>
        </div>
    </div>
@include('Layout.footer')
</body>
