 <section class="content-header">
     <h1>
         Jadwal kuliah <?= $title; ?> : <?= $ta_dinamis['ta']; ?>/ <?= $ta_dinamis['semester']; ?>
     </h1>
 </section>

 <br>
 <div class="row">
     <div class="col-sm-12">
         <div class="box box-success box-solid">

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

                             <th width="150" class="text-center">action</th>
                         </tr>
                     </thead>
                     <tbody>
                         <?php
                            $no = 1;
                            foreach ($prodi as $key => $value) { ?>

                             <tr>
                                 <td> <?= $no++; ?> </td>
                                 <td><?= $value['fakultas'] ?></td>
                                 <td><?= $value['kode_prodi'] ?></td>
                                 <td><?= $value['prodi'] ?></td>
                                 <td><?= $value['jenjang'] ?></td>
                                 <td class="text-center">
                                     <a href="<?php echo base_url('jadwal_ta/detailjadwal/' . $value['id_prodi']) ?>" class="btn btn-success btn-flat btn-sm"><i class="fa fa-calendar"></i></a>
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