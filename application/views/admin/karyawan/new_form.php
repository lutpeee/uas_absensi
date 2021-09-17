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
                <?php if ($this->session->flashdata('gagal')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('gagal'); ?>
                    </div>
                <?php endif; ?>

                <div class="card mb-3">
                    <div class="card-header">
                        <a href="<?php echo site_url('admin/karyawan/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
                    </div>
                    <div class="card-body">

                        <form action="<?php echo site_url('admin/Karyawan/add') ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="NIK">NIK</label>
                                <input class="form-control <?php echo form_error('NIK') ? 'is-invalid' : '' ?>" type="text" name="NIK" placeholder="NIK" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('NIK') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?>" type="text" name="nama" placeholder="Nama" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('nama') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control <?php echo form_error('password') ? 'is-invalid' : '' ?>" type="password" name="password" placeholder="password" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('password') ?>
                                </div>
                            </div>




                            <div class="form-group">
                                <label for="password">Jenis Kelamin</label>
                                <div class="form-check">
                                    <input class="form-check-input <?php echo form_error('jk') ? 'is-invalid' : '' ?>" type="radio" name="jk" value="Laki-Laki" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Laki-Laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jk" value="Perempuan" id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Perempuan
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="tgl_lahir">Tanggal Lahir</label>
                                <input class="form-control <?php echo form_error('tgl_lahir') ? 'is-invalid' : '' ?>" name="tgl_lahir" placeholder="Dd-Mm-yyyy"></input>
                                <div class="invalid-feedback">
                                    <?php echo form_error('tgl_lahir') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="telpon">Telpon</label>
                                <input class="form-control <?php echo form_error('telpon') ? 'is-invalid' : '' ?>" type="text" name="telpon" placeholder="Telpon" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('telpon') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tahun_masuk">Tahun Masuk</label>
                                <input class="form-control <?php echo form_error('tahun_masuk') ? 'is-invalid' : '' ?>" type="text" name="tahun_masuk" placeholder="Tahun Masuk" />
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