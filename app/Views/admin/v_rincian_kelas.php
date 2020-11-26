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
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width="150px">Nama Kelas</th>
                            <td width="30px">:</td>
                            <td width="200px"><?php echo $kelas['nama_kelas'] ?></td>
                            <th width="150px">Angkatan</th>
                            <td width="30px">:</td>
                            <td width><?php echo $kelas['tahun_angkatan'] ?></td>
                        </tr>
                        <tr>
                            <th>Program studi</th>
                            <td>:</td>
                            <td><?php echo $kelas['prodi'] ?></td>
                            <th>Jumlah</th>
                            <td>:</td>
                            <td><?php echo $jml; ?></td>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width="50">NO</th>
                            <th>NIM</th>
                            <th>Nama Mahasiswa</th>
                            <th>Action</th>
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
                                <td class="text-center">
                                    <a href="<?= base_url('kelas/remove_mhs/' . $value['id_mhs'] . '/' . $kelas['id_kelas']) ?>" class="btn btn-danger"><i class="fa fa-trash"></i> </a>
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
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Mahasiswa</h4>
            </div>
            <div class="modal-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>no</th>
                            <th>nim</th>
                            <th>nama mahasiswa</th>
                            <th>prodi</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($bmhs as $key => $value) { ?>
                            <?php if ($kelas['id_prodi'] == $value['id_prodi']) {  ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $value['nim'] ?></td>
                                    <td><?php echo $value['nama_mhs'] ?></td>
                                    <td><?php echo $value['prodi'] ?></td>
                                    <td>
                                        <a href="<?= base_url('kelas/nambah_mhs/' . $value['id_mhs'] . '/' . $kelas['id_kelas']) ?>" class="btn btn-success"><i class="fa fa-plus"></i> </a>
                                    </td>
                                </tr>
                            <?php  } ?>
                        <?php  } ?>
                    </tbody>
                </table>






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