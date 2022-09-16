<?php
include 'conn.php';

if (isset($_POST['del'])) {
    $id_del = $_POST['id_del'];

    $query = " DELETE document_rs_spo WHERE id='$id_del' ";

    $execute = sqlsrv_query($conn, $query);


    if ($execute) {
        echo "<script> alert(
        'Sip,ilang!',
        'Mantap Sekali',
        'success') </script>";

        echo "<script>
    window.location.href='upload.php'
    </script>";
    } else {
        echo "<script> alert(
        'Gagal Submit! Mohon Hubungi IT-RSNR / call line phone 118')</script>";
    }
}
