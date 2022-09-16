<?php

if ($_POST['upload']) {
    $ekstensi_diperbolehkan    = array('pdf', 'docx');
    $nama = $_FILES['file']['name'];
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    $ukuran    = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $folder = "Asset/save_file/";
    $file_baru = $folder . basename($nama);
    $unit = $_POST['unit'];
    $nm_spo = $_POST['nama_spo'];
    $nospo = $_POST['no_spo'];
    $tgl1 = $_POST['tgl_pengesahan'];
    $ket = $_POST['keterangan'];
    $tgl2 = $_POST['tgl_verif'];

    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 1890000000000000) {
            move_uploaded_file($file_tmp, $file_baru);
            $sql = "INSERT INTO document_rs_spo (unit,tanggal,nama_file,file_nama,status,no_spo,tanggal_verif)  VALUES ('$unit','$tgl1','$nm_spo','$nama','$ket','$nospo','$tgl2')";
            $query = sqlsrv_query($conn, $sql);
            if ($query) {
                // echo "<script> window.location.replace('skp.php') </script>";
                echo "<script>
						swal('Sak Josee!', 'Data Wes Kesimpen!', 'success').then( () => {
							location.href = 'upload.php'
						})
						</script>";
            } else {
                echo "<script>
						swal('Rs iso lur!', 'Gagal,coba cek maneh file mu,koneksi utowo di refresh!', 'warning')
						</script>";
            }
        } else {
            echo "<script>
					swal('Kegeden file nya', 'Cilik aja to!', 'warning')
					</script>";
        }
    } else {
        echo "<script>
						swal('Salah Format mazehh', 'Kudu PDF tur Ukuran Cilik!', 'error')
						</script>";

        // echo "<script> window.location.href = window.location.href </script>";
    }
}

		
// 	if(isset($_POST['upload']))
// 	{
//     $temp = $_FILES['file']['tmp_name'];
//     $name = rand(0,9999).$_FILES['file']['name'];
//     $size = $_FILES['file']['size'];
//     $type = $_FILES['file']['type'];
//     $folder = "files/";
//     if ($size < 204800000 and ($type =='pdf' or $type == 'docx')) {
//         move_uploaded_file($temp, $folder . $name);
//         $sql="INSERT INTO akre_internal (tgl_upload,nm_file)  VALUES ('', '$nama')";
// 		$query=sqlsrv_query($conn,$sql);
//         header('location:index.php');
//     }else{
//         echo "<b>Gagal Upload File</b>";
//     }
// }
