<aside class="control-sidebar control-sidebar-dark">
</aside>
</div>

<script src="js/sweetalert.min.js"></script>
<script src="js/sweetalert.js"></script>
<!-- jQuery -->
<script src="dashboard/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dashboard/dist/js/adminlte.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script defer src="fa/js/all.js" integrity="sha384-xBXmu0dk1bEoiwd71wOonQLyH+VpgR1XcDH3rtxrLww5ajNTuMvBdL5SOiFZnNdp" crossorigin="anonymous"></script>
<script defer src="fa/js/fontawesome.js" integrity="sha384-xBXmu0dk1bEoiwd71wOonQLyH+VpgR1XcDH3rtxrLww5ajNTuMvBdL5SOiFZnNdp" crossorigin="anonymous"></script>
<script src="dashboard/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="dashboard/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="dashboard/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="dashboard/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="dashboard/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="dashboard/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="dashboard/plugins/jszip/jszip.min.js"></script>
<script src="dashboard/plugins/pdfmake/pdfmake.min.js"></script>
<script src="dashboard/plugins/pdfmake/vfs_fonts.js"></script>
<script src="dashboard/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="dashboard/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="dashboard/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script src="../dashboard/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../dashboard/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../dashboard/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../dashboard/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../dashboard/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../dashboard/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../dashboard/plugins/jszip/jszip.min.js"></script>
<script src="../dashboard/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../dashboard/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../dashboard/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../dashboard/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../dashboard/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="../js/sweetalert.min.js"></script>
<script src="../js/sweetalert.js"></script>
<script src="../dashboard/plugins/jquery/jquery.min.js"></script>
<script src="../dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../dashboard/dist/js/adminlte.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script defer src="../fa/js/all.js" integrity="sha384-xBXmu0dk1bEoiwd71wOonQLyH+VpgR1XcDH3rtxrLww5ajNTuMvBdL5SOiFZnNdp" crossorigin="anonymous"></script>
<script defer src="../fa/js/fontawesome.js" integrity="sha384-xBXmu0dk1bEoiwd71wOonQLyH+VpgR1XcDH3rtxrLww5ajNTuMvBdL5SOiFZnNdp" crossorigin="anonymous"></script>
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": false,
            // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
</body>

</html>