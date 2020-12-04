<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Invoice</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body onload="window.print();">
    <div class="wrapper">
        <!-- Main content -->
        <section class="invoice">
            <!-- title row -->
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="page-header">
                        <i class="fa fa-book"></i> Kartu Rencana Studi
                        <small class="pull-right"><?php echo DATE('d M yy') ?></small>
                    </h2>
                </div>
                <!-- /.col -->
            </div>
            <!-- info row -->
            <div class="row invoice-info">
                <div class="col-sm-12 invoice-col">
                    <table class=" table-striped table-responsive">
                        <tr>
                            <th rowspan="7"><img src="<?= base_url('fotomhs/' . $krs['foto_mhs']) ?>" width="180px"> </th>
                            <th width="150px">Tahun akademik</th>
                            <th width="20px">:</th>
                            <th><?= $ta_dinamis['ta']; ?>/ <?= $ta_dinamis['semester']; ?></th>
                            <th rowspan="7"> </th>

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

            </div>
            <!-- /.row -->

            <br>
            <div class="row">

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
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            $sks = 0;
                            foreach ($data_krs as $key => $value) {
                                $sks = $sks + $value['sks'];

                            ?>

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

                                </tr>

                            <?php  } ?>
                        </tbody>

                    </table>
                </div>

                <!--/row-->


                <div class="col-xs-4">
                    <h4>Jumlah SKS : <?php echo $sks; ?></h4>

                </div>
                <div class="col-xs-4">

                </div>
                <div class="col-xs-4">
                    Jambi, <?php echo date('d M yy') ?>
                    <br>
                    Pembimbing akademik
                    <br>
                    dto.
                    <br>
                    <br>


                    <?= $krs['nama_dosen']; ?>
                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- ./wrapper -->
</body>

</html>