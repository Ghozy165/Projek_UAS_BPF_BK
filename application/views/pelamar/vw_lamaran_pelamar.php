<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>LAMARAN</h3>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
          <div class="x_content">

            <!--Add content to the page ...-->

            <div class="">
              <div class="col-md-12 col-sm-12 form-group">
                <div class="x_panel">

                  <div class="x_content">

                    <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">

                      <li class="nav-item col-md-5 col-sm-6 form-group">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#riwayat_lamaran" role="tab" aria-controls="home" aria-selected="true">

                          <div class="center-margin col-md-5">
                            RIWAYAT LAMARAN
                          </div>

                        </a>
                      </li>

                      <li class="nav-item col-md-5 col-sm-6 form-group">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#lamaran_tersimpan" role="tab" aria-controls="profile" aria-selected="false">
                          <div class="center-margin col-md-5">
                            LAMARAN DISIMPAN
                          </div>
                        </a>
                      </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">

                      <div class="tab-pane fade show active" id="riwayat_lamaran" role="tabpanel" aria-labelledby="home-tab">

                        <?php
                        $id = 1;
                        foreach ($loker as $a) {
                        ?>
                          <div class="x_panel">
                            <div class="center-margin x_content">

                              <div class="row fontawesome-icon-list">

                                <div class="col-md-1 col-sm-12 form-group" style="margin: 10px;">
                                  <img src="<?= base_url('assets/img/loker/') . $a['foto']; ?>" alt="img" width="100" height="100" />
                                </div>

                                <div class=" col-md-7 col-sm-12 form-group">
                                  <strong style="font-size: 25px;"><a href="#"><?php echo $a['posisi_pekerjaan'] ?></strong></a><br>
                                  <a href="#" style="font-size: 20px;"><?php echo $a['id_perusahaan'] ?></a><br>
                                  <i class="fa fa-map-marker" style="margin-right: 18px;"></i><?php echo $a['alamat_penempatan'] ?><br>
                                  <i class="fa fa-money" style="margin-right: 10px;"></i><?php echo $a['estimasi_gaji'] ?><br>
                                </div>


                                <div class="col-md-3 col-sm-12 form-group">
                                  <br>
                                  <p style="margin-left: 120px">
                                    <?php echo $a['tanggal_tutup'] ?><i class="fa fa-calendar" style="margin-left: 10px;"></i></p>

                                  <div class="col-md-5 col-sm-12"></div>
                                  <div class="col-md-4 col-sm-12">
                                    <p class="badge badge-success" style="font-size: 13px;">Sudah Terkirim&nbsp;<i class="glyphicon glyphicon-ok"></i>
                                    </p>
                                  </div>
                                </div>

                                <div class="col-md-1">

                                </div>
                              </div>

                            </div>
                          </div>
                        <?php
                          $id++;
                        } ?>

                      </div>



                      <div class="tab-pane fade" id="lamaran_tersimpan" role="tabpanel" aria-labelledby="profile-tab">

                        <?php
                        $id = 1;
                        foreach ($simpan as $b) {
                        ?>
                          <div class="x_panel">
                            <div class="center-margin x_content">

                              <div class="row fontawesome-icon-list">

                                <div class="col-md-1 col-sm-12 form-group" style="margin: 10px;">
                                  <img src="<?= base_url('assets/img/loker/') . $b['foto']; ?>" alt="img" width="100" height="100" />
                                </div>

                                <div class=" col-md-7 col-sm-12 form-group">

                                  <strong style="font-size: 25px;"><a href="#"><?php echo $b['posisi_pekerjaan'] ?></strong></a><br>
                                  <a href="#" style="font-size: 20px;"><?php echo $b['id_perusahaan'] ?></a><br>
                                  <i class="fa fa-map-marker" style="margin-right: 18px;"></i><?php echo $b['alamat_penempatan'] ?><br>
                                  <i class="fa fa-money" style="margin-right: 10px;"></i><?php echo $b['estimasi_gaji'] ?><br>
                                </div>


                                <div class="col-md-3 col-sm-12 form-group">
                                  <br>
                                  <p style="margin-left: 120px">
                                    <?php echo $b['tanggal_tutup'] ?><i class="fa fa-calendar" style="margin-left: 10px;"></i></p>

                                  <div class=" fa-hover col-md-7 col-sm-12"></div>
                                  <div class=" fa-hover col-md-3 col-sm-12">
                                    <a href="<?php echo base_url('index.php/Lamaran_pelamar/hapus_simpan_lamaran');?>?id_simpan_loker=<?=$b['id_simpan_loker']?>" style="height: 50px; width:55px; padding-top: 5px;">
                                      <i class="fa fa-star" style="font-size: 40px; color: #FFA500"></i></a>
                                  </div>
                                </div>
                              </div>

                              <div class="col-md-1">

                              </div>
                            </div>

                          </div>

                        <?php
                          $id++;
                        } ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>