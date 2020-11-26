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
    <button class="btn btn-sm btn-flat btn-primary"><i class="fa fa-plus"></i>Add Matakuliah</button>
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