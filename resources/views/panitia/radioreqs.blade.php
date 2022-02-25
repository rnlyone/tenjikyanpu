@include('Layout.appradioreqs')

    <div class="card card-style">
        <div class="content mb-0">
            <h5 class="color-highlight font-13 mb-n1">Tenji Kyanpu</h5>
            <h1 class="font-700 pb-0">Radio Request</h1>
            <p class="mb-3">
                Berikut List Semua Request
            </p>
        </div>
    </div>

    @foreach ($reqs as $r)
    <div class="card card-style">
        <div class="content mb-0">
            <h3 class="font-700 pb-0">{{$r->nama}}</h3>
            <h5 class="color-highlight font-13 mb-n1">Asal : {{$r->asal}}</h5>
            <div class="divider"></div>
            <h5 class="color-highlight font-13 mb-n1">Request : {{$r->request}}</h5>
            <div class="divider"></div>
            <h5 class="color-highlight font-13 mb-n1">Pesan</h5>
            <p class="mb-3">
                {{$r->pesan}}
            </p>
        </div>
    </div>
    @endforeach

@include('Layout.footerradioreqs')
