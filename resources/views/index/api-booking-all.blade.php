<div class="row d-flex flex-wrap justify-content-center align-items-stretch">
    <div class="col-2">
        <a href="{{ url('dokumentasi/api/booking') }}" class="td-hover text-dark fsz-10"><i class="fas fa-arrow-left"></i> back</a>
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
    <div class="mb-3">
        <p class="m-0">Request Method :</p>
        <p class="text-success fw-bold">GET</p>
    </div>
    <div class="mb-3">
        <p class="m-0">Request URL :</p>
        <div class="p-2 overflow-scroll">
            <p class="m-0 fw-bold" style="white-space: nowrap;">{{ url('api/booking/all?access_token=' . env('ACCESS_TOKEN')) }}</p>
        </div>
    </div>
    <div class="">
        <p class="m-0">Request x-www-form :</p>
        <p class="text-secondary">Tidak perlu</p>
    </div>
    <div class="d-flex">
        <a href="{{ url('api/booking/all?access_token=' . env('ACCESS_TOKEN')) }}" target="_blank" class="btn btn-success d-block">coba <i class="fas fa-external-link-alt"></i></a>
    </div>
</div>
