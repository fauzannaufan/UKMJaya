	<style>

		.panel-ukm {
			background-color: #2C3E50;
			padding: 10px;
		}

		.judul-panel {
			color: white;
			font-size: 20px;
			padding: 10px 0;
		}

		.text-biasa {
			color: white;
			font-size: 14px;
			text-align: left;
			padding-left: 5px;
		}

		.text-bawah {
			margin-bottom: 25px;
		}

	</style>

	<!-- Index UKM -->
	<header>
		<div class="container" style="padding-top: 100px;">
			<div class="row" style="margin-bottom: 50px;">
				<div class="col-lg-12">
					<div class="intro-text">
						<span class="name">HALAMAN UKM</span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
                    <div class="panel-ukm">
                        <b><p class="judul-panel">Data UKM</p></b>
                        <?php foreach ($ukm->result() as $row) { ?>
                        	<p class="text-biasa">Nama : <?php echo $user; ?></p>
                        	<p class="text-biasa">Sektor UKM : <?php echo ucwords(strtolower($row->nama));?></p>
                        	<p class="text-biasa">Jenis UKM : <?php echo $row->jenis;?></p>
                        	<p class="text-biasa text-bawah">Alamat : <?php echo $row->alamat; ?></p>
                        <?php } ?>
                        <!-- <button class="btn btn-default">Ubah Data UKM</button> -->
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel-ukm">
                        <b><p class="judul-panel">Data Pemilik UKM</p></b>
                        <?php foreach ($pemilik_ukm->result() as $row) { ?>
                        	<p class="text-biasa">Nama : <?php echo $row->nama; ?></p>
                        	<p class="text-biasa">Alamat : <?php echo $row->alamat_rt_rw; ?></p>
                        	<p class="text-biasa">No Telepon : <?php echo $row->no_telepon; ?></p>
                        	<p class="text-biasa text-bawah">No Handphone : <?php echo $row->no_hp; ?></p>
                        <?php } ?>
                        <!-- <button class="btn btn-default">Ubah Data Pemilik UKM</button> -->
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel-ukm">
                        <b><p class="judul-panel">Histori Proposal</p></b>
                        <?php 
                        $i = 1;
                        foreach ($proposal_ukm->result() as $row) {
                            echo "<div class=\"row\">";
                            echo "<div class=\"col-md-6\">";
                        	if ($proposal_ukm->num_rows() == $i) {
                        		echo "<p class=\"text-biasa text-bawah\">Proposal ".$i."<br>";
                        	} else {
                        		echo "<p class=\"text-biasa\">Proposal ".$i."<br>";
                        	}

                        	if (time() < strtotime($row->batas_waktu)) {
                        		echo "Pendanaan Proposal</p>";
                                echo "</div>";
                                echo "<div class=\"col-md-2\" style=\"margin-right:10px;\"><a href=\"proposal/".$row->id_proposal."/kelola_proposal\"><button class=\"btn btn-default\">Kelola</button></a></div>";
                        	} else if (time() > strtotime($row->batas_waktu) && time() < strtotime($row->waktu_penggunaan)) {
                        		echo "Penggunaan Dana dan Pembuatan Hadiah</p>";
                                echo "</div><div class=\"col-md-2\"></div>";
                        	} else if (time() > strtotime($row->waktu_pengembalian)) {
                        		echo "Selesai</p>";
                                echo "</div><div class=\"col-md-3\"></div>";
                        	} else {
                        		echo "Pengembalian Dana Pinjaman</p>";
                                echo "</div><div class=\"col-md-3\"></div>";
                        	}
                            echo "<div class=\"col-md-3\"><a href=\"proposal/".$row->id_proposal."\"><button class=\"btn btn-default\">Lihat</button></a></div>";
                            echo "</div>";
                        	$i = $i+1;
                        } ?>	
                    </div>
                </div>
			</div>
			<hr>
			<div class="row">
				<h1 style="margin-bottom: 30px;">Ingin mendapatkan pendanaan?</h1>
				<a href="ukm/buat_proposal"><button class="btn btn-primary" style="width:50%;height:60px;font-size:20px;">Buat Proposal</button></a>
			</div>
		</div>
	</header>