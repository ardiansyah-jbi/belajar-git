<section class="content-header">
    <h1>
        <?= $title; ?>
    </h1>
</section>

<br>
<div class="row">
    <div class="col-sm-12">
        <div class="box box-success box-solid">

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
                            <th width="50">no</th>
                            <th>Fakultas</th>
                            <th>Kode Prodi</th>
                            <th>Prodi</th>
                            <th>Jenjang</th>
                            <th>Matakuliah</th>
                            <th width="150" class="text-center">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $db = \Config\Database::connect();

                        $no = 1;
                        foreach ($prodi as $key => $value) {
                            $jml = $db->table('tbl_matakul')
                                ->where('id_prodi', $value['id_prodi'])
                                ->countAllResults();
                        ?>

                            <tr>
                                <td> <?= $no++; ?> </td>
                                <td><?= $value['fakultas'] ?></td>
                                <td><?= $value['kode_prodi'] ?></td>
                                <td><?= $value['prodi'] ?></td>
                                <td class="text-center"><?= $value['jenjang'] ?></td>
                                <td class="text-center">
                                    <p class="label text-center bg-green"><?= $jml; ?></p>
                                </td>
                                <td class="text-center">
                                    <a href="<?= base_url('matkul/detail/' . $value['id_prodi']) ?>" class="btn btn-warning"><i class="fa fa-th-list"></i> Matakuliah</a>
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