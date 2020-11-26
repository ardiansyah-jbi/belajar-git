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
                    <a href="<?php echo base_url('mhs/tampil_add') ?>" class="btn btn-box-tool"><i class="fa fa-plus"></i> add</a>
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
                            <th>Nim</th>
                            <th>Nama Mahasiswa</th>
                            <th>Prodi</th>
                            <th>Password</th>
                            <th>Foto</th>
                            <th width="150" class="text-center">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($mhs as $key => $value) { ?>

                            <tr>
                                <td> <?= $no++; ?> </td>
                                <td><?= $value['nim'] ?></td>
                                <td><?= $value['nama_mhs'] ?></td>
                                <td><?= $value['prodi'] ?></td>
                                <td><?= $value['password'] ?></td>
                                <td class="text-center"><img src="<?php echo base_url('fotomhs/' . $value['foto_mhs']) ?>" class="img-circle" width="70px" height="70px"></td>
                                <td class="text-center">
                                    <!-- <button class="btn btn-primary" data-toggle="modal"><i class="fa fa-edit"></i> </button> -->
                                    <a href="<?php echo base_url('mhs/edit/' . $value['id_mhs']) ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                    <button class="btn btn-danger" data-toggle="modal" data-target="#delete<?= $value['id_mhs'] ?>"><i class="fa fa-trash"></i></button>
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
<?php foreach ($mhs as $key => $value) { ?>
    <div class="modal fade" id="delete<?= $value['id_mhs'] ?>">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Delete Mahasiswa</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <p> apakah anda ingin menghapus data ini <b><?= $value['nama_mhs'] ?></b> </p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left btn-flat" data-dismiss="modal">Close</button>
                    <a href="<?= base_url('mhs/delete/' . $value['id_mhs']) ?>" class="btn btn-success">Delete</a>
                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
<?php   } ?>