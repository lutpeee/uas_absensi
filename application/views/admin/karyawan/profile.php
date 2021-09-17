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
                <?php
                if (validation_errors() != false) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo validation_errors(); ?>
                    </div>
                <?php
                }
                ?>

                <ol class="breadcrumb"><a href="#">Edit Profile</a></ol>
                <?php foreach ($user as $u) { ?>


                    <!-- DataTables -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <a href="#"><i class=""><?php echo  $this->session->userdata('NIK'); ?> </i></a>
                        </div>
                        <div class="card-body">
                            <form action=" <?php base_url('admin/karyawan/update'); ?>" method="post">
                                <input type="hidden" name="NIK" value="<?php echo $u->NIK ?>" />

                                <div class="form-group">
                                    <label for="nama">Nama*</label>
                                    <input class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?>" type="text" name="nama" placeholder="  Naame" value="<?php echo $u->nama ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('nama') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password*</label>
                                    <input class="form-control <?php echo form_error('password') ? 'is-invalid' : '' ?>" type="password" name="password" placeholder=" Password" value="<?php echo $u->password ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('password') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="jk">Jenis Kelamin</label>
                                    <input class="form-control <?php echo form_error('jk') ? 'is-invalid' : '' ?>" type="text" name="jk" placeholder="jk" value="<?php echo $u->jk ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('jk') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tgl_lahir">Tanggal Lahir</label>
                                    <input class="form-control <?php echo form_error('tgl_lahir') ? 'is-invalid' : '' ?>" type="text" name="tgl_lahir" placeholder="tgl_lahir" value="<?php echo $u->tgl_lahir ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('tgl_lahir') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="telpon">Telpon</label>
                                    <input class="form-control <?php echo form_error('telpon') ? 'is-invalid' : '' ?>" type="text" name="telpon" placeholder="telpon" value="<?php echo $u->telpon ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('telpon') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tahun_masuk">Tahun Masuk</label>
                                    <input class="form-control <?php echo form_error('tahun_masuk') ? 'is-invalid' : '' ?>" type="text" name="tahun_masuk" placeholder="tahun_masuk" value="<?php echo $u->tahun_masuk ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('tahun_masuk') ?>
                                    </div>
                                </div>




                            </form>
                        </div>


                    </div>
                <?php } ?>

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