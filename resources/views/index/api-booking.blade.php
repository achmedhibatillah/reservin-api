<div class="row d-flex flex-wrap justify-content-center align-items-stretch">
    <div class="col-2">
        <p class="m-0 mt-2">API :</p>
    </div>
    <div class="col-3 p-1 d-flex">
        <a href="{{ url('dokumentasi/api/booking/all') }}" class="btn btn-sm d-flex justify-content-center align-items-center btn-success w-100 fsz-10 h-100">Lihat semua data booking</a>
    </div>
    <div class="col-3 p-1 d-flex">
        <a href="{{ url('dokumentasi/api/booking/detail') }}" class="btn btn-sm d-flex justify-content-center align-items-center btn-success w-100 fsz-10 h-100">Lihat detail data booking</a>
    </div>
    <div class="col-3 p-1 d-flex">
        <a href="{{ url('dokumentasi/api/booking/add') }}" class="btn btn-sm d-flex justify-content-center align-items-center btn-warning w-100 fsz-10 h-100">Tambah data booking</a>
    </div>
    <div class="col-2"></div>
    <div class="col-3 p-1 d-flex">
        <a href="{{ url('dokumentasi/api/booking/update') }}" class="btn btn-sm d-flex justify-content-center align-items-center btn-primary w-100 fsz-10 h-100">Ubah data booking</a>
    </div>
    <div class="col-3 p-1 d-flex">
        <a href="{{ url('dokumentasi/api/booking/delete') }}" class="btn btn-sm d-flex justify-content-center align-items-center btn-danger w-100 fsz-10 h-100">Hapus data booking</a>
    </div>
    <div class="col-3"></div>
</div>
<hr>
<div class="">
    <p class="m-0 fsz-10 text-secondary">Tabel utama</p>
    <p class="fw-bold">booking</p>
    <p class="m-0 fsz-10 text-secondary">Tabel yang berelasi</p>
    <ul class="fw-bold">
        <li>customer : customer (1) - booking (M)</li>
        <li>room : booking (1) - room (M)</li>
    </ul>
</div>
<hr>
<div class="">
    <p class="">Kolom :</p>
    <ul>
        <li class="mb-3">
            <p class="m-0 font-mono mb-2">booking_id</p>
            <div class="m-0 d-flex flex-wrap align-items-center gap-2 text-secondary">
                <div class="d-flex align-items-center lh-1">
                    <i class="fas fa-circle fsz-5 me-1"></i>
                    <p class="m-0 fsz-12">Primary key</p>
                </div>
                <div class="d-flex align-items-center lh-1">
                    <i class="fas fa-circle fsz-5 me-1"></i>
                    <p class="m-0 fsz-12">Varchar(35)</p>
                </div>
                <div class="d-flex align-items-center lh-1">
                    <i class="fas fa-circle fsz-5 me-1"></i>
                    <p class="m-0 fsz-12">Auto generate value</p>
                </div>
            </div>
        </li>
        <li class="mb-3">
            <p class="m-0 font-mono mb-2">booking_fullname</p>
            <div class="m-0 d-flex flex-wrap align-items-center gap-2 text-secondary">
                <div class="d-flex align-items-center lh-1">
                    <i class="fas fa-circle fsz-5 me-1"></i>
                    <p class="m-0 fsz-12">Varchar(255)</p>
                </div>
            </div>
        </li>
        <li class="mb-3">
            <p class="m-0 font-mono mb-2">booking_email</p>
            <div class="m-0 d-flex flex-wrap align-items-center gap-2 text-secondary">
                <div class="d-flex align-items-center lh-1">
                    <i class="fas fa-circle fsz-5 me-1"></i>
                    <p class="m-0 fsz-12">Varchar(255)</p>
                </div>
                <div class="d-flex align-items-center lh-1">
                    <i class="fas fa-circle fsz-5 me-1"></i>
                    <p class="m-0 fsz-12">Unique</p>
                </div>
            </div>
        </li>
        <li class="mb-3">
            <p class="m-0 font-mono mb-2">booking_pass</p>
            <div class="m-0 d-flex flex-wrap align-items-center gap-2 text-secondary">
                <div class="d-flex align-items-center lh-1">
                    <i class="fas fa-circle fsz-5 me-1"></i>
                    <p class="m-0 fsz-12">Varchar(255)</p>
                </div>
                <div class="d-flex align-items-center lh-1">
                    <i class="fas fa-circle fsz-5 me-1"></i>
                    <p class="m-0 fsz-12">Hashing with SHA-256</p>
                </div>
            </div>
        </li>
        <li class="mb-3">
            <p class="m-0 font-mono mb-2">created_at</p>
            <div class="m-0 d-flex flex-wrap align-items-center gap-2 text-secondary">
                <div class="d-flex align-items-center lh-1">
                    <i class="fas fa-circle fsz-5 me-1"></i>
                    <p class="m-0 fsz-12">Auto timestamp</p>
                </div>
            </div>
        </li>
        <li class="mb-3">
            <p class="m-0 font-mono mb-2">updated_at</p>
            <div class="m-0 d-flex flex-wrap align-items-center gap-2 text-secondary">
                <div class="d-flex align-items-center lh-1">
                    <i class="fas fa-circle fsz-5 me-1"></i>
                    <p class="m-0 fsz-12">Auto timestamp</p>
                </div>
            </div>
        </li>
    </ul>
</div>
<hr>
<div class="d-flex justify-content-start">
    <img src="{{ asset('assets/images/static/erd-booking.png') }}" style="width:80%;">
</div>
