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
            </tr>
        </thead>

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
                        <?php $no = 1;
                        foreach ($matkul_war as $key => $value) {  ?>
                            <tr>
                                <td><?= $no++; ?> </td>
                                <td><?= $value['kode_matakul']; ?> </td>
                                <td><?= $value['matkul']; ?> </td>
                                <td><?= $value['sks']; ?></td>
                                <td><?= $value['smt']; ?></td>
                                <td><?= $value['nama_kelas']; ?> </td>
                                <td><?= $value['ruangan']; ?></td>
                                <td><?= $value['nama_dosen']; ?> </td>
                                <td><span class="label label-success">0/<?= $value['quota']; ?></span></td>
                                <td><?= $value['hari']; ?>,<?= $value['waktu']; ?></td>
                                <td> <button class="btn btn-flat btn-success btn-sm"><i class="fa fa-plus"></i> </button></td>


                            </tr>
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