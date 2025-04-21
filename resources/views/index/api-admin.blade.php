<div class="row d-flex flex-wrap justify-content-center align-items-stretch">
    <div class="col-2">
        <p class="m-0 mt-2">API :</p>
    </div>
    <div class="col-3 p-1 d-flex">
        <a href="{{ url('dokumentasi/api/admin/all') }}" class="btn btn-sm d-flex justify-content-center align-items-center btn-success w-100 fsz-10 h-100">Lihat semua data admin</a>
    </div>
    <div class="col-3 p-1 d-flex">
        <a href="{{ url('dokumentasi/api/admin/detail') }}" class="btn btn-sm d-flex justify-content-center align-items-center btn-success w-100 fsz-10 h-100">Lihat detail data admin</a>
    </div>
    <div class="col-3 p-1 d-flex">
        <a href="{{ url('dokumentasi/api/admin/add') }}" class="btn btn-sm d-flex justify-content-center align-items-center btn-warning w-100 fsz-10 h-100">Tambah data admin</a>
    </div>
    <div class="col-2"></div>
    <div class="col-3 p-1 d-flex">
        <a href="{{ url('dokumentasi/api/admin/update') }}" class="btn btn-sm d-flex justify-content-center align-items-center btn-primary w-100 fsz-10 h-100">Ubah data admin</a>
    </div>
    <div class="col-3 p-1 d-flex">
        <a href="{{ url('dokumentasi/api/admin/delete') }}" class="btn btn-sm d-flex justify-content-center align-items-center btn-danger w-100 fsz-10 h-100">Hapus data admin</a>
    </div>
    <div class="col-3"></div>
</div>
<hr>
<div class="">
    <p class="m-0 fsz-10 text-secondary">Tabel utama</p>
    <p class="fw-bold">admin</p>
    <p class="m-0 fsz-10 text-secondary">Tabel yang berelasi</p>
    <p class="fw-bold">-</p>
</div>
<hr>
<div class="">
    <p class="">Kolom :</p>
    <ul>
        <li class="mb-3">
            <p class="m-0 font-mono mb-2">admin_id</p>
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
            <p class="m-0 font-mono mb-2">admin_fullname</p>
            <div class="m-0 d-flex flex-wrap align-items-center gap-2 text-secondary">
                <div class="d-flex align-items-center lh-1">
                    <i class="fas fa-circle fsz-5 me-1"></i>
                    <p class="m-0 fsz-12">Varchar(255)</p>
                </div>
            </div>
        </li>
        <li class="mb-3">
            <p class="m-0 font-mono mb-2">admin_email</p>
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
            <p class="m-0 font-mono mb-2">admin_who</p>
            <div class="m-0 d-flex flex-wrap align-items-center gap-2 text-secondary">
                <div class="d-flex align-items-center lh-1">
                    <i class="fas fa-circle fsz-5 me-1"></i>
                    <p class="m-0 fsz-12">Integer</p>
                </div>
                <div class="d-flex align-items-center lh-1">
                    <i class="fas fa-circle fsz-5 me-1"></i>
                    <p class="m-0 fsz-12">Only 0 (root) or 1 (admin)</p>
                </div>
                <div class="d-flex align-items-center lh-1">
                    <i class="fas fa-circle fsz-5 me-1"></i>
                    <p class="m-0 fsz-12">Root data cannot be added, edited, or deleted</p>
                </div>
            </div>
        </li>
        <li class="mb-3">
            <p class="m-0 font-mono mb-2">admin_pass</p>
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
    <img src="{{ asset('assets/images/static/erd-admin.png') }}" style="width:40%;">
</div>
