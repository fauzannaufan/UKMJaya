    <style>

        .proposal {
            text-align: left;
            font-size:18px;
        }

    </style>

    <!-- Lihat Proposal -->
    <header>
        <?php foreach ($proposal->result() as $row) { ?>
            <div class="container" style="padding-top: 100px;">
                <div class="row" style="margin-bottom: 50px;">
                    <div class="col-lg-12">
                        <div class="intro-text">
                            <span class="name" style="font-size:4.5em;">Permintaan Pendanaan</span>
                            <span class="name" style="font-size:1.75em;">oleh <?php echo $ukm; ?></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <h2 style="margin-bottom:30px;">Tentang Proposal</h2>
                        <p class="proposal">
                            <?php echo $row->konten; ?>
                        </p>
                    </div>
                    <div class="col-md-4" style="text-align: left; padding-left:50px;">
                        <div class="row">
                            <h2><?php echo $pendanaan['jumlah_funder']; ?></h2>
                            <p>funder</p>
                        </div>
                        <div class="row">
                            <h2 style="text-transform:none;">
                                Rp<?php if ($pendanaan['jumlah_dana'] == NULL) {
                                    echo "0";
                                } else {
                                    echo $pendanaan['jumlah_dana'];
                                } ?>
                            </h2>
                            <p>dari target Rp<?php echo number_format($row->kebutuhan_dana,0,",","."); ?></p>
                        </div>
                        <div class="row">
                            <h2>10</h2>
                            <p>hari lagi</p>
                        </div>
                        <div class="row" style="margin-top:15px;">
                            <button type="button" class="btn btn-primary" style="font-size:22px;width:60%;">Danai Proyek</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </header>