<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Profil</h3>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">

      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div>
            <div class="clearfix"></div>
          </div>

          <div class="x_panel col-md-12 col-sm-12">

            <div class="x_content center-margin">
              <div class="col-md-3 col-sm-12  profile_left">
                <div class="profile_img">
                  <div id="crop-avatar">
                    <!-- Current avatar -->
                    <img class="img-responsive avatar-view" src="
                          <?=
                          base_url('assets/img/profile_pelamar/') . $pelamar['foto'];
                          ?>" alt="Avatar" title="Change the avatar" width="200" height="250">
                  </div>
                </div>
              </div>
              <!-- start skills -->

              <!-- end of skills -->

              <div class="col-md-7 col-sm-12">
                <div>
                  <h3><?= $pelamar['nama']; ?></h3><br>
                </div>
                <div style="margin-bottom: 10px;">
                  <i class="fa fa-map-marker" style="margin-right: 22px; font-size:large"></i><a style="font-size: 20px;"><?= $pelamar['alamat']; ?></a><br>
                </div>
                <div style="margin-bottom: 10px;">
                  <i class="fa fa-birthday-cake" style="margin-right: 14px; font-size:large"></i><a style="font-size: 20px;"><?= $pelamar['tanggal_lahir']; ?></a><br>
                </div>
                <div style="margin-bottom: 10px;">
                  <i class="fa fa-phone" style="margin-right: 18px; font-size:large"></i><a style="font-size: 20px;"><?= $pelamar['no_hp']; ?></a><br>
                </div>
                <div style="margin-bottom: 10px;">
                  <i class="fa fa-paper-plane" style="margin-right: 15px; font-size:large"></i><a style="font-size: 20px;"><?= $pelamar['email']; ?></a><br>
                </div>
              </div>
            </div>

            <div class="col-md-2 col-sm-12" style="margin-left: 0px;">
              <button type="button" class="btn btn-round btn-success"><i class="fa fa-edit"></i>Ubah</button>
            </div>

          </div>