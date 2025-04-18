<div class="row d-flex flex-wrap justify-content-center align-items-stretch">
    <div class="col-2">
        <p class="m-0 mt-2">API :</p>
    </div>
    <div class="col-3 p-1 d-flex">
        <a href="{{ url('dokumentasi/api/room/all') }}" class="btn btn-sm d-flex justify-content-center align-items-center btn-success w-100 fsz-10 h-100">Lihat semua data room</a>
    </div>
    <div class="col-3 p-1 d-flex">
        <a href="{{ url('dokumentasi/api/room/detail') }}" class="btn btn-sm d-flex justify-content-center align-items-center btn-success w-100 fsz-10 h-100">Lihat detail data room</a>
    </div>
    <div class="col-3 p-1 d-flex">
        <a href="{{ url('dokumentasi/api/room/add') }}" class="btn btn-sm d-flex justify-content-center align-items-center btn-warning w-100 fsz-10 h-100">Tambah data room</a>
    </div>
    <div class="col-2"></div>
    <div class="col-3 p-1 d-flex">
        <a href="{{ url('dokumentasi/api/room/image/add') }}" class="btn btn-sm d-flex justify-content-center align-items-center btn-warning w-100 fsz-10 h-100">Tambah data gambar room</a>
    </div>
    <div class="col-3 p-1 d-flex">
        <a href="{{ url('dokumentasi/api/room/facility/add') }}" class="btn btn-sm d-flex justify-content-center align-items-center btn-warning w-100 fsz-10 h-100">Tambah data fasilitas room</a>
    </div>
    <div class="col-3 p-1 d-flex">
        <a href="{{ url('dokumentasi/api/room/update') }}" class="btn btn-sm d-flex justify-content-center align-items-center btn-primary w-100 fsz-10 h-100">Ubah data room</a>
    </div>
    <div class="col-2"></div>
    <div class="col-3 p-1 d-flex">
        <a href="{{ url('dokumentasi/api/room/delete') }}" class="btn btn-sm d-flex justify-content-center align-items-center btn-danger w-100 fsz-10 h-100">Hapus data room</a>
    </div>
    <div class="col-3 p-1 d-flex">
        <a href="{{ url('dokumentasi/api/room/image/delete') }}" class="btn btn-sm d-flex justify-content-center align-items-center btn-danger w-100 fsz-10 h-100">Hapus data gambar room</a>
    </div>
    <div class="col-3 p-1 d-flex">
        <a href="{{ url('dokumentasi/api/room/facility/delete') }}" class="btn btn-sm d-flex justify-content-center align-items-center btn-danger w-100 fsz-10 h-100">Hapus data fasilitas room</a>
    </div>
</div>
<hr>
<div class="">
    <p class="m-0 fsz-10 text-secondary">Tabel utama</p>
    <p class="fw-bold">room</p>
    <p class="m-0 fsz-10 text-secondary">Tabel yang berelasi</p>
    <p class="fw-bold">-</p>
</div>
<hr>
<div class="">
    <p class="">Kolom :</p>
    <ul>
        <li class="mb-3">
            <p class="m-0 font-mono mb-2">room_id</p>
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
            <p class="m-0 font-mono mb-2">room_fullname</p>
            <div class="m-0 d-flex flex-wrap align-items-center gap-2 text-secondary">
                <div class="d-flex align-items-center lh-1">
                    <i class="fas fa-circle fsz-5 me-1"></i>
                    <p class="m-0 fsz-12">Varchar(255)</p>
                </div>
            </div>
        </li>
        <li class="mb-3">
            <p class="m-0 font-mono mb-2">room_email</p>
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
            <p class="m-0 font-mono mb-2">room_pass</p>
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
    <img src="{{ asset('assets/images/static/erd-room.png') }}" style="width:40%;">
</div>
