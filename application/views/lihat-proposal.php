    <style>

        .proposal {
            text-align: left;
            font-size:18px;
        }

        .timeline {
            font-size:16px;
        }

        .left {
            text-align:left;
        }

        .right {
            text-align: right;
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
                        <?php
                            $bulan = array('','Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
                        ?>
                        <div class="row" style="padding-left: 15px; padding-right: 15px;">
                            <h2>Timeline Proposal</h2>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="timeline left">Pendanaan</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="timeline right">
                                        <?php
                                        echo $bulan[date("n", strtotime($row->batas_waktu))];
                                        echo date(" Y", strtotime($row->batas_waktu));
                                        ?>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="timeline left">Penggunaan dana dan pembuatan hadiah</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="timeline right">
                                        <?php
                                        echo $bulan[date("n", strtotime($row->waktu_penggunaan))];
                                        echo date(" Y", strtotime($row->waktu_penggunaan));
                                        ?>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="timeline left">Pengembalian dana pinjaman dan pengiriman hadiah</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="timeline right">
                                        <?php
                                        echo $bulan[date("n", strtotime($row->waktu_pengembalian))];
                                        echo date(" Y", strtotime($row->waktu_pengembalian));
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
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
                                    echo number_format($pendanaan['jumlah_dana'],0,",",".");
                                } ?>
                            </h2>
                            <p>dari target Rp<?php echo number_format($row->kebutuhan_dana,0,",","."); ?></p>
                        </div>
                        <div class="row">
                            <h2><?php echo ceil((strtotime($row->batas_waktu)-time())/60/60/24); ?></h2>
                            <p>hari lagi</p>
                        </div>
                        <?php if ($jenis_user == 'funder') { ?>
                            <div class="row" style="margin-top:15px;">
                                <a href="<?php echo $row->id_proposal; ?>/danai_proposal">
                                    <button type="button" class="btn btn-primary" style="font-size:22px;width:60%;">Danai Permintaan</button>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </header>