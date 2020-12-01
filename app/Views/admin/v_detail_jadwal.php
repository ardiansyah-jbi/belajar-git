<section class="content-header">
    <h1>
        <a href="<?php echo base_url('jadwal_ta') ?>">Jadwal Kuliah</a>
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

                    <tr>
                        <th>Tahun Akademik</th>
                        <td>:</td>
                        <td><?php echo $ta_dinamis['ta'] ?> <?php echo $ta_dinamis['semester'] ?> </td>
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
                                <th class="text-center">smt</th>
                                <th class="text-center">Kode mata kuliah</th>
                                <th class="text-center">Mata Kuliah</th>
                                <th class="text-center">SKS</th>
                                <th class="text-center">Kelas</th>
                                <th class="text-center">Dosen</th>
                                <th class="text-center">Hari</th>
                                <th class="text-center">Waktu</th>
                                <th class="text-center">Ruangan</th>
                                <th class="text-center">Quota</th>
                                <th width="50" class="text-center">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($jadwal as $key => $value) {  ?>
                                <tr>
                                    <td> <?= $no++; ?> </td>
                                    <td><?= $value['smt']; ?></td>
                                    <td><?= $value['kode_matakul']; ?></td>
                                    <td><?= $value['matkul']; ?></td>
                                    <td><?= $value['sks']; ?></td>
                                    <td><?= $value['nama_kelas']; ?> || <?= $value['tahun_angkatan']; ?> </td>
                                    <td><?= $value['nama_dosen']; ?></td>
                                    <td><?= $value['hari']; ?></td>
                                    <td><?= $value['waktu']; ?> </td>
                                    <td><?= $value['ruangan']; ?></td>
                                    <td><?= $value['quota']; ?></td>
                                    <td>
                                        <button class="btn btn-danger" data-toggle="modal" data-target="#delete<?= $value['id_jadwal'] ?>"><i class="fa fa-trash"></i></button>
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
<?php foreach ($jadwal as $key => $value) { ?>
    <div class="modal fade" id="delete<?= $value['id_jadwal'] ?>">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Delete jadwal</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <p> apakah anda ingin menghapus data ini <b><?php echo $value['kode_matakul'] ?> || <?php echo $value['matkul'] ?> </b> </p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left btn-flat" data-dismiss="modal">Close</button>
                    <a href="<?= base_url('jadwal_ta/delete/' . $value['id_jadwal'] . '/' . $prodi['id_prodi']) ?>" class="btn btn-success">Delete</a>
                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
<?php   } ?>



<!-- /.modal add -->
<div class=" modal fade" id="add">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah jadwal matakuliah</h4>
            </div>
            <div class="modal-body">

                <?php
                echo form_open('jadwal_ta/add/' . $prodi['id_prodi']);
                ?>



                <div class="form-group">
                    <label>Matakuliah</label>
                    <select name="id_matakul" class="form-control">
                        <option value="">--Pilih MATAKULIAH--</option>
                        <?php foreach ($jadwal_matakul as $key => $value) {   ?>
                            <option value="<?php echo $value['id_matakul'] ?>"><?php echo $value['smt'] ?> | <?php echo $value['matkul'] ?> | <?php echo $value['semester'] ?> </option>
                        <?php  } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Dosen</label>
                    <select name="id_dosen" class="form-control">
                        <option value="">--Pilih Dosen--</option>
                        <?php foreach ($dosen as $key => $value) {  ?>
                            <option value="<?php echo $value['id_dosen'] ?>"><?php echo $value['nama_dosen'] ?></option>
                        <?php   } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Kelas</label>
                    <select name="id_kelas" class="form-control">
                        <option value="">--pilih kelas--</option>
                        <?php foreach ($kelas as $key => $value) { ?>
                            <option value="<?php echo $value['id_kelas'] ?>"><?php echo $value['nama_kelas'] ?></option>
                        <?php  } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Tahun Akademik</label>
                    <input type="text" value="<?php echo $ta_dinamis['ta'] ?> || <?php echo $ta_dinamis['semester'] ?>" class="form-control" readonly>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label>Ruangan</label>
                        <select name="id_ruangan" class="form-control">
                            <option value="">--pilih ruangan--</option>
                            <?php foreach ($ruangan as $key => $value) {  ?>
                                <option value="<?php echo $value['id_ruangan'] ?>"><?php echo $value['ruangan'] ?> </option>
                            <?php  } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Hari </label>
                        <input type="text" name="hari" class="form-control" placeholder="hari">
                    </div>

                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label>Waktu</label>
                        <input type="text" name="waktu" class="form-control" placeholder="ex: 10.00 -11.00">
                    </div>

                    <div class="form-group">
                        <label>Quota</label>
                        <input type="number" name="quota" class="form-control">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left btn-flat" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-success btn-flat">Simpan</button>
                </div>
                <?php echo form_close() ?>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->