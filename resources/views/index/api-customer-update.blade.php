<div class="row d-flex flex-wrap justify-content-center align-items-stretch">
    <div class="col-2">
        <a href="{{ url('dokumentasi/api/customer') }}" class="td-hover text-dark fsz-10"><i class="fas fa-arrow-left"></i> back</a>
    </div>
    <div class="col-3 p-1 d-flex">
        <a href="{{ url('dokumentasi/api/customer/all') }}" class="btn btn-sm d-flex justify-content-center align-items-center btn-success w-100 fsz-10 h-100">Lihat semua data customer</a>
    </div>
    <div class="col-3 p-1 d-flex">
        <a href="{{ url('dokumentasi/api/customer/detail') }}" class="btn btn-sm d-flex justify-content-center align-items-center btn-success w-100 fsz-10 h-100">Lihat detail data customer</a>
    </div>
    <div class="col-3 p-1 d-flex">
        <a href="{{ url('dokumentasi/api/customer/add') }}" class="btn btn-sm d-flex justify-content-center align-items-center btn-warning w-100 fsz-10 h-100">Tambah data customer</a>
    </div>
    <div class="col-2"></div>
    <div class="col-3 p-1 d-flex">
        <a href="{{ url('dokumentasi/api/customer/update') }}" class="btn btn-sm d-flex justify-content-center align-items-center btn-primary w-100 fsz-10 h-100">Ubah data customer</a>
    </div>
    <div class="col-3 p-1 d-flex">
        <a href="{{ url('dokumentasi/api/customer/delete') }}" class="btn btn-sm d-flex justify-content-center align-items-center btn-danger w-100 fsz-10 h-100">Hapus data customer</a>
    </div>
    <div class="col-3"></div>
</div>
<hr>
<div class="">
    <form action="{{ url('api/customer/update') }}" method="post">
        @method('PUT')
        <div class="mb-3">
            <p class="m-0">Request Method :</p>
            <p class="text-primary fw-bold">PUT</p>
        </div>
        <div class="mb-3">
            <p class="m-0">Request URL :</p>
            <div class="p-2 overflow-scroll">
                <p class="m-0 fw-bold" style="white-space: nowrap;">{{ url('api/customer/update') }}</p>
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
                    <p class="m-0">customer_id</p>
                    <input type="text" name="customer_fullname" class="form-control" placeholder="..." value="{{ ($customers->isNotEmpty()) ? $customers[0]->customer_id : '' }}">
                </li>
                <li>
                    <p class="m-0">customer_fullname</p>
                    <input type="text" name="customer_fullname" class="form-control" placeholder="..." value="Muhammad Raffi Ghifari">
                </li>
                <li>
                    <p class="m-0">customer_email</p>
                    <input type="text" name="customer_email" class="form-control" placeholder="..." value="rafi@gmail.com">
                </li>
                <li>
                    <p class="m-0">customer_pass</p>
                    <input type="text" name="customer_pass" class="form-control" placeholder="..." value="password123">
                </li>
            </ul>
        </div>
        <div class="d-flex">
            <button type="submit" class="btn btn-primary d-block">coba <i class="fas fa-external-link-alt"></i></button>
        </div>
    </form>
</div>
