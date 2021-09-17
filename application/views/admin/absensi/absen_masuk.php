<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/_partials/head.php") ?>

</head>

<body id="page-top">

    <?php $this->load->view("admin/_partials/navbar.php") ?>
    <div id="wrapper">

        <?php $this->load->view("admin/_partials/sidebar.php") ?>

        <div id="content-wrapper">

            <div class="container-fluid">


                <ol class="breadcrumb"> <a href="">Back</a></ol>
                <!-- DataTables -->
                <div class="card mb-3">
                    <div class="card-header">
                        <a href=""> <?php echo $this->session->userdata('ses_id'); ?></a>
                    </div>
                    <div class="card-body">
                        <label style="font-size:40px;font-family:calibri">Absen Masuk Karyawan </label>


                        <form action="<?php echo base_url('karyawan/absensi/masuk'); ?>" method="post">




                            <input class="form-control" type="number" name="NIK" placeholder="Nomer Induk Karyawan"><br><br>
                            <input type="hidden" name="kode_absen" value="Masuk">
                            <input type="hidden" name="tanggal" value="<?php echo date('Y-m-d'); ?>">

                            <input type="hidden" name="jam" value="<?php echo date("H:i:s"); ?>">

                            <input class="btn btn-info" type="submit" value="Absen">




                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <?php $this->load->view("admin/_partials/footer.php") ?>

    </div>
    <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->


    <?php $this->load->view("admin/_partials/scrolltop.php") ?>
    <?php $this->load->view("admin/_partials/modal.php") ?>

    <?php $this->load->view("admin/_partials/js.php") ?>
    <script>
        function deleteConfirm(url) {
            $('#btn-delete').attr('href', url);
            $('#deleteModal').modal();
        }
    </script>


</body>

</html>