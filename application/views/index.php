    <style>

        .text-biasa {
            color: black;
            font-size: 15px;
        }

        .image-index {
            margin-bottom: 0px;
        }

        .panel-ukm {
            background-color: white;
            height: 100px;
            padding-left: 10px;
            padding-right: 10px;
        }

        .judul-panel {
            padding-top: 10px;
        }

        .rapat-kiri {
            text-align: left;
        }

        .rapat-kanan {
            text-align: right;
        }

    </style>

    <!-- Proyek Populer -->
    <header>
        <div class="container" style="padding-top: 150px;">
            <div class="row" style="margin-bottom: 50px;">
                <div class="col-lg-12">
                    <div class="intro-text">
                        <span class="name">PROPOSAL UKM POPULER</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($proposal_populer->result() as $row) { ?>
                    <a href="<?php echo base_url('proposal/'.$row->id_proposal); ?>">
                    <div class="col-sm-4">
                        <img src="<?php echo base_url(); ?>resources/img/portfolio/cabin.png" class="img-responsive image-index" alt="">
                        <div class="panel-ukm">
                            <b><p class="judul-panel text-biasa rapat-kiri"><?php echo $row->nama; ?></p></b>
                            <div class="progress" style="margin-bottom: 10px;">
                                <div class="progress-bar" role="progressbar" style="width: <?php echo $row->persentase; ?>%;">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="text-biasa rapat-kiri">
                                        <?php 
                                        if ($row->persentase == NULL)
                                            echo 0;
                                        else
                                            echo number_format($row->persentase, 0);
                                        ?>%
                                    </p>
                                </div>
                                <div class="col-md-6"><p class="text-biasa rapat-kanan"><?php echo ceil((strtotime($row->batas_waktu)-time())/60/60/24); ?> hari lagi</p></div>
                            </div>
                        </div>
                    </div>
                    </a>
                <?php } ?>
            </div>
        </div>
    </header>