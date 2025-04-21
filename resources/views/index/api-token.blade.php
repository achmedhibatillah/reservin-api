<p>Demi keamanan data dari akses yang tidak sah, akses terhadap API Reservin hanya dapat diperoleh melalui token akses (<i>access_token</i>) yang disertakan dalam <i>request</i>. Berikut token akses Reservin :</p>
<div class="d-flex align-items-center gap-2 w-100 mb-3">
    <div class="overflow-hidden">
        <p id="textToCopy" class="hide-text-1 m-0" style="width:250px;">49b7598d467da26cc9661f55b8b28a9d209171de8cdfa28c7d48db311c9e8f0d</p>
    </div>
    <div class="">
        <div class="btn btn-secondary lh-1 fsz-10" onclick="copyText()">
            copy <i class="fas fa-copy"></i>
        </div>
    </div>
</div>
<hr>
<p>Variabel token akses wajib disertakan dalam setiap <i>request</i> ke API server yang dapat ditulis sebagai :</p>
<p class="font-mono">access_token</p>