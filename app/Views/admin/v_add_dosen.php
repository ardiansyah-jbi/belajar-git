<section class="content-header">
    <h1>
        <?= $title; ?>
    </h1>


</section>
<br>
<div class="row">

    <div class="col-sm-3">

    </div>

    <div class="col-sm-6">
        <div class="box box-success box-solid">
            <div class="box-header with-border">
                <h3 class="box-title"> Form <?php echo $title; ?></h3>

                <div class="box-tools pull-right">
                    <a href="<?php echo base_url('dosen') ?>" class="btn btn-box-tool"><i class="fa fa-close"></i>Tutup</a>
                </div>
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <?php
                $errors = session()->getFlashdata('errors');
                if (!empty($errors)) { ?>

                    <div class="alert alert-danger" role="alert">
                        <ul>
                            <?php foreach ($errors as $key => $value) { ?>
                                <li><?= esc($value) ?></li>
                            <?php    } ?>
                        </ul>
                    </div>

                <?php  } ?>


                <?php

                echo form_open_multipart('dosen/insert');

                ?>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Kode Dosen</label>
                        <input type="text" name="kode_dosen" class="form-control" placeholder="kode dosen">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>NIDN</label>
                        <input type="text" name="nidn" class="form-control" placeholder="nidn">
                    </div>
                </div>




                <div class="form-group">
                    <label>Nama Dosen</label>
                    <input type="text" name="nama_dosen" class="form-control" placeholder="nama dosen">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="text" name="password" class="form-control" placeholder="password">
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <img src="<?php echo base_url() ?>/fotodosen/poto.png" class="img-circle" id="gambar_load" width="80">
                    </div>
                </div>

                <div class=" col-md-6">
                    <div class="form-group">
                        <label>foto</label>
                        <input type="file" name="foto" id="preview_gambar" class="form-control">
                    </div>
                </div>

                <br>

                <div class="modal-footer">
                    <a href="<?= base_url('dosen') ?>" class="btn btn-danger pull-left btn-flat">close</a>
                    <button type="submit" class="btn btn-success btn-flat">Simpan</button>

                </div>
                <?php echo form_close() ?>
            </div>
            <!-- /.box-body -->
        </div>

    </div>



</div>