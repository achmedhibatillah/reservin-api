<div class="d-flex justify-content-center align-items-center px-5" style="min-height:100vh;padding:100px 0;">
    <div class="" style="max-width:500px;">
        <div class="card shadow m-0 p-3 mb-3">
            <div class="d-flex flex-column justify-content-center align-items-center gap-2">
                <img src="{{ asset('assets/images/static/logo-text.png') }}" class="w-50 mt-2">
                <p class="m-0 text-secondary">API Documentation</p>
            </div>
        </div>
        <div class="card shadow m-0 p-3 mb-3">
            <h5>Informasi API</h5>
            <hr>
            <p>Demi keamanan data dari akses yang tidak sah, akses terhadap API Reservin hanya dapat diperoleh melalui token akses (access_token) yang disertakan dalam request. Berikut token akses Reservin :</p>
            <div class="d-flex align-items-center gap-2 w-100">
                <div class="overflow-hidden">
                    <p id="textToCopy" class="hide-text-1 m-0" style="width:250px;">49b7598d467da26cc9661f55b8b28a9d209171de8cdfa28c7d48db311c9e8f0d</p>
                </div>
                <div class="">
                    <div class="btn btn-secondary lh-1 fsz-10" onclick="copyText()">
                        copy <i class="fas fa-copy"></i>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <a href="{{ url('dokumentasi/api') }}" class="btn btn-success btn-sm">Lihat dokumentasi lengkap<i class="fas fa-arrow-right ms-2"></i> </a>
            </div>
        </div>
        <div class="card shadow m-0 p-3">
            <h5>Informasi Database</h5>
            <hr>
            <div class="mb-2">
                <p class="m-0 fsz-10 text-secondary">Database</p>
                <p class="m-0 ms-2">reservin</p>
            </div>
            <div class="mb-2">
                <p class="m-0 fsz-10 text-secondary">Port</p>
                <p class="m-0 ms-2">3306</p>
            </div>
            <p class="m-0">Daftar tabel :</p>
            <?php $i = 1 ?>
            @foreach($tables as $x)
                <div class="">{{ $i . '. ' . $x->Tables_in_reservin }}</div>
            <?php $i++ ?>
            @endforeach 
        </div>
    </div>
</div>