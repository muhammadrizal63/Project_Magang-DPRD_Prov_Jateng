<?php
$id =  $_GET['id'];
$koneksi->query("delete from tb_log where id='$id'");

?>

<script type="text/javascript">
    window.location.href = "?page=log";
</script>