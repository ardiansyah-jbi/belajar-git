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
                    <a href="<?php echo base_url('mhs') ?>" class="btn btn-box-tool"><i class="fa fa-close"></i>Tutup</a>
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

                echo form_open_multipart('mhs/insert');

                ?>


                <div class="form-group">
                    <label>Nim</label>
                    <input type="text" name="nim" class="form-control" placeholder="nim">
                </div>

                <div class="form-group">
                    <label>Nama Mahasiswa</label>
                    <input type="text" name="nama_mhs" class="form-control" placeholder="nama mahasiswa">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="text" name="password" class="form-control" placeholder="nama password">
                </div>

                <div class="form-group">
                    <label>Prodi </label>
                    <select name="id_prodi" class="form-control">
                        <option value="">--Pilih Prodi--</option>
                        <?php foreach ($prodi as $key => $value) { ?>
                            <option value="<?= $value['id_prodi'] ?>"><?= $value['prodi'] ?> </option>
                        <?php   } ?>
                    </select>
                </div>




                <div class="col-md-6">
                    <div class="form-group">
                        <img src="<?php echo base_url() ?>/fotomhs/mushola.png" class="img-circle" id="gambar_load" width="80">
                    </div>
                </div>

                <div class=" col-md-6">
                    <div class="form-group">
                        <label>foto</label>
                        <input type="file" name="foto_mhs" id="preview_gambar" class="form-control">
                    </div>
                </div>

                <div class="modal-footer">
                    <a href="<?= base_url('mhs') ?>" class="btn btn-danger pull-left btn-flat">close</a>
                    <button type="submit" class="btn btn-success btn-flat">Simpan</button>
                </div>

                <?php echo form_close() ?>
            </div>
            <!-- /.box-body -->
        </div>

    </div>



</div>