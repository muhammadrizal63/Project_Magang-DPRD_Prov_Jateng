<?php
$nik =  $_GET['id'];
$koneksi->query("delete from tb_aduan where nik='$nik'");

?>

<script type="text/javascript">
    window.location.href = "?page=aduan";
</script>