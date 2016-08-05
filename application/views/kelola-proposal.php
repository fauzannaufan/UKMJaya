	<style>
		table, tr, td, th {
			border : 1px solid black;
		}
	</style>

	<header>
		<div class="container" style="padding-top: 100px;">
			<div class="row" style="margin-bottom: 50px;">
				<div class="col-lg-12">
					<div class="intro-text">
						<span class="name">KELOLA PROPOSAL</span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6" style="text-align:left;">
					<h3>Dana yang masuk</h3>
					<h1 style="text-transform:none;">
						Rp<?php if ($pendanaan['jumlah_dana'] == NULL) {
							echo "0";
						} else {
							echo number_format($pendanaan['jumlah_dana'],0,",",".");
						} ?>
					</h1>
				</div>
				<div class="col-md-6" style="text-align:right;">
					<h3>Jumlah Funder</h3>
					<h1 style="text-transform:none;"><?php echo $pendanaan['jumlah_funder']; ?></h1>
				</div>
			</div>
			<hr>
			<div class="row">
				<table>
					<tr>
						<th>Nama</th>
						<th>Jumlah Pinjaman</th>
						<th>Pilihan Hadiah</th>
						<th>Waktu Pendanaan</th>
					</tr>
					<?php foreach ($proposal->result() as $row) { ?>
					<tr>
						<td><?php echo $row->nama; ?></td>
						<td><?php echo $row->jumlah; ?></td>
						<td><?php echo $row->hadiah; ?></td>
						<td><?php echo $row->waktu_pendanaan; ?></td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</header>