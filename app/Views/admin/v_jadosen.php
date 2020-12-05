<section class="content-header">
    <h1>
        Jadwal Dosen (<?= $title; ?>) : <?= $ta_dinamis['ta']; ?>/ <?= $ta_dinamis['semester']; ?>
    </h1>
</section>
<br>
<div class="col-sm-12">
    <div class="box box-success box-solid">
        <div class="box-header with-border">
            <h3 class="box-title"> Data <?php echo $title; ?></h3>


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
                            <th class="text-center">Prodi</th>
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

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($jadosen as $key => $value) {  ?>


                            <tr>
                                <td> <?= $no++; ?> </td>
                                <td><?= $value['prodi']; ?></td>
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
                            </tr>
                        <?php  } ?>

                    </tbody>
                </table>

            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>