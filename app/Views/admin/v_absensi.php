<section class="content-header">
    <h1>
        Absensi (<?= $title; ?>) : <?= $ta_dinamis['ta']; ?>/ <?= $ta_dinamis['semester']; ?>
    </h1>
</section>
<br>
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
        <table class="table table-bordered table-striped table-responsive">
            <thead>
                <tr class="label-success">
                    <th rowspan="2" class="text-center" width="50">no</th>
                    <th rowspan="2" class="text-center">Kode mata kuliah</th>
                    <th rowspan="2" class="text-center">Mata Kuliah</th>
                    <th class="text-center" colspan="18">Pertemuan</th>
                    <th>%</th>
                </tr>
                <tr class="label-success">
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                    <th>6</th>
                    <th>7</th>
                    <th>8</th>
                    <th>9</th>
                    <th>10</th>
                    <th>11</th>
                    <th>12</th>
                    <th>13</th>
                    <th>14</th>
                    <th>15</th>
                    <th>16</th>
                    <th>17</th>
                    <th>18</th>
                    <th>%</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($data_krs as $key => $value) { ?>

                    <tr>
                        <td> <?= $no++; ?> </td>
                        <td class="text-center"><?= $value['kode_matakul'] ?></td>
                        <td class="text-center"><?= $value['matkul'] ?></td>
                        <td>
                            <?php if ($value['p1'] == 0) {  ?>
                                <?php echo  '<i class="fa fa-times text-danger"></i>'  ?>
                            <?php  } elseif ($value['p1'] == 1) { ?>
                                <?php echo '<i class="fa fa-info text-warning"></i>' ?>
                            <?php  } elseif ($value['p1'] == 2) { ?>
                                <?php echo '<i class="fa fa-check text-success"></i>' ?>
                            <?php  } ?>
                        </td>
                        <td>
                            <?php if ($value['p2'] == 0) {  ?>
                                <?php echo  '<i class="fa fa-times text-danger"></i>'  ?>
                            <?php  } elseif ($value['p2'] == 1) { ?>
                                <?php echo '<i class="fa fa-info text-warning "></i>' ?>
                            <?php  } elseif ($value['p2'] == 2) { ?>
                                <?php echo '<i class="fa fa-check text-success"></i>' ?>
                            <?php  } ?>
                        </td>
                        <td>
                            <?php if ($value['p3'] == 0) {  ?>
                                <?php echo  '<i class="fa fa-times text-danger"></i>'  ?>
                            <?php  } elseif ($value['p3'] == 1) { ?>
                                <?php echo '<i class="fa fa-info text-warning"></i>' ?>
                            <?php  } elseif ($value['p3'] == 2) { ?>
                                <?php echo '<i class="fa fa-check text-success"></i>' ?>
                            <?php  } ?>

                        </td>
                        <td>
                            <?php if ($value['p4'] == 0) {  ?>
                                <?php echo  '<i class="fa fa-times text-danger"></i>'  ?>
                            <?php  } elseif ($value['p4'] == 1) { ?>
                                <?php echo '<i class="fa fa-info text-warning"></i>' ?>
                            <?php  } elseif ($value['p4'] == 2) { ?>
                                <?php echo '<i class="fa fa-check text-success"></i>' ?>
                            <?php  } ?>
                        </td>
                        <td>
                            <?php if ($value['p5'] == 0) {  ?>
                                <?php echo  '<i class="fa fa-times text-danger"></i>'  ?>
                            <?php  } elseif ($value['p5'] == 1) { ?>
                                <?php echo '<i class="fa fa-info text-warning"></i>' ?>
                            <?php  } elseif ($value['p5'] == 2) { ?>
                                <?php echo '<i class="fa fa-check text-success"></i>' ?>
                            <?php  } ?>

                        </td>
                        <td>
                            <?php if ($value['p6'] == 0) {  ?>
                                <?php echo  '<i class="fa fa-times text-danger"></i>'  ?>
                            <?php  } elseif ($value['p6'] == 1) { ?>
                                <?php echo '<i class="fa fa-info text-warning"></i>' ?>
                            <?php  } elseif ($value['p6'] == 2) { ?>
                                <?php echo '<i class="fa fa-check text-success"></i>' ?>
                            <?php  } ?>
                        </td>
                        <td>
                            <?php if ($value['p7'] == 0) {  ?>
                                <?php echo  '<i class="fa fa-times text-danger"></i>'  ?>
                            <?php  } elseif ($value['p7'] == 1) { ?>
                                <?php echo '<i class="fa fa-info text-warning"></i>' ?>
                            <?php  } elseif ($value['p7'] == 2) { ?>
                                <?php echo '<i class="fa fa-check text-success"></i>' ?>
                            <?php  } ?>
                        </td>
                        <td>
                            <?php if ($value['p8'] == 0) {  ?>
                                <?php echo  '<i class="fa fa-times text-danger"></i>'  ?>
                            <?php  } elseif ($value['p8'] == 1) { ?>
                                <?php echo '<i class="fa fa-info text-warning"></i>' ?>
                            <?php  } elseif ($value['p8'] == 2) { ?>
                                <?php echo '<i class="fa fa-check text-success"></i>' ?>
                            <?php  } ?>
                        </td>
                        <td>
                            <?php if ($value['p9'] == 0) {  ?>
                                <?php echo  '<i class="fa fa-times text-danger"></i>'  ?>
                            <?php  } elseif ($value['p9'] == 1) { ?>
                                <?php echo '<i class="fa fa-info text-warning"></i>' ?>
                            <?php  } elseif ($value['p9'] == 2) { ?>
                                <?php echo '<i class="fa fa-check text-success"></i>' ?>
                            <?php  } ?>
                        </td>
                        <td>
                            <?php if ($value['p10'] == 0) {  ?>
                                <?php echo  '<i class="fa fa-times text-danger"></i>'  ?>
                            <?php  } elseif ($value['p10'] == 1) { ?>
                                <?php echo '<i class="fa fa-info text-warning</i>' ?>
                            <?php  } elseif ($value['p10'] == 2) { ?>
                                <?php echo '<i class="fa fa-check text-success"></i>' ?>
                            <?php  } ?>
                        </td>
                        <td>
                            <?php if ($value['p11'] == 0) {  ?>
                                <?php echo  '<i class="fa fa-times text-danger"></i>'  ?>
                            <?php  } elseif ($value['p11'] == 1) { ?>
                                <?php echo '<i class="fa fa-info text-warning"></i>' ?>
                            <?php  } elseif ($value['p11'] == 2) { ?>
                                <?php echo '<i class="fa fa-check text-success"></i>' ?>
                            <?php  } ?>
                        </td>
                        <td>
                            <?php if ($value['p12'] == 0) {  ?>
                                <?php echo  '<i class="fa fa-times text-danger"></i>'  ?>
                            <?php  } elseif ($value['p12'] == 1) { ?>
                                <?php echo '<i class="fa fa-info text-warning"></i>' ?>
                            <?php  } elseif ($value['p12'] == 2) { ?>
                                <?php echo '<i class="fa fa-check text-success"></i>' ?>
                            <?php  } ?>
                        </td>
                        <td>
                            <?php if ($value['p13'] == 0) {  ?>
                                <?php echo  '<i class="fa fa-times text-danger"></i>'  ?>
                            <?php  } elseif ($value['p13'] == 1) { ?>
                                <?php echo '<i class="fa fa-info text-warning"></i>' ?>
                            <?php  } elseif ($value['p13'] == 2) { ?>
                                <?php echo '<i class="fa fa-check text-success"></i>' ?>
                            <?php  } ?>
                        </td>
                        <td>
                            <?php if ($value['p14'] == 0) {  ?>
                                <?php echo  '<i class="fa fa-times text-danger"></i>'  ?>
                            <?php  } elseif ($value['p14'] == 1) { ?>
                                <?php echo '<i class="fa fa-info text-warning"></i>' ?>
                            <?php  } elseif ($value['p14'] == 2) { ?>
                                <?php echo '<i class="fa fa-check text-success"></i>' ?>
                            <?php  } ?>
                        </td>
                        <td>
                            <?php if ($value['p15'] == 0) {  ?>
                                <?php echo  '<i class="fa fa-times text-danger"></i>'  ?>
                            <?php  } elseif ($value['p15'] == 1) { ?>
                                <?php echo '<i class="fa fa-info text-warning"></i>' ?>
                            <?php  } elseif ($value['p15'] == 2) { ?>
                                <?php echo '<i class="fa fa-check text-success"></i>' ?>
                            <?php  } ?>
                        </td>
                        <td>
                            <?php if ($value['p16'] == 0) {  ?>
                                <?php echo  '<i class="fa fa-times text-danger"></i>'  ?>
                            <?php  } elseif ($value['p16'] == 1) { ?>
                                <?php echo '<i class="fa fa-info text-warning"></i>' ?>
                            <?php  } elseif ($value['p16'] == 2) { ?>
                                <?php echo '<i class="fa fa-check text-success"></i>' ?>
                            <?php  } ?>
                        </td>
                        <td>
                            <?php if ($value['p17'] == 0) {  ?>
                                <?php echo  '<i class="fa fa-times text-danger"></i>'  ?>
                            <?php  } elseif ($value['p17'] == 1) { ?>
                                <?php echo '<i class="fa fa-info text-warning"></i>' ?>
                            <?php  } elseif ($value['p17'] == 2) { ?>
                                <?php echo '<i class="fa fa-check text-success"></i>' ?>
                            <?php  } ?>
                        </td>
                        <td>
                            <?php if ($value['p18'] == 0) {  ?>
                                <?php echo  '<i class="fa fa-times text-danger"></i>'  ?>
                            <?php  } elseif ($value['p18'] == 1) { ?>
                                <?php echo '<i class="fa fa-info text-warning"></i>' ?>
                            <?php  } elseif ($value['p18'] == 2) { ?>
                                <?php echo '<i class="fa fa-check text-success text-success"></i>' ?>
                            <?php  } ?>
                        </td>
                        <td>
                            <?php
                            $absensi = ($value['p1'] +
                                $value['p2'] +
                                $value['p3'] +
                                $value['p4'] +
                                $value['p5'] +
                                $value['p6'] +
                                $value['p7'] +
                                $value['p8'] +
                                $value['p9'] +
                                $value['p10'] +
                                $value['p11'] +
                                $value['p12'] +
                                $value['p13'] +
                                $value['p14'] +
                                $value['p15'] +
                                $value['p16'] +
                                $value['p17'] +
                                $value['p18'])
                                / 36 * 100;
                            echo $absensi;
                            ?>
                        </td>
                    </tr>
                <?php  } ?>
            </tbody>
        </table>
    </div>
    <!-- /.box-body -->
</div>