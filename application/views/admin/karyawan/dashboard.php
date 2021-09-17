<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
    <style>
        .thumbnail {
            display: block;
            padding-bottom: 100%;
            position: relative;
        }

        .thumbnail>.img-responsive {
            max-width: 100%;
            max-height: 100%;
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            margin: auto;
        }
    </style>
</head>

<body id="page-top">

    <?php $this->load->view("admin/_partials/navbar.php") ?>
    <div id="wrapper">

        <?php $this->load->view("admin/_partials/sidebar.php") ?>

        <div id="content-wrapper">

            <div class="container-fluid">

                <ol class="breadcrumb"><a href="#">Welcome</a></ol>

                <!-- DataTables -->
                <div class="card mb-3">
                    <div class="card-header">
                        <a href="#"><i class=""><?php echo  $this->session->userdata('NIK'); ?> </i></a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <h3>Selamat Datang <strong><?php echo ucfirst($this->session->userdata('username'));  ?></strong> Silahkan Melakukan Absensi <br><br> </h3>

                            <a href="<?php echo base_url('karyawan/absensi/inputabsen') ?>" class="btn btn-info">Absen Masuk</a>
                            <a href="<?php echo base_url('karyawan/absensi/keluarabsen') ?>" class="btn btn-info">Absen Keluar</a>
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