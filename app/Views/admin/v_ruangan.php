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
                    <a href="<?php echo base_url('ruangan/tampil_add') ?>" class="btn btn-box-tool"><i class="fa fa-plus"></i> add</a>
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
                            <th>Gedung</th>
                            <th>Ruangan</th>
                            <th width="150" class="text-center">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($ruangan as $key => $value) { ?>

                            <tr>
                                <td> <?= $no++; ?> </td>
                                <td><?= $value['gedung'] ?></td>
                                <td><?= $value['ruangan'] ?></td>
                                <td class="text-center">
                                    <!-- <button class="btn btn-primary" data-toggle="modal"><i class="fa fa-edit"></i> </button> -->
                                    <a href="<?php echo base_url('ruangan/edit/' . $value['id_ruangan']) ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                    <button class="btn btn-danger" data-toggle="modal" data-target="#delete<?= $value['id_ruangan'] ?>"><i class="fa fa-trash"></i></button>

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
                <h4 class="modal-title">Add Ruangan</h4>
            </div>
            <div class="modal-body">

                <?php
                echo form_open('ruangan/add');
                ?>

                <div class="form-group">
                    <label> Ruangan</label>
                    <input name="ruangan" class="form-control" placeholder="ruangan" required>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left btn-flat" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success btn-flat">Simpan</button>
            </div>
            <?php echo form_close() ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<!--modal edit-->
<?php foreach ($ruangan as $key => $value) { ?>
    <div class="modal fade" id="edit<?= $value['id_ruangan'] ?>">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">edit Ruangan</h4>
                </div>
                <div class="modal-body">

                    <?php
                    echo form_open('ruangan/edit/' . $value['id_ruangan']);
                    ?>

                    <div class="form-group">
                        <label> Ruangan</label>
                        <input name="ruangan" class="form-control" placeholder="ruangan" value="<?php echo $value['ruangan'] ?>" required>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left btn-flat" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success btn-flat">Simpan</button>
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
<?php foreach ($ruangan as $key => $value) { ?>
    <div class="modal fade" id="delete<?= $value['id_ruangan'] ?>">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">delete Ruangan</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <p> apakah anda ingin menghapus data ini <b><?= $value['ruangan'] ?></b> </p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left btn-flat" data-dismiss="modal">Close</button>
                    <a href="<?= base_url('ruangan/delete/' . $value['id_ruangan']) ?>" class="btn btn-success">Delete</a>
                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
<?php   } ?>