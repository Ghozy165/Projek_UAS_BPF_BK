<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Data Loker di Bk.id</h3>
            </div>
            <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group row pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                    <div class="input-group">
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2></h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <!--Add content to the page ...-->
                        <div class="center-margin col-md-12 col-sm-12">



                            <!--<?php
                                $id = 1;
                                foreach ($loker as $a) {
                                ?>-->
                            <div class="x_panel">
                                <div class="center-margin x_content">

                                    <div class="row fontawesome-icon-list">

                                        <div class="col-md-1 col-sm-12 form-group" style="margin: 10px;">
                                            <img src="
                                                        <?= base_url('assets/img/loker/') . $a['foto']; ?>" alt="img" width="100" height="100" />

                                        </div>

                                        <div class=" col-md-7 col-sm-12 form-group">

                                            <strong style="font-size: 25px;"><a href="#"><?php echo $a['posisi_pekerjaan'] ?></strong></a><br>
                                            <a href="#" style="font-size: 20px;"><?php echo $a['id_perusahaan'] ?></a><br>
                                            <i class="fa fa-map-marker" style="margin-right: 18px;"></i><?php echo $a['alamat_penempatan'] ?><br>
                                            <i class="fa fa-money" style="margin-right: 10px;"></i><?php echo $a['estimasi_gaji'] ?><br>
                                        </div>


                                        <div class="col-md-3 col-sm-12 form-group">
                                            <br>
                                            <p style="margin-left: 125px">
                                                <?php echo $a['tanggal_tutup'] ?><i class="fa fa-calendar" style="margin-left: 10px;"></i></p>

                                            <div class=" fa-hover col-md-7 col-sm-12"></div>
                                            <div class=" fa-hover col-md-3 col-sm-12">
                                            <button type="button" class="btn btn-round btn-danger">menghapus Loker</button>
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
                    </div>
                    <div class="clearfix"></div>
                </div>


                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>