	<script src="<?php echo base_url('/resources/jquery/jquery/dist/jquery.js') ?>"></script>
	<script type="text/javascript">

        function change_hadiah(str) {
            $('#pilihan_hadiah > option').remove();
            document.getElementById("button_lanjut").className = "btn btn-default disabled";
            $.ajax({
                type: "POST",
                url : "http://localhost/ukmjaya/data/get_hadiah_proposal/"+<?php echo $proposal->result_array()[0]['id_proposal']; ?>+"/"+str,
                success : function(hadiah) {
                    $.each(hadiah, function(minimal_pinjaman,hadiah) {
                    	opt = $('<option/>');
                        opt.val(minimal_pinjaman);
                        opt.text(hadiah);
                        $('#pilihan_hadiah').append(opt);
                        document.getElementById("button_lanjut").className = "btn btn-default";
                    });
                }
            });
        }

    </script>

	<style>

		.text-biasa {
			font-size:16px;
			text-align: left;
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
                	<div class="col-md-2"></div>
                	<div class="col-md-8">
                        <div class="row" style="background-color: #2C3E50; padding: 15px;">
                        	<h2 style="margin-bottom:30px;">Danai Permintaan</h2>
                        	<p class="text-biasa">Jumlah yang ingin dipinjamkan (Rp.)</p>
                        	<input type="text" id="jumlah_pinjaman" class="form-control" style="width:65%; margin-bottom: 20px;" onkeyup="change_hadiah(this.value)" onkeydown="change_hadiah(this.value)">
                        	<div class="row">
                        		<div class="col-md-8">
                        			<p class="text-biasa">Pilih Hadiah</p>
                        			<select id="pilihan_hadiah" name="pilihan_hadiah" class="form-control" style="color:black;">
                        			</select>
                        		</div>
                        		<div class="col-md-4">
                        			<button type="button" id="button_lanjut" class="btn btn-default disabled" style="width:100%; height:66px;">Lanjut</button>
                        		</div>
                        	</div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </header>