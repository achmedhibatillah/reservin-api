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
    <form action="{{ url('api/customer/delete') }}" method="post">
        @csrf 
        @method('DELETE')
        <div class="mb-3">
            <p class="m-0">Request Method :</p>
            <p class="text-danger fw-bold">DELETE</p>
        </div>
        <div class="mb-3">
            <p class="m-0">Request URL :</p>
            <div class="p-2 overflow-scroll">
                <p class="m-0 fw-bold" style="white-space: nowrap;">{{ url('api/customer/add') }}</p>
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
                    <input type="text" name="customer_id" class="form-control" placeholder="..." value="{{ ($customers->isNotEmpty()) ? $customers[0]->customer_id : '' }}">
                </li>
            </ul>
        </div>
        @if(!$customers->isNotEmpty())
            <p class="m-0 ms-2 fsz-10 text-danger mb-3"><i class="fas fa-exclamation-circle me-1"></i>Data customer masih kosong. Tambah <a href="{{ url('dokumentasi/api/customer/add') }}" class="td-hover">di sini.</a></p>
        @endif
        <div class="d-flex">
            <button type="submit" class="btn btn-danger d-block">coba <i class="fas fa-external-link-alt"></i></button>
        </div>
    </form>
</div>
