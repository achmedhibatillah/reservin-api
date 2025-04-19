<div class="row d-flex flex-wrap justify-content-center align-items-stretch">
    <div class="col-2">
        <a href="{{ url('dokumentasi/api/room') }}" class="td-hover text-dark fsz-10"><i class="fas fa-arrow-left"></i> back</a>
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
    <form action="{{ url('api/room/update') }}" method="post">
        @method('PUT')
        <div class="mb-3">
            <p class="m-0">Request Method :</p>
            <p class="text-primary fw-bold">PUT</p>
        </div>
        <div class="mb-3">
            <p class="m-0">Request URL :</p>
            <div class="p-2 overflow-scroll">
                <p class="m-0 fw-bold" style="white-space: nowrap;">{{ url('api/room/update') }}</p>
            </div>
        </div>
        <div class="">
            <p class="m-0">Request x-www-form :</p>
            <ul>
                <li>
                    <p class="m-0">access_token</p>
                    <input type="text" name="access_token" class="form-control" placeholder="..." value="{{ env('ACCESS_TOKEN') }}">
                </li>
                <li>
                    <p class="m-0">room_id</p>
                    <input type="text" name="room_id" class="form-control" placeholder="..." value="{{ ($rooms->isNotEmpty()) ? $rooms[0]->room_id : '' }}">
                </li>
                <li>
                    <p class="m-0">room_name</p>
                    <input type="text" name="room_name" class="form-control" placeholder="..." value="F 3.12">
                </li>
                <li>
                    <p class="m-0">room_desc</p>
                    <textarea name="room_desc" class="form-control">Working space kelas eksklusif dengan harga terjangkau.</textarea>
                </li>
                <li>
                    <p class="m-0">room_kategori</p>
                    <input type="text" name="room_kategori" class="form-control" placeholder="..." value="Lantai 1">
                </li>
                <li>
                    <p class="m-0">room_capacity</p>
                    <input type="text" name="room_capacity" class="form-control" placeholder="..." value="12">
                </li>
                <li>
                    <p class="m-0">room_price</p>
                    <input type="text" name="room_price" class="form-control" placeholder="..." value="550000">
                </li>
                <li>
                    <p class="m-0">room_available (0 / 1)</p>
                    <input type="text" name="room_available" class="form-control" placeholder="..." value="1">
                </li>
                <li>
                    <p class="m-0">room_start</p>
                    <input type="text" name="room_start" class="form-control" placeholder="..." value="08:00">
                </li>
                <li>
                    <p class="m-0">room_end</p>
                    <input type="text" name="room_end" class="form-control" placeholder="..." value="11:30">
                </li>
            </ul>
        </div>
        <div class="d-flex">
            <button type="submit" class="btn btn-warning d-block">coba <i class="fas fa-external-link-alt"></i></button>
        </div>
    </form>
</div>
