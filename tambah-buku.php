<h5>Halaman Tambah Buku.</h5>
<a href="?url=login-user" class="btn btn-primary"> KEMBALI </a>
<hr>
<form method="post" action="?url=proses-tambah-buku">
    <div class="form-group mb-2">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Nomor Telepon</label>
        <input type="number" name="no_telp" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>asal</label>
        <input type="text" name="asal" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>pekerjaan</label>
        <input type="text" name="pekerjaan" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>keperluan</label>
        <input type="text" name="keperluan" class="form-control" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success"> SIMPAN </button>
        <button type="reset" class="btn btn-warning"> KOSONGKAN </button>
    </div>
</form>