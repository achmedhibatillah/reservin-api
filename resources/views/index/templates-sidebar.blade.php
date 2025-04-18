<style>
#content { width:100%; }
.active { color:rgb(56, 124, 202); font-weight: bold; }
.border-top { border-top: 1px solid rgb(220, 220, 220); }
.border-bottom { border-bottom: 1px solid rgb(220, 220, 220); }
@media screen and (min-width: 767px) {
#content { max-width:1000px; }
}
</style>

<div class="d-flex justify-content-center" style="padding:20px 0 100px 0;">
    <div class="row m-0 p-0" id="content" style="min-height:100vh;">
        <div class="col-md-3 m-0 p-1 pe-md-3">
            <div class="card shadow m-0 p-3 mb-2 bg-light rounded-s cursor-pointer" onclick="window.location.href='<?= url('') ?>'">
                <div class="d-flex flex-column justify-content-center align-items-center gap-2">
                    <img src="{{ asset('assets/images/static/logo-text.png') }}" class="w-75 mt-2">
                    <p class="m-0 text-secondary">API Documentation</p>
                </div>
            </div>
            <div class="card shadow m-0 p-0 py-3 bg-light">
                <div class="px-2 mb-1">
                    <p class="m-0 px-1 fw-800 text-secondary"><i class="fas fa-caret-down"></i> Umum</p>
                </div>
                <div class="px-2">
                    <a href="{{ url('dokumentasi/api') }}" class="td-none hover border-top border-bottom d-block px-1 py-2 ps-3 lh-1 {{ ($info['page'] == 'api') ? 'active' : 'text-dark' }}">Pendahuluan</a>
                </div>
                <div class="px-2">
                    <a href="{{ url('dokumentasi/api/token') }}" class="td-none hover border-bottom d-block px-1 py-2 ps-3 lh-1 {{ ($info['page'] == 'api-token') ? 'active' : 'text-dark' }}">Token akses</a>
                </div>
                <div class="px-2 mb-1 mt-4">
                    <p class="m-0 px-1 fw-800 text-secondary"><i class="fas fa-caret-down"></i> Akses API</p>
                </div>
                <div class="px-2">
                    <a href="{{ url('dokumentasi/api/customer') }}" class="td-none hover border-top border-bottom d-block px-1 py-2 ps-3 lh-1 {{ ($info['page'] == 'api-customer') ? 'active' : 'text-dark' }}">Customer</a>
                </div>
                <div class="px-2">
                    <a href="{{ url('dokumentasi/api/admin') }}" class="td-none hover border-bottom d-block px-1 py-2 ps-3 lh-1 {{ ($info['page'] == 'api-admin') ? 'active' : 'text-dark' }}">Admin</a>
                </div>
                <div class="px-2">
                    <a href="{{ url('dokumentasi/api/room') }}" class="td-none hover border-bottom d-block px-1 py-2 ps-3 lh-1 {{ ($info['page'] == 'api-room') ? 'active' : 'text-dark' }}">Room</a>
                </div>
                <div class="px-2">
                    <a href="{{ url('dokumentasi/api/booking') }}" class="td-none hover border-bottom d-block px-1 py-2 ps-3 lh-1 {{ ($info['page'] == 'api-booking') ? 'active' : 'text-dark' }}">Booking</a>
                </div>
            </div>
        </div>
        <div class="col-md-9 m-0 p-1 pt-3 pt-md-1">
            <div class="card m-0 p-3 bg-light text-dark shadow">
                <h3 class="fw-800 m-0">{{ $info['title'] }}</h3>
                <hr>