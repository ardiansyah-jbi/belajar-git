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
                            <th>Tahun Akademik </th>
                            <th>Semester</th>
                            <th>Status</th>
                            <th width="150" class="text-center">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($ta as $key => $value) { ?>

                            <tr>
                                <td> <?= $no++; ?> </td>
                                <td><?= $value['ta'] ?></td>
                                <td><?= $value['semester']; ?></td>
                                <td class="text-center">
                                    <?php if ($value['status'] == 0) {  ?>
                                        <button class="btn btn-danger btn-sm btn-flat">nonaktif</button>
                                    <?php  } elseif ($value['status'] == 1) { ?>
                                        <button class="btn btn-success btn-sm btn-flat">aktif</button>
                                    <?php  } ?>

                                </td>
                                <td class="text-center">
                                    <?php if ($value['status'] == 0) {  ?>
                                        <a href="<?php echo base_url('ta/set_status_ta/' . $value['id_ta']) ?>" class="btn btn-success btn-sm btn-flat"><i class=" fa fa-check"></i>aktifkan </a>
                                    <?php  } elseif ($value['status'] == 1) { ?>

                                    <?php  } ?>
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






<div class="modal fade" id="add">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Ta</h4>
            </div>
            <div class="modal-body">

                <?php
                echo form_open('ta/add');
                ?>

                <div class="form-group">
                    <label>Tahun Akademik</label>
                    <input name="ta" class="form-control" placeholder="ex: 2019/2020" required>
                </div>

                <div class="form-group">
                    <label>Semester</label>
                    <select name="semester" class="form-control">
                        <option value="ganjil">Ganjil </option>
                        <option value="genap">Genap </option>
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


<!--modal edit-->
<?php foreach ($ta as $key => $value) { ?>
    <div class="modal fade" id="edit<?= $value['id_ta'] ?>">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">edit Tahun akademik</h4>
                </div>
                <div class="modal-body">

                    <?php
                    echo form_open('ta/edit/' . $value['id_ta']);
                    ?>

                    <div class="form-group">
                        <label> Tahun Akademik</label>
                        <input name="ta" class="form-control" placeholder="ta" value="<?php echo $value['ta'] ?>" required>
                    </div>

                    <div class="form-group">
                        <label> Semester </label>
                        <select name="semester" class="form-control">
                            <option value="ganjil" <?php if ($value['semester'] == 'ganjil') {
                                                        echo 'selected';
                                                    } ?>>Ganjil</option>
                            <option value="genap" <?php if ($value['semester'] == 'genap') {
                                                        echo 'selected';
                                                    } ?>>Genap</option>


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
<?php   } ?>


<!--modal delete-->
<?php foreach ($ta as $key => $value) { ?>
    <div class="modal fade" id="delete<?= $value['id_ta'] ?>">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">delete Ta</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <p> apakah anda ingin menghapus data ini <b><?= $value['ta'] ?></b> </p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left btn-flat" data-dismiss="modal">Close</button>
                    <a href="<?= base_url('ta/delete/' . $value['id_ta']) ?>" class="btn btn-success">Delete</a>
                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
<?php   } ?>