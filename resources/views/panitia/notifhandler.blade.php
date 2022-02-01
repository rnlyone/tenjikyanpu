@include('Layout.app')

<div class="page-content header-clear-medium">

    <div class="card card-style">
        <div class="content">
            <h4>Buat Notifikasi Baru</h4>
            <p class="mb-3">
                Klik tombol dibawah ini untuk membuat notifikasi baru.
            </p>
            <div class="mb-3">
                <a href="#" data-bs-toggle="offcanvas" data-bs-target="#add-notif"
                    class="btn-full mb-n4 mt-n1 btn btn-m rounded-s gradient-highlight shadow-bg shadow-bg-s">Tambah
                    Notifikasi</a>
            </div>
        </div>
    </div>

    <div class="card card-style">
        <div class="content">
            <h4>List Notifications</h4>
            <p class="mb-3 font-13">
                Notifikasi yang telah dibuat sebelumnya.
            </p>
            <div class="list-group list-custom list-group-m rounded-m">
                @foreach ($notifs as $n)
                <a href="#" data-bs-toggle="offcanvas" data-bs-target="#edit-notif{{$n->id}}" class="list-group-item">
                    <i class="bi {{$n->icons}} font-13"></i>
                    <div class="ps-1"><strong class="font-600">{{$n->title}}</strong>
                        <span>{{$n->subject}}</span>
                    </div>
                    <i class="bi bi-chevron-right"></i>
                @endforeach

                </a>
            </div>
        </div>
    </div>

</div>

@foreach ($notifs as $n)
<div class="offcanvas offcanvas-modal rounded-m offcanvas-detached bg-theme hide"
    style="width: 340px; visibility: visible;" id="edit-notif{{$n->id}}" aria-modal="true" role="dialog">
    <div class="content">
        <h5 class="mb-n1 font-12 color-highlight font-700 text-uppercase pt-1">Edit</h5>
        <h1 class="font-24 font-800 mb-3">Notifikasi</h1>
        <form action="notifhandler/edit" method="post">
            @csrf
            <input type="text" name="id" value="{{$n->id}}" hidden>
            <div class="form-custom form-label form-border form-icon mb-3 bg-transparent">
                <i class="bi bi-journals font-13"></i>
                <select name="icons" class="form-select rounded-xs" id="c6" aria-label="Floating label select example" required>
                    <option value="{{$n->icons}}">{{$n->icons}}</option>
                    <option value="bi-alarm">bi-alarm</option>
                    <option value="bi-brush">bi-brush</option>
                    <option value="bi-check-circle">bi-check-circle</option>
                    <option value="bi-exclamation-diamond">bi-exclamation-diamond</option>
                    <option value="bi-heart-fill">bi-heart-fill</option>
                </select>
            </div>
            <div class="form-custom form-label form-border form-icon mb-3 bg-transparent">
                <i class="bi bi-quote font-13"></i>
                <input name="title" type="text" class="form-control rounded-xs" id="c1" placeholder="Title" value="{{$n->title}}"
                    required>
                <label for="c1" class="color-theme">Title</label>
                <span>(required)</span>
            </div>
            <div class="form-custom form-label form-border form-icon mb-3 bg-transparent">
                <i class="bi bi-text-paragraph font-13"></i>
                <textarea name="subject" type="text" class="form-control rounded-xs" id="c1" placeholder="Isi Pesan" required>{{$n->subject}}</textarea>
                <label for="c1" class="color-theme">Isi Pesan</label>
                <span>(required)</span>
            </div>
            <div class="form-custom form-label form-border form-icon mb-3 bg-transparent">
                <i class="bi bi-link font-13"></i>
                <input name="links" type="text" class="form-control rounded-xs" id="c1" placeholder="Links" value="{{$n->links}}">
                <label for="c1" class="color-theme">Links</label>
            </div>
            <button type="submit" class="btn btn-full gradient-blue shadow-bg shadow-bg-s mt-4">Edit Notifikasi</button>
            <div class="row">
                <div class="col-6 text-start">
                    <a href="#" data-bs-toggle="offcanvas" data-bs-target="#delete-notif{{$n->id}}"
                        class="font-11 color-theme opacity-40 pt-3 d-block">Delete Notif?</a>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="offcanvas offcanvas-bottom rounded-m offcanvas-detached hide" id="delete-notif{{$n->id}}"
    style="visibility: visible;" aria-modal="true" role="dialog">
    <div class="gradient-red px-3 py-3">
        <div class="d-flex mt-1">
            <div class="align-self-center">
                <i class="bi bi-x-circle-fill font-22 pe-2 scale-box color-white"></i>
            </div>
            <div class="align-self-center">
                <h1 class="font-800 color-white mb-0">Hapus Notifikasi?</h1>
            </div>
        </div>
        <p class="color-white opacity-60 pt-2">
            Yakin Untuk Menghapus Notif <strong>{{$n->title}}</strong>. <br> Notifikasi yang telah di hapus tidak akan bisa
            dikembalikan lagi.
        </p>
        <a href="notifhandler/delete/{{$n->id}}" class="default-link btn btn-full btn-s bg-white color-black">Tetap Hapus</a>
    </div>
</div>

@endforeach


<div class="offcanvas offcanvas-bottom rounded-m offcanvas-detached bg-theme hide" id="add-notif"
    style="visibility: visible;" aria-modal="true" role="dialog">
    <div class="content">
        <form action="notifhandler/create" method="post">
            @csrf
            <h5 class="mb-n1 font-12 color-highlight font-700 text-uppercase pt-1">Tambahkan</h5>
            <h1 class="font-24 font-800 mb-3">Notifikasi</h1>
            <div class="form-custom form-label form-border form-icon mb-3 bg-transparent">
                <i class="bi bi-journals font-13"></i>
                <select name="icons" class="form-select rounded-xs" id="c6" aria-label="Floating label select example" required>
                    <option value="">Icons</option>
                    <option value="bi-alarm">bi-alarm</option>
                    <option value="bi-brush">bi-brush</option>
                    <option value="bi-check-circle">bi-check-circle</option>
                    <option value="bi-exclamation-diamond">bi-exclamation-diamond</option>
                    <option value="bi-heart-fill">bi-heart-fill</option>
                </select>
            </div>
            <div class="form-custom form-label form-border form-icon mb-3 bg-transparent">
                <i class="bi bi-quote font-13"></i>
                <input name="title" type="text" class="form-control rounded-xs" id="c1" placeholder="Title"
                    required>
                <label for="c1" class="color-theme">Title</label>
                <span>(required)</span>
            </div>
            <div class="form-custom form-label form-border form-icon mb-3 bg-transparent">
                <i class="bi bi-text-paragraph font-13"></i>
                <textarea name="subject" type="text" class="form-control rounded-xs" id="c1" placeholder="Isi Pesan" required></textarea>
                <label for="c1" class="color-theme">Isi Pesan</label>
                <span>(required)</span>
            </div>
            <div class="form-custom form-label form-border form-icon mb-3 bg-transparent">
                <i class="bi bi-link font-13"></i>
                <input name="links" type="text" class="form-control rounded-xs" id="c1" placeholder="Links">
                <label for="c1" class="color-theme">Links</label>
            </div>
            <button type="submit" class="btn btn-full gradient-blue shadow-bg shadow-bg-s mt-4">Buat Notifikasi</button>
        </form>
    </div>
</div>

@include('Layout.footer')
