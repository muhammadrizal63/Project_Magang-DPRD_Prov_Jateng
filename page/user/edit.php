<?php

$id = $_GET['id'];
$sql = $koneksi->query("select * from tb_user where id='$id'");
$tampil = $sql->fetch_assoc();

?>

<div class="panel panel-default">
    <div class="panel-heading">
        Edit Data
    </div>
    <div class="panel-body">

        <div class="row">
            <div class="col-md-12">

                <form method="POST">

                    <div class="form-group">
                        <label>Nama</label>
                        <input class="form-control" name="name" value="<?php echo $tampil['name']; ?>">
                    </div>

                    <div class="form-group">
                        <label>Username</label>
                        <input class="form-control" name="username" value="<?php echo $tampil['username']; ?>" />
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" name="email" value="<?php echo $tampil['email']; ?>" />
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" name="password" value="<?php echo $tampil['password']; ?>" />
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


if ($simpan) {
    $sql = $koneksi->query("update tb_user set name='$name', username='$username', email='$email', 
        password='$password' where id='$id'");

    if ($sql) {
?>
        <script type="text/javascript">
            alert("Data Berhasil Terupdate");
            window.location.href = "?page=user";
        </script>
<?php
    }
}
?>