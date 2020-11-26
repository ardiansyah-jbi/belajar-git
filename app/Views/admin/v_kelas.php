<section class="content-header">
    <h1>
        <?= $title; ?>
    </h1>
</section>

<br>
<div class="row">
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
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width="50">no</th>
                            <th class="text-center">Nama Kelas</th>
                            <th class="text-center">Program Studi</th>
                            <th class="text-center">Dosen</th>
                            <th class="text-center">Tahun</th>
                            <th class="text-center">jumlah/kelas</th>
                            <th width="150" class="text-center">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $db = \Config\Database::connect();
                        $no = 1;
                        foreach ($kelas as $key => $value) {
                            $jml = $db->table('tbl_mhs')
                                ->where('id_kelas', $value['id_kelas'])
                                ->countAllResults();

                        ?>

                            <tr>
                                <td> <?= $no++; ?> </td>
                                <td class="text-center"><?= $value['nama_kelas'] ?></td>
                                <td class="text-center"><?= $value['prodi'] ?></td>
                                <td class="text-center"><?= $value['nama_dosen'] ?></td>
                                <td class="text-center"><?= $value['tahun_angkatan'] ?></td>
                                <td class="text-center">
                                    <p class="label bg-green"><?= $jml; ?> </p>
                                    <p><a href="<?php echo base_url('kelas/rincian_kelas/' . $value['id_kelas']) ?>">Mahasiswa</a></p>
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-danger" data-toggle="modal" data-target="#delete<?= $value['id_kelas'] ?>"><i class="fa fa-trash"></i></button>
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








<!--modal delete-->
<?php foreach ($kelas as $key => $value) { ?>
    <div class="modal fade" id="delete<?= $value['id_kelas'] ?>">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">delete Kelas</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <p> apakah anda ingin menghapus data ini <b><?= $value['nama_kelas'] ?></b> </p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left btn-flat" data-dismiss="modal">Close</button>
                    <a href="<?= base_url('kelas/delete/' . $value['id_kelas']) ?>" class="btn btn-success">Delete</a>
                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
<?php   } ?>




<div class="modal fade" id="add">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Kelas</h4>
            </div>
            <div class="modal-body">

                <?php
                echo form_open('kelas/add');
                ?>


                <div class="form-group">
                    <label>nama kelas</label>
                    <input name="nama_kelas" class="form-control" placeholder="nama kelas">
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

                <div class="form-group">
                    <label>Dosen </label>
                    <select name="id_dosen" class="form-control">
                        <option value="">--Pilih Dosen--</option>
                        <?php foreach ($dosen as $key => $value) { ?>
                            <option value="<?= $value['id_dosen'] ?>"><?= $value['nama_dosen'] ?> </option>
                        <?php   } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Tahun Angkatan</label>
                    <select name="tahun_angkatan" class="form-control">
                        <option value="">--pilih tahun---</option>
                        <?php for ($i = date('Y'); $i >= date('Y') - 5; $i--) { ?>
                            <option value="<?php echo $i ?>"> <?= $i; ?></option>
                        <?php  } ?>
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