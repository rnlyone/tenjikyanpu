@include('Layout.app')

<div class="page-content header-clear-medium">

    <div class="card card-style">
        <div class="content">
            <h4>Tambah User</h4>
            <p class="mb-3">
                Klik Tombol dibawah ini untuk membuat akun User baru.
            </p>
            <div class="mb-3">
                <a href="#" data-bs-toggle="offcanvas" data-bs-target="#add-user"
                    class="btn-full mb-n4 mt-n1 btn btn-m rounded-s gradient-highlight shadow-bg shadow-bg-s">Tambah
                    User</a>
            </div>
        </div>
    </div>
    <div class="card card-style">
        <div class="content">
            <h4>Panitia</h4>
            <p class="mb-3 font-13">
                Berikut List Panitia SmunelJC Event Software Web Application
            </p>
            <div class="list-group list-custom list-group-m rounded-m">
                @foreach ($user->where('auth', 'Panitia') as $u)
                <a href="#" data-bs-toggle="offcanvas" data-bs-target="#edit-users{{$u->id}}" class="list-group-item">
                    @if ($u->gender == 'pria')
                    <img src="v30/images/pictures/Male.png" width="40" class="me-2 rounded-xs">
                    @else
                    <img src="v30/images/pictures/Female.png" width="40" class="me-2 rounded-xs">
                    @endif
                    <div class="ps-1"><strong class="font-600">{{$u->nama}}</strong><span>{{$u->auth}}</span>
                    </div>
                    <i class="bi bi-chevron-right"></i>
                </a>
                @endforeach
            </div>
        </div>
    </div>
    <div class="card card-style">
        <div class="content">
            <h4>Peserta</h4>
            <p class="mb-3 font-13">
                Berikut List Peserta SmunelJC Event Software Web Application
            </p>
            <div class="list-group list-custom list-group-m rounded-m">
                @foreach ($user->where('auth', 'Peserta')->sortBy('jc') as $u)
                <a href="#" data-bs-toggle="offcanvas" data-bs-target="#edit-users{{$u->id}}" class="list-group-item">
                    @if ($u->gender == 'pria')
                    <img src="v30/images/pictures/Male.png" width="40" class="me-2 rounded-xs">
                    @else
                    <img src="v30/images/pictures/Female.png" width="40" class="me-2 rounded-xs">
                    @endif
                    <div class="ps-1"><strong class="font-600">{{$u->nama}}</strong><span>{{$u->auth}} | {{$u->jc}}</span>
                    </div>
                    <i class="bi bi-chevron-right"></i>
                </a>
                @endforeach
            </div>
        </div>
    </div>
    <div class="card card-style">
        <div class="content">
            <h4>Juri</h4>
            <p class="mb-3 font-13">
                Berikut List Juri SmunelJC Event Software Web Application
            </p>
            <div class="list-group list-custom list-group-m rounded-m">
                @foreach ($user->where('auth', 'Juri') as $u)
                <a href="#" data-bs-toggle="offcanvas" data-bs-target="#edit-users{{$u->id}}" class="list-group-item">
                    @if ($u->gender == 'pria')
                    <img src="v30/images/pictures/Male.png" width="40" class="me-2 rounded-xs">
                    @else
                    <img src="v30/images/pictures/Female.png" width="40" class="me-2 rounded-xs">
                    @endif
                    <div class="ps-1"><strong class="font-600">{{$u->nama}}</strong><span>{{$u->auth}}</span>
                    </div>
                    <i class="bi bi-chevron-right"></i>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>

@foreach ($user as $u)
<div class="offcanvas offcanvas-modal rounded-m offcanvas-detached bg-theme hide"
    style="width: 340px; visibility: visible;" id="edit-users{{$u->id}}" aria-modal="true" role="dialog">
    <div class="content">
        <h5 class="mb-n1 font-12 color-highlight font-700 text-uppercase pt-1">User</h5>
        <h1 class="font-24 font-800 mb-3">Edit</h1>
        <div class="alert bg-fade2-blue alert-dismissible color-blue-dark rounded-s fade show pe-2" role="alert">
            <strong>Note:</strong> Kosongkan Password apabila tidak ingin mengganti password
        </div>
        <form action="user/edit" method="post">
            @csrf
            <div class="form-custom form-label form-border form-icon mb-3 bg-transparent">
                <i class="bi bi-at font-13"></i>
                <input type="text" name="id" value="{{$u->id}}" hidden>
                <input name="username" type="text" class="form-control rounded-xs" id="c1" placeholder="Username"
                    value="{{$u->username}}">
                <label for="c1" class="color-theme">Username</label>
                <span>(required)</span>
            </div>
            <div class="form-custom form-label form-border form-icon mb-3 bg-transparent">
                <i class="bi bi-person-circle font-13"></i>
                <input name="nama" type="text" class="form-control rounded-xs" id="c1" placeholder="Name"
                    value="{{$u->nama}}">
                <label for="c1" class="color-theme">Name</label>
                <span>(required)</span>
            </div>
            <div class="form-custom form-label form-border form-icon mb-3 bg-transparent">
                <i class="bi bi-check-circle-fill font-13"></i>
                <select name="auth" class="form-select rounded-xs" id="c6" aria-label="Floating label select example">
                    <option value="{{$u->auth}}">{{$u->auth}}</option>
                    <option value="Peserta">Peserta</option>
                    <option value="Juri">Juri</option>
                    <option value="Panitia">Panitia</option>
                </select>
            </div>
            <div class="form-custom form-label form-border form-icon mb-3 bg-transparent">
                <i class="bi bi-journals font-13"></i>
                <select name="jc" class="form-select rounded-xs" id="c6" aria-label="Floating label select example">
                    <option value="{{$u->jc}}">{{$u->jc}}</option>
                    <option value="02">MA Negeri 2 Makassar</option>
                    <option value="05">SMA Negeri 5 Makassar</option>
                    <option value="08">SMK Negeri 8 Makassar</option>
                    <option value="17">SMA Negeri 17 Makassar</option>
                    <option value="21">SMA Negeri 21 Makassar</option>
                </select>
            </div>
            <div class="form-custom form-label form-border form-icon mb-3 bg-transparent">
                <i class="bi bi-gender-ambiguous font-13"></i>
                <select name="gender" class="form-select rounded-xs" id="c6" aria-label="Floating label select example">
                    <option value="{{$u->gender}}">{{$u->gender}}</option>
                    <option value="pria">pria</option>
                    <option value="wanita">wanita</option>
                </select>
            </div>
            <div class="form-custom form-label form-border form-icon mb-4 bg-transparent">
                <i class="bi bi-asterisk font-13"></i>
                <input name="password" type="password" class="form-control rounded-xs" id="c2" placeholder="Password">
                <label for="c2" class="color-theme">Password</label>
            </div>
            <button type="submit" class="btn btn-full gradient-blue shadow-bg shadow-bg-s mt-4">Edit Akun</button>
            <div class="row">
                <div class="col-6 text-start">
                    <a href="#" data-bs-toggle="offcanvas" data-bs-target="#delete-account{{$u->id}}"
                        class="font-11 color-theme opacity-40 pt-3 d-block">Delete Account?</a>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="offcanvas offcanvas-bottom rounded-m offcanvas-detached hide" id="delete-account{{$u->id}}"
    style="visibility: visible;" aria-modal="true" role="dialog">
    <div class="gradient-red px-3 py-3">
        <div class="d-flex mt-1">
            <div class="align-self-center">
                <i class="bi bi-x-circle-fill font-22 pe-2 scale-box color-white"></i>
            </div>
            <div class="align-self-center">
                <h1 class="font-800 color-white mb-0">Hapus Akun?</h1>
            </div>
        </div>
        <p class="color-white opacity-60 pt-2">
            Yakin Untuk Menghapus User <strong>{{$u->username}}</strong>. <br> Akun yang telah di hapus tidak akan bisa
            dikembalikan lagi.
        </p>
        <a href="user/delete/{{$u->id}}" class="default-link btn btn-full btn-s bg-white color-black">Tetap Hapus</a>
    </div>
</div>

@endforeach

<div class="offcanvas offcanvas-bottom rounded-m offcanvas-detached bg-theme hide" id="add-user"
    style="visibility: visible;" aria-modal="true" role="dialog">
    <div class="content">
        <form action="user/create" method="post">
            @csrf
            <h5 class="mb-n1 font-12 color-highlight font-700 text-uppercase pt-1">User</h5>
            <h1 class="font-24 font-800 mb-3">Register</h1>
            <div class="form-custom form-label form-border form-icon mb-3 bg-transparent">
                <i class="bi bi-at font-13"></i>
                <input name="username" type="text" class="form-control rounded-xs" id="c1" placeholder="Username"
                    required>
                <label for="c1" class="color-theme">Username</label>
                <span>(required)</span>
            </div>
            <div class="form-custom form-label form-border form-icon mb-3 bg-transparent">
                <i class="bi bi-person-circle font-13"></i>
                <input name="nama" type="text" class="form-control rounded-xs" id="c1" placeholder="Name" required>
                <label for="c1" class="color-theme">Name</label>
                <span>(required)</span>
            </div>
            <div class="form-custom form-label form-border form-icon mb-3 bg-transparent">
                <i class="bi bi-check-circle-fill font-13"></i>
                <select name="auth" class="form-select rounded-xs" id="c6" aria-label="Floating label select example"
                    required>
                    <option value="">Jenis User</option>
                    <option value="Peserta">Peserta</option>
                    <option value="Juri">Juri</option>
                    <option value="Panitia">Panitia</option>
                </select>
            </div>
            <div class="form-custom form-label form-border form-icon mb-3 bg-transparent">
                <i class="bi bi-journals font-13"></i>
                <select name="jc" class="form-select rounded-xs" id="c6" aria-label="Floating label select example">
                    <option value="">Sekolah</option>
                    <option value="02">MA Negeri 2 Makassar</option>
                    <option value="05">SMA Negeri 5 Makassar</option>
                    <option value="08">SMK Negeri 8 Makassar</option>
                    <option value="17">SMA Negeri 17 Makassar</option>
                    <option value="21">SMA Negeri 21 Makassar</option>
                </select>
            </div>
            <div class="form-custom form-label form-border form-icon mb-3 bg-transparent">
                <i class="bi bi-gender-ambiguous font-13"></i>
                <select name="gender" class="form-select rounded-xs" id="c6" aria-label="Floating label select example">
                    <option value="">Gender</option>
                    <option value="pria">pria</option>
                    <option value="wanita">wanita</option>
                </select>
            </div>
            <div class="form-custom form-label form-border form-icon mb-4 bg-transparent">
                <i class="bi bi-asterisk font-13"></i>
                <input name="password" type="text" class="form-control rounded-xs" id="c2" placeholder="Password"
                    required>
                <label for="c2" class="color-theme">Password</label>
            </div>
            <button type="submit" class="btn btn-full gradient-blue shadow-bg shadow-bg-s mt-4">Buat Akun</button>
        </form>
    </div>
</div>

@include('Layout.footer')
