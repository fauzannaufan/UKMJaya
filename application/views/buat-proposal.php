    <script src="<?php echo base_url('/resources/jquery/jquery/dist/jquery.js') ?>"></script>
    <script type="text/javascript">

        var i = 1;

        function tambah_hadiah() {
            $('#hadiah').append('<div style="background-color: #18BC9C; padding: 15px; margin-bottom: 5px;" id="hadiah-'.concat(i).concat('"><button type="button" class="btn" style="background-color:white;padding:0 4px; float:right;" onclick="hapus_hadiah(\'#hadiah-').concat(i).concat('\')"><span class="glyphicon glyphicon-remove" style="color:#18BC9C;"></span></button><p class="label-form">Untuk jumlah pinjaman</p><p class="label-form"> Rp <input type="text" name="jumlah[]" style="color:black; width:70%;"> atau lebih</p><p class="label-form">Hadiah yang diberikan</p><textarea style="width:100%; color:black;" rows="3" name="jenis[]"></textarea></div>'));
            i = i+1;
        }

        function hapus_hadiah(id) {
            $(id).remove();
        }

    </script>

    <style>

        .label-form {
            text-align: left;
            font-size: 14px;
        }

        .label-hadiah {
            margin-bottom: 0px;
        }

    </style>

    <!-- Buat Proposal -->
    <header>
        <div class="container" style="padding-top: 150px;">
            <div class="row">
                <div class="col-md-2"></div>
				<div class="col-md-8" style="background-color:#2C3E50; padding-left: 35px; padding-right: 35px; padding-top: 15px; padding-bottom: 15px;">
                    <h3 style="text-align: center; margin-bottom: 30px;">Buat Proposal Pendanaan</h3>
                    <?php echo form_open('ukm/proses_proposal'); ?>
                        <div class="row control-group">
                            <div class="form-group col-xs-12">
                                <p class="label-form">Kebutuhan Dana (Rp.)</p>
                                <input type="text" name="kebutuhan_dana" class="form-control">
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12">
                                <p class="label-form">Jelaskan kenapa anda membutuhkan dana tersebut</p>
                                <textarea name="alasan" class="form-control" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12">
                                <p class="label-form">Batas Waktu Pendanaan Proposal</p>
                                <div class="col-md-6" style="padding:0px;">
                                    <input type="date" name="batas_waktu" class="form-control buat-proposal">
                                </div>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12">
                                <p class="label-form">Batas Waktu Penggunaan Dana dan Pembuatan Hadiah</p>
                                <div class="col-md-6" style="padding:0px;">
                                    <input type="date" name="waktu_penggunaan" class="form-control buat-proposal">
                                </div>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12">
                                <p class="label-form">Batas Waktu Pengembalian Dana Pinjaman dan Pengiriman Hadiah</p>
                                <div class="col-md-6" style="padding:0px;">
                                    <input type="date" name="waktu_pengembalian" class="form-control buat-proposal">
                                </div>
                            </div>
                        </div>
                        <div class="row control-group" style="margin-bottom: 20px;">
                            <div class="form-group col-xs-12">
                                <p class="label-form">Pilihan Hadiah</p>
                                <div id="hadiah">
                                </div>
                                <p style="font-size:14px; text-align: right;">Tambah Pilihan Hadiah
                                    <button type="button" class="btn" style="background-color: white;" onclick="tambah_hadiah()">
                                        <span class="glyphicon glyphicon-plus" style="color:#18BC9C;"></span>
                                    </button>
                                </p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12">
                                <input type="submit" class="form-control" value="Buat Proposal" style="width:115px; margin:0px auto; display:block;">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>