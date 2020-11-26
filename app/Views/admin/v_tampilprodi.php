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
                    <a href="<?php echo base_url('prodi') ?>" class="btn btn-box-tool"><i class="fa fa-close"></i>Tutup</a>
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

                echo form_open('prodi/insert');

                ?>





                <div class="form-group">
                    <label>Fakultas </label>
                    <select name="id_fakultas" class="form-control">
                        <option value="">--Pilih Fakultas--</option>
                        <?php foreach ($fakultas as $key => $value) { ?>
                            <option value="<?= $value['id_fakultas'] ?>"><?= $value['fakultas'] ?> </option>
                        <?php   } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Kode Prodi</label>
                    <input type="text" name="kode_prodi" class="form-control" placeholder="kode prodi" required>
                </div>


                <div class="form-group">
                    <label>Prodi</label>
                    <input type="text" name="prodi" class="form-control" placeholder="prodi" required>
                </div>


                <div class="form-group">
                    <label>Jenjang</label>
                    <select name="jenjang" class="form-control">
                        <option value="D1">D1</option>
                        <option value="D3">D3</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>
                </div>


                <div class="form-group">
                    <label>Dosen</label>
                    <select name="ka_prodi" class="form-control">
                        <option value="">--Pilih KAPRODI--</option>

                        <?php foreach ($dosen as $key => $value) {  ?>
                            <?php if ($value['id_dosen']) {  ?>
                                <option value="<?php echo $value['nama_dosen'] ?>"><?php echo $value['nama_dosen'] ?></option>
                            <?php   } ?>
                        <?php   } ?>
                    </select>
                </div>

                <div class="modal-footer">
                    <a href="<?= base_url('prodi') ?>" class="btn btn-danger pull-left btn-flat">close</a>
                    <button type="submit" class="btn btn-success btn-flat">Simpan</button>
                </div>

                <?php echo form_close() ?>
            </div>
            <!-- /.box-body -->
        </div>

    </div>

    <div class="col-sm-3">

    </div>

</div>