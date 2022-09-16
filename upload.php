<?php
// panggil file 
include 'conn.php';
include 'proses_upload.php';
include "template/header.php";
?>

<div class="content">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                </div>
            </div>
        </div>
    </div>
    <header>
        <div class="container bg-success text-white mb-3 text-center shadow-lg p-2 mb-2 bg-body rounded">
            <h1>UPLOAD DOKUMEN SPO</h1>
        </div>
    </header>

    <div class="container">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body row g-2">
                    <div class="col-md mb-3">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="mb-2 mt-3">
                                <label for="" class="form-label">Unit / Ins. / Bagian Pemilik SPO</label>
                                <select class="custom-select" name="unit" required>
                                    <option selected>--Choose--</option>
                                    <option value="Instalasi Rawat Inap">Instalasi Rawat Inap</option>
                                    <option value="Instalasi Rawat Jalan">Instalasi Rawat Jalan</option>
                                    <option value="Instalasi Gawat Darurat">Instalasi Gawat Darurat</option>
                                    <option value="Instalasi Hemodialisa">Instalasi Hemodialisa</option>
                                    <option value="Instalasi Kebidanan dan Kandungan">Instalasi Kebidanan dan Kandungan</option>
                                    <option value="Asuhan Keperawatan dan Kebidanan">Unit Asuhan Keperawatan dan Kebidanan</option>
                                    <option value="Instalasi Farmasi">Instalasi Farmasi</option>
                                    <option value="Instalasi Radiologi">Instalasi Radiologi</option>
                                    <option value="Instalasi Rekam Medis">Instalasi Rekam Medis</option>
                                    <option value="Instalasi Sanitasi">Instalasi Sanitasi</option>
                                    <option value="Instalasi Gizi">Instalasi Gizi</option>
                                    <option value="Instalasi Rehabilitasi Medik">Instalasi Rehabilitasi Medik</option>
                                    <option value="Instalasi Laboratoriu">Instalasi Laboratorium</option>
                                    <option value="Instalasi CSSD">Instalasi CSSD</option>
                                    <option value="unit SDM">unit SDM</option>
                                    <option value="unit Rumah tangga">unit Rumah tangga</option>
                                    <option value="unit IT">unit IT</option>
                                    <option value="unit IPSRS">unit IPSRS</option>
                                    <option value="unit Keamanan">unit Keamanan</option>
                                    <option value="unit Driver">unit Driver</option>
                                    <option value="unit PKRS">unit PKRS</option>
                                    <option value="Keuangan">Keuangan</option>
                                    <option value="Unit Administrasi Pembiayaan">Unit Administrasi Pembiayaan</option>
                                    <option value="Komite PMKP">Komite PMKP</option>
                                    <option value="Tim SKP">Tim SKP</option>
                                    <option value="Komite PPI">Komite PPI</option>
                                    <option value="Tim K3">Tim K3</option>
                                    <option value="Tim manajemen komplain">Tim manajemen komplain</option>
                                    <option value="komite keperawatan<">komite keperawatan</option>
                                    <option value="komite medis">komite medis</option>
                                    <option value="komite etik dan hukum">komite etik dan hukum</option>
                                    <option value="tim marketing">tim marketing</option>

                                </select>
                            </div>
                            <div class="mb-2 mt-2">
                                <label for="" class="form-label">Nama SPO</label>
                                <input type="text" class="form-control" name="nama_spo" placeholder="Tuliskan Nama SPO" required>
                            </div>

                            <div class="mb-2 mt-2">
                                <label for="" class="form-label">Nomor SPO</label>
                                <input type="text" class="form-control" name="no_spo" placeholder="Tuliskan Nama SPO" required>
                            </div>

                            <label for="formFileMultiple" class="form-label mt-3">Tanggal Pengesahan</label>
                            <input class="form-control mb-3" type="date" name="tgl_pengesahan" id="tgl">

                            <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
                            <textarea class="form-control" name="keterangan" id="exampleFormControlTextarea1" rows="2"></textarea>

                            <div class="mb-2 mt-2">
                                <label for="" class="form-label">Tanggal Verifikasi</label>
                                <input type="date" class="form-control" name="tgl_verif" placeholder="Tuliskan Nama SPO">
                            </div>

                            <label for="formFileMultiple" class="form-label mt-3">Upload File</label>
                            <input class="form-control" type="file" name="file" id="formFileMultiple" multiple>

                            <!-- <button type="submit" name="upload" value="Upload" class="btn btn-success mt-2">Upload</button> -->
                            <input type="submit" class="btn btn-success mt-3 float-right" name="upload">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <div class="row">
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Unit/Ins. Pemilik SPO</th>
                                            <th>Nama SPO</th>
                                            <th>Nomor SPO</th>
                                            <th>Tanggal Pengesahan</th>
                                            <th>Status</th>
                                            <th>Tanggal Verifikasi</th>
                                            <th>File</th>
                                            <th>awsem</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        $sql = "SELECT * FROM document_rs_spo";
        $no = 1;
        //eksekusi query menampilkan data
        $query = sqlsrv_query($conn, $sql) or die(sqlsrv_errors());;
        //mengembalikan data row menjadi array dan looping data menggunakan while
        while ($data = sqlsrv_fetch_array($query)) {
        ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?php echo $data['unit']; ?></td>
                <td><?php echo $data['nama_file']; ?></td>
                <td><?php echo $data['no_spo']; ?></td>
                <td><?php echo $data['tanggal']; ?></td>
                <td><?php echo $data['status']; ?></td>
                <td><?php echo $data['tanggal_verif']; ?></td>
                <td><?php echo $data['file_nama']; ?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="">
                        <button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#view<?php echo $data['id']; ?>">View</button>
                        <button type="button" class="btn btn-xs btn-danger ml-1" data-toggle="modal" data-target="#del<?php echo $data['id']; ?>">delete</button>
                    </div>
                </td>
            </tr>

            <!-- <script>
                $(document).ready(function() {
                    $('.view_data').click(function() {
                        var data_id = $(this).data("id_file")
                        $.ajax({
                            url: "proses.php",
                            method: "POST",
                            data: {
                                data_id: data_id
                            },
                            success: function(data) {
                                $("#detail_user").html(data)
                                $("#dataModal").modal('show')
                            }
                        })
                    })
                })
            </script> -->
            <div class="modal fade" id="view<?php echo $data['id']; ?>">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="Label">View</h5>
                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <body>
                                <embed type="application/pdf" src="Asset/save_file/<?php echo $data['file_nama']; ?>#toolbar=0" width="750" height="800"></embed>
                                <script>
                                    $(document).ready(function() {
                                        $('body').bind('cut copy', function(e) {
                                            e.preventDefault();
                                        });
                                    });
                                </script>
                            </body>
                        </div>
                        </form>
                    </div>
                    <!-- <button type="button" class="btn btn-danger mt-3 float-right" data-dismiss="modal">Close</button> -->
                    <div class="modal-footer">
                    </div>
                </div>
            </div>

            <div class="modal fade" id="del<?php echo $data['id']; ?>">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="Label">Konfirmasi dulu, Serius mau di Hapus?</h5>
                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <body>
                                <form action="" method="post">
                                    <input type="hidden" name="id_del" value="<?php echo $data['id']; ?>">
                                    <button type="submit" name="del" class="btn btn-success">Ya dong</button>
                                    <button type="button" class="btn btn-danger ml-1" data-dismiss="modal">Gajadi</button>
                                </form>
                            </body>
                        </div>
                    </div>
                    <!-- <button type="button" class="btn btn-danger mt-3 float-right" data-dismiss="modal">Close</button> -->
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        <?php } ?>

        <?php include 'delete.php'; ?>

        <script>
            var isNS = (navigator.appName == "Netscape") ? 1 : 0;
            if (navigator.appName == "Netscape") document.captureEvents(Event.MOUSEDOWN || Event.MOUSEUP);

            function mischandler() {
                return false;
            }

            function mousehandler(e) {
                var myevent = (isNS) ? e : event;
                var eventbutton = (isNS) ? myevent.which : myevent.button;
                if ((eventbutton == 2) || (eventbutton == 3)) return false;
            }
            document.oncontextmenu = mischandler;
            document.onmousedown = mousehandler;
            document.onmouseup = mousehandler;
        </script>


        <?php
        include 'template/footer.php';
        ?>