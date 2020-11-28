<section class="content-header">
    <h1>
        Kartu Rencana Studi (<?= $title; ?>) : <?= $ta_dinamis['ta']; ?>/ <?= $ta_dinamis['semester']; ?>
    </h1>
</section>
<br>
<div class="row">
    <table class="table-striped table-responsive">
        <tr>
            <th rowspan="7"><img src="<?= base_url('fotomhs/' . $krs['foto_mhs']) ?>" width="140px"> </th>
            <th width="150px">Tahun akademik</th>
            <th width="20px">:</th>
            <th><?= $ta_dinamis['ta']; ?>/ <?= $ta_dinamis['semester']; ?></th>
            <th rowspan="7"></th>

        </tr>
        <tr>
            <td>Nim</td>
            <td>:</td>
            <td><?= $krs['nim'] ?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?= $krs['nama_mhs'] ?></td>
        </tr>
        <tr>
            <td>Fakultas</td>
            <td>:</td>
            <td><?= $krs['fakultas']; ?></td>
        </tr>
        <tr>
            <td>Program Studi</td>
            <td>:</td>
            <td><?= $krs['prodi']; ?></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><?= $krs['nama_kelas']; ?></td>
        </tr>
        <tr>
            <td>Dosen PA</td>
            <td>:</td>
            <td><?= $krs['nama_dosen']; ?></td>
        </tr>

    </table>
</div>
<br>
<div class="col-sm-12">
    <button class="btn btn-sm btn-flat btn-primary" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i>Add Matakuliah</button>
    <button class="btn   btn-sm btn-flat btn-success"><i class="fa fa-print"></i>Cetak KRS</button>
</div>
<br>
<div class="col-sm-12">
    <?php

    if (session()->getFlashdata('pesan')) {
        echo '<div class="alert alert-success" role="alert">';
        echo session()->getFlashdata('pesan');
        echo '</div>';
    }
    ?>
</div>
<div class="col-sm-12">
    <table class="table table-bordered table-striped table-responsive">
        <thead>

            <tr class="label-success">
                <td>#</td>
                <td>Kode</td>
                <td>Matakuliah</td>
                <td>SKS</td>
                <td>SMT</td>
                <td>Kelas</td>
                <td>Ruang</td>
                <td>Dosen</td>
                <td>Waktu</td>
                <td>action</td>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($data_krs as $key => $value) {  ?>

                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $value['kode_matakul'] ?></td>
                    <td><?= $value['matkul'] ?></td>
                    <td><?= $value['sks'] ?></td>
                    <td><?= $value['smt']; ?> </td>
                    <td><?= $value['nama_kelas']; ?> </td>
                    <td><?= $value['ruangan']; ?> </td>
                    <td><?= $value['nama_dosen']; ?> </td>
                    <td><?= $value['hari']; ?>|<?= $value['waktu']; ?></td>
                    <td>
                        <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value['id_krs'] ?>"><i class="fa fa-trash"></i></button>
                    </td>

                </tr>

            <?php  } ?>
        </tbody>

    </table>
</div>


<div class="modal fade" id="add">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Daftar Matakuliah Yang Ditawarkan :</h4>
            </div>
            <div class="modal-body">

                <table class="table table-bordered table-striped text-sm" id="example1">
                    <thead>
                        <tr class="label-primary">
                            <td>#</td>
                            <td>Kode</td>
                            <td>Matakuliah</td>
                            <td>SKS</td>
                            <td>SMT</td>
                            <td>Kelas</td>
                            <td>Ruang</td>
                            <td>Dosen</td>
                            <td>Quota</td>
                            <td>Waktu</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $db = \Config\Database::connect();
                        $no = 1;
                        foreach ($matkul_war as $key => $value) {
                            $jml_krs = $db->table('tbl_krs')
                                ->where('id_jadwal', $value['id_jadwal'])
                                ->countAllResults();
                        ?>

                            <?php if ($value['id_prodi'] == $krs['id_prodi']) {  ?>

                                <tr>
                                    <td><?= $no++; ?> </td>
                                    <td><?= $value['kode_matakul']; ?> </td>
                                    <td><?= $value['matkul']; ?> </td>
                                    <td><?= $value['sks']; ?></td>
                                    <td><?= $value['smt']; ?></td>
                                    <td><?= $value['nama_kelas']; ?> </td>
                                    <td><?= $value['ruangan']; ?></td>
                                    <td><?= $value['nama_dosen']; ?> </td>
                                    <td><span class="label label-success"><?= $jml_krs; ?>/<?= $value['quota']; ?></span></td>
                                    <td><?= $value['hari']; ?>,<?= $value['waktu']; ?></td>
                                    <?php if ($jml_krs == $value['quota']) {  ?>
                                        <td>
                                            <span class="label label-danger">Penuh</span>
                                        </td>
                                    <?php  } else { ?>
                                        <td>
                                            <a href="<?php echo base_url('krs/nambah/' . $value['id_jadwal']) ?>" class="btn btn-flat btn-success btn-sm"><i class="fa fa-plus"></i> </a>
                                        </td>
                                    <?php  } ?>

                                </tr>
                            <?php  } ?>
                        <?php  } ?>
                    </tbody>
                </table>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left btn-flat" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success btn-flat">Simpan</button>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<!--modal delete-->
<?php foreach ($data_krs as $key => $value) { ?>
    <div class="modal fade" id="delete<?= $value['id_krs'] ?>">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">delete krs</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <p> apakah anda ingin menghapus data ini <b><?= $value['matkul'] ?></b> </p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left btn-flat" data-dismiss="modal">Close</button>
                    <a href="<?= base_url('krs/delete/' . $value['id_krs']) ?>" class="btn btn-success">Delete</a>
                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
<?php   } ?>