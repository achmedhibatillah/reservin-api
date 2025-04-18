<nav class="navbar p-0 navbar-expand-lg w-100 position-fixed bg-transparent">
    <div class="row m-0 p-0 w-100 d-none d-md-flex">
        <div class="col-md-3 d-flex justify-content-center align-items-center">
            <img src="{{ asset('assets/images/static/logo-text.png') }}" class="he-25">
        </div>
        <div class="col-md-6 collapse navbar-collapse d-flex flex-column justify-content-center">
            <div class="d-flex justify-content-center gap-5 mb-2 mb-lg-0 bg-divght w-75 shadow-l bg-light" style="border-bottom-left-radius:70px;border-bottom-right-radius:70px;padding:20px 90px;border-top-left-radius:-70px;border-top-right-radius:-70px;">
                <div class="nav-item">
                    <a class="td-none text-dark" aria-current="page" href="#">Beranda</a>
                </div>
                <div class="nav-item">
                    <a class="td-none text-dark" aria-current="page" href="#">Tentang</a>
                </div>
                <div class="nav-item">
                    <a class="td-none text-dark" aria-current="page" href="#">Kegiatan</a>
                </div>
                <div class="nav-item">
                    <a class="td-none text-dark" aria-current="page" href="#">Pemesanan</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 d-flex justify-content-center align-items-center">
            <a href="{{ url('login') }}" class="btn btn-outline-light px-4 rounded-s">Login</a>
        </div>
    </div>
</nav>
