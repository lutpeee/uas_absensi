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

                <?php $this->load->view("admin/_partials/breadcrumb.php") ?>

                <!-- DataTables -->
                <div class="card mb-3">

                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>

                                    <tr>

                                        <th>NIK</th>
                                        <th>KodeAbsensi</th>
                                        <th>Tanggal</th>
                                        <th>Jam</th>
                                    </tr>
                                    </tead>
                                <tbody>
                                    <?php

                                    foreach ($masuk as $a) {
                                    ?> <tr>

                                            <td><?php echo $a->NIK; ?></td>
                                            <td><?php echo $a->kode_absen; ?></td>
                                            <td><?php echo $a->tanggal; ?></td>
                                            <td><?php echo $a->jam; ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>

                            </tr>
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