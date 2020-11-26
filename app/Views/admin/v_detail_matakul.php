<section class="content-header">
    <h1>
        <a href="<?php echo base_url('jadwal_ta') ?>">Matakuliah</a>
        <small><?php echo  $prodi['prodi'] ?></small>
    </h1>

</section>
<br>

<div class="row">
    <div class="col-sm-12">
        <div class="box box-success box-solid">
            <div class="box-body">
                <table class="table table-bordered">
                    <tr>
                        <th width="150px">Program Studi</th>
                        <td width="30px">: </td>
                        <td><?php echo $prodi['prodi'] ?></td>
                    </tr>
                    <tr>
                        <th>Jenjang</th>
                        <td>:</td>
                        <td><?php echo $prodi['jenjang'] ?></td>
                    </tr>
                    <tr>
                        <th>Fakultas</th>
                        <td>:</td>
                        <td><?php echo $prodi['fakultas'] ?></td>
                    </tr>

                </table>

            </div>
        </div>
    </div>

    <div class="col-sm-12">



        <div class="box box-success box-solid">
            <div class="box-header with-border">
                <h3 class="box-title"> Data <?php echo $title; ?></h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i>add</button>
                </div>
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
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

                    if (session()->getFlashdata('pesan')) {
                        echo '<div class="alert alert-success" role="alert">';
                        echo session()->getFlashdata('pesan');
                        echo '</div>';
                    }
                    ?>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="50">no</th>
                                <th class="text-center">Kode mata kuliah</th>
                                <th class="text-center">Mata Kuliah</th>
                                <th class="text-center">SKS</th>
                                <th class="text-center">Kategori</th>
                                <th class="text-center">Semester</th>
                                <th width="50" class="text-center">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($matkul as $key => $value) { ?>

                                <tr>
                                    <td> <?= $no++; ?> </td>
                                    <td class="text-center"><?= $value['kode_matakul'] ?></td>
                                    <td class="text-center"><?= $value['matkul'] ?></td>
                                    <td class="text-center"><?= $value['sks'] ?></td>
                                    <td class="text-center"><?= $value['kategori'] ?></td>
                                    <td class="text-center"><?= $value['smt'] ?> (<?= $value['semester'] ?> )</td>
                                    <td class="text-center">
                                        <button class="btn btn-danger" data-toggle="modal" data-target="#delete<?= $value['id_matakul'] ?>"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            <?php  } ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>

</div>


<!--modal delete-->
<?php foreach ($matkul as $key => $value) { ?>
    <div class="modal fade" id="delete<?= $value['id_matakul'] ?>">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">delete matakuliah</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <p> apakah anda ingin menghapus data ini <b><?= $value['matkul'] ?></b> </p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left btn-flat" data-dismiss="modal">Close</button>
                    <a href="<?= base_url('matkul/delete/' . $prodi['id_prodi'] . '/' . $value['id_matakul'])  ?>" class="btn btn-success">Delete</a>
                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
<?php   } ?>


<!-- /.modal add -->
<div class="modal fade" id="add">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Matakuliah</h4>
            </div>
            <div class="modal-body">

                <?php
                echo form_open('matkul/add/' . $prodi['id_prodi']);
                ?>

                <div class="form-group">
                    <label>Kode Mata kuliah</label>
                    <input name="kode_matakul" class="form-control" placeholder="Kode Mata Kuliah">
                </div>

                <div class="form-group">
                    <label>Mata Kuliah</label>
                    <input name="matkul" class="form-control" placeholder="Mata Kuliah">
                </div>

                <div class="form-group">
                    <label>SKS</label>
                    <select name="sks" class="form-control">
                        <option value="">--pilih sks--</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Semester</label>
                    <select name="smt" class="form-control">
                        <label>Semester</label>
                        <option value="">--pilih semester--</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                </div>


                <div class="form-group">
                    <label>Kategori</label>
                    <select name="kategori" class="form-control">
                        <label>Kategori</label>
                        <option value="">--pilih kategori--</option>
                        <option value="wajib">Wajib</option>
                        <option value="pilihan">Pilihan</option>
                    </select>
                </div>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left btn-flat" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success btn-flat">Simpan</button>
            </div>
            <?php echo form_close() ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->