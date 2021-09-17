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

                <?php if ($this->session->flashdata('success')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php endif; ?>
                <?php
                if (validation_errors() != false) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo validation_errors(); ?>
                    </div>
                <?php
                }
                ?>

                <!-- Card  -->
                <div class="card mb-3">
                    <div class="card-header">

                        <a href="<?php echo site_url('admin/karyawan/') ?>"><i class="fas fa-arrow-left"></i>
                            Back</a>
                    </div>
                    <div class="card-body">

                        <form action="<?php base_url('admin/karyawan/edit') ?>" method="post" enctype="multipart/form-data">


                            <input type="hidden" name="NIK" value="<?php echo $karyawan->NIK ?>" />

                            <div class="form-group">
                                <label for="nama">Nama*</label>
                                <input class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?>" type="text" name="nama" placeholder=" Naame" value="<?php echo $karyawan->nama ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('nama') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password">Password*</label>
                                <input class="form-control <?php echo form_error('password') ? 'is-invalid' : '' ?>" type="password" name="password" placeholder=" Password" value="<?php echo $karyawan->password ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('password') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="jk">Jenis Kelamin</label>
                                <input class="form-control <?php echo form_error('jk') ? 'is-invalid' : '' ?>" type="text" name="jk" placeholder="jk" value="<?php echo $karyawan->jk ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('jk') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tgl_lahir">Tanggal Lahir</label>
                                <input class="form-control <?php echo form_error('tgl_lahir') ? 'is-invalid' : '' ?>" type="text" name="tgl_lahir" placeholder="tgl_lahir" value="<?php echo $karyawan->tgl_lahir ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('tgl_lahir') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="telpon">Telpon</label>
                                <input class="form-control <?php echo form_error('telpon') ? 'is-invalid' : '' ?>" type="text" name="telpon" placeholder="telpon" value="<?php echo $karyawan->telpon ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('telpon') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tahun_masuk">Tahun Masuk</label>
                                <input class="form-control <?php echo form_error('tahun_masuk') ? 'is-invalid' : '' ?>" type="text" name="tahun_masuk" placeholder="tahun_masuk" value="<?php echo $karyawan->tahun_masuk ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('tahun_masuk') ?>
                                </div>
                            </div>



                            <input class="btn btn-success" type="submit" name="btn" value="Save" />
                        </form>



                    </div>

                    <div class="card-footer small text-muted">
                        * required fields
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

        <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>