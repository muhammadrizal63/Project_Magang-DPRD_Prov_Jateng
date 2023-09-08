<div class="panel panel-default">
    <div class="panel-heading">
        Tambah Data
    </div>
    <div class="panel-body">

        <div class="row">
            <div class="col-md-12">

                <form method="POST">
                    <div class="form-group">
                        <label>Nama</label>
                        <input class="form-control" name="name" />
                    </div>

                    <div class="form-group">
                        <label>Username</label>
                        <input class="form-control" name="username" />
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" name="email" />
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" name="password" />
                    </div>

                    <div>
                        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>

<?php
$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$simpan = $_POST['simpan'];
$simpan = $_POST['simpan'];

if ($simpan) {
    $sql = $koneksi->query("INSERT INTO tb_user (name, username, email, password)
        VALUES('$name', '$username', '$email', '$password')");

    if ($sql) {
?>
        <script type="text/javascript">
            alert("Data Berhasil Ditambahkan");
            window.location.href = "?page=user";
        </script>
<?php
    }
}
?>