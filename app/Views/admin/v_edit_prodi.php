<section class="content-header">
    <h1>
        <?= $title; ?>
    </h1>


</section>
<br>
<div class="row">

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

                echo form_open('prodi/update/' . $prodi['id_prodi']);

                ?>

                <div class="form-group">
                    <label>Fakultas </label>
                    <select name="id_fakultas" class="form-control">
                        <option value="<?= $prodi['id_fakultas'] ?>"> <?= $prodi['fakultas'] ?> </option>
                        <?php foreach ($fakultas as $key => $value) { ?>
                            <option value="<?= $value['id_fakultas'] ?>"> <?= $value['fakultas'] ?> </option>
                        <?php   } ?>
                    </select>

                </div>

                <div class="form-group">
                    <label>Kode Prodi</label>
                    <input type="text" value="<?= $prodi['kode_prodi'] ?>" name="kode_prodi" class="form-control" placeholder="prodi">
                </div>

                <div class="form-group">
                    <label>Prodi</label>
                    <input type="text" value="<?= $prodi['prodi'] ?>" name="prodi" class="form-control" placeholder="prodi">
                </div>

                <div class="form-group">
                    <label>Jenjang</label>
                    <select name="jenjang" class="form-control">
                        <option value="D1" <?php if ($prodi['jenjang'] == 'D1') {
                                                echo  'selected';
                                            } ?>> D1</option>
                        <option value="D3" <?php if ($prodi['jenjang'] == 'D3') {
                                                echo  'selected';
                                            } ?>>D3</option>
                        <option value="S1 <?php if ($prodi['jenjang'] == 'S1') {
                                                echo  'selected';
                                            } ?>">S1</option>
                        <option value="S2" <?php if ($prodi['jenjang'] == 'S2') {
                                                echo  'selected';
                                            } ?>>S2</option>
                        <option value="S3" <?php if ($prodi['jenjang'] == 'S3') {
                                                echo  'selected';
                                            } ?>>S3</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Ketua Prodi </label>
                    <select name="ka_prodi" class="form-control">
                        <option value="<?= $prodi['ka_prodi'] ?>"> <?= $prodi['ka_prodi'] ?> </option>
                        <?php foreach ($dosen as $key => $value) { ?>
                            <option value="<?php echo $value['nama_dosen'] ?>"><?php echo $value['nama_dosen'] ?></option>
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