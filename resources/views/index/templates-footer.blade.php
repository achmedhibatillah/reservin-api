<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script>
function copyText() {
    const text = document.getElementById("textToCopy").textContent;
    navigator.clipboard.writeText(text).then(function() {
        alert("Token akses berhasil disalin!");
    }, function(err) {
        alert("Gagal menyalin token akses!");
        console.error("Error:", err);
    });
}
</script>

</body>
</html>