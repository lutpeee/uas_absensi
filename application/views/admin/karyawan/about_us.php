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


                <div class="row justify-content-center">
                    <div class="col-md-4 mb-3">
                        <div class="card" style="height: 490px">
                            <center><a class="thumbnail"><img src="<?php echo base_url(); ?>assets/image/KTM.jpg" class="img-responsive" alt="Luthfi Abdul Aziz" style="width: 200px; border-radius: 5px; " /></a></center>
                            <div class="card-body">
                                <p class="card-text flex-fill">Luthfi Abdul Aziz <br> Sistem Informasi <br> 2020081003</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card" style="height: 490px">
                            <center><a class="thumbnail"><img src="<?php echo base_url(); ?>assets/image/KTM_kayla.jpg" class="img-responsive" alt="Kayla Ashati" style="width: 200px; border-radius: 5px; " /></a></center>
                            <div class="card-body">
                                <p class="card-text flex-fill">Kayla Ashati <br> Sistem Informasi <br> 2020081013</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card" style="height: 490px">
                            <center><a class="thumbnail"><img src="<?php echo base_url(); ?>assets/image/KTM_REY.jpg" class="img-responsive" alt="Reynaldi Wicaksono" style="width: 200px; border-radius: 5px; " /></a></center>
                            <div class="card-body">
                                <p class="card-text flex-fill">Reynaldi Wicaksono <br> Sistem Informasi <br> 2020081013</p>
                            </div>
                        </div>
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