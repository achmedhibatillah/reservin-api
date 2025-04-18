<p>Reservin API dibuat untuk aplikasi web dan mobile demi mempermudah akses terhadap database dalam server utama (MySQL). API yang tersedia menyesuaikan dengan struktur <i>database</i> Reservin. Berikut rancangan dari <i>Entity Relational Database</i> (ERD) :</p>
<img src="{{ asset('assets/images/static/erd.png') }}" class="w-100 mb-3">
<p>Server API Reservin menyediakan beberapa <i>method</i> untuk dikonsumsi, antara lain :</p>
<ul class="ps-3">
    <li><b class="text-success">GET</b> → Untuk operasi <i>read</i>.</li>
    <li><b class="text-warning">POST</b> → Untuk operasi <i>create</i>.</li>
    <li><b class="text-primary">PUT</b> → Untuk operasi <i>update</i>.</li>
    <li><b class="text-danger">DELETE</b> → Untuk operasi <i>delete</i>.</li>
</ul>
<p>
    Keempat <i>method</i> ini tersedia untuk semua tabel (kecuali tabel yang berelasi 1-1).
    Terdapat dua aturan khusus dalam pengiriman data, yakni :
    <table>
        <tr>
            <td style="width:10px;">1.</td>
            <td>Data dikirim melalui <i class="fw-bold">request header</i>, yakni URL.</td>
        </tr>
        <tr>
            <td style="width:10px;"></td>
            <td><b class="text-success">
                GET</b> merupakan <i>method</i> yang menggunakan aturan ini.
                <img src="{{ asset('assets/images/static/postman-request-url.png') }}" class="w-100 mb-3">
                Dalam gambar di atas, data <i>access_token</i> dapat dikirim melalui URL.
            </td>
        </tr>
        <tr>
            <td><div class="text-light">.</div></td>
        </tr>
        <tr>
            <td style="width:10px;">2.</td>
            <td>Data dikirim melalui <i class="fw-bold">request body</i>, yakni x-www-form.</td>
        </tr>
        <tr>
            <td style="width:10px;"></td>
            <td>
                <b class="text-warning">POST</b>, <b class="text-primary">PUT</b>, dan <b class="text-danger">DELETE</b> merupakan <i>method</i> yang menggunakan aturan ini.
                <img src="{{ asset('assets/images/static/postman-request-form.png') }}" class="w-100 mb-3">
                Dalam gambar di atas, data <i>access_token</i>, <i>room_name</i>, dan data lainnya tidak dikirim melalui URL, namun melalui x-www-form yang ada dalam <i>request body</i>.
            </td>
        </tr>
    </table>
</p>