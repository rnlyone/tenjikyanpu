@include('Layout.app')

<div class="page-content header-clear-medium">
    {{-- <div class="card card-style">
        <div class="content mb-0">
            <h5 class="color-highlight font-13 mb-n1">Belum Berfungsi</h5>
            <h1 class="font-700 pb-0">Radio Request</h1>
            <p class="mb-3">
                Maaf, Radio Request Hanya Tersedia Pada Hari Acara Tenji Kyanpu.
            </p>
        </div>
    </div> --}}

    <div class="card card-style">
        <div class="content mb-0">
            <h5 class="color-highlight font-13 mb-n1">Tenji Kyanpu</h5>
            <h1 class="font-700 pb-0">Radio Request</h1>
            <p class="mb-3">
                Request Lagu Jepang Mu disini dan Tunggu Pesanmu dibaca Oleh Master Of Ceremony.
            </p>
        </div>
    </div>

    <div class="card card-style">
        <div class="content">
            <h6 class="font-700 mb-n1 color-highlight">Radio Request</h6>
            <h2 class="pb-2">Request Disini</h2>
            <form method="post" action="submitreqs" class="demo-animation m-0" novalidate="">
                @csrf
                <div class="form-custom mb-3 form-label form-border">
                    <i class="bi bi-person-circle font-14 disabled"></i>
                    <input type="text" name="nama" class="form-control rounded-xs" id="formnama" placeholder="Nama"
                          value="@auth{{auth()->user()->nama}}@endauth">
                    <label for="formnama" id="labelnama" class="color-theme">Nama</label>
                    <div class="valid-feedback">Excellent!</div>
                    <div class="invalid-feedback">Nama Tidak Valid</div>
                    <span>(required)</span>
                </div>
                <div class="form-custom mb-3 form-label form-border">
                    <i class="bi bi-telephone-fill font-12 disabled"></i>
                    <input name="asal" type="text" class="form-control rounded-xs" id="formasal" placeholder="Asal Daerah / Instansi / Kampus / Sekolah"
                             >
                    <label for="formasal" class="color-theme">Dari</label>
                    <div class="valid-feedback">Excellent!</div>
                    <div class="invalid-feedback">Asal Tidak Valid</div>
                    <span>(required)</span>
                </div>
                <div class="form-custom mb-3 form-label form-border">
                    <i class="bi bi-telephone-fill font-12 disabled"></i>
                    <input name="request" type="text" class="form-control rounded-xs" id="formreq" placeholder="Request Lagu (URL Youtube / [judul - artist])"
                             >
                    <label for="formreq" class="color-theme">Request Lagu</label>
                    <div class="valid-feedback">Excellent!</div>
                    <div class="invalid-feedback">Request Lagu Tidak Valid</div>
                    <span>(required)</span>
                </div>
                <div class="form-custom mb-3 form-label form-border">
                    <i class="bi bi-pencil-fill font-12 disabled"></i>
                    <textarea name="pesan" class="form-control rounded-xs" placeholder="Masukkan Pesan-Pesan Mu Disini &#10;&#10; (*misalnya, 'lagu ini untuk dia yang jauh disana')&#10; (*misalnya, 'sehat selalu untuk bla bla bla :v')" id="formpesan"
                        spellcheck="false"></textarea>
                    <label for="formpesan" class="color-theme">Pesan</label>
                    <div class="valid-feedback">Excellent!</div>
                    <div class="invalid-feedback">Pesan Kosong</div>
                    <span>(required)</span>
                </div>
                <button class="btn btn-full bg-highlight rounded-xs text-uppercase font-700 w-100 btn-s mt-4"
                    type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>

@include('Layout.footer')
