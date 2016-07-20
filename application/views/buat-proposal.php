    <script src="<?php echo base_url('/resources/jquery/jquery/dist/jquery.js') ?>"></script>
    <script type="text/javascript">

        function tambah_hadiah() {
            $('#hadiah').append('<div style="background-color: #18BC9C; padding: 15px; margin-bottom: 5px;"><button type="button" class="btn" style="background-color:white;padding:0 4px; float:right;" onclick="hapus_hadiah(id)"><span class="glyphicon glyphicon-remove" style="color:#18BC9C;"></span></button><p class="label-form">Untuk jumlah sumbangan</p><p class="label-form"> Rp <input type="text" style="color:black; width:70%;"> atau lebih</p><p class="label-form">Hadiah yang diberikan</p><textarea style="width:100%;" rows="3"></textarea><button class="btn btn-default" style="color:black;">Oke</button></div>');
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

    </style>

    <!-- Buat Proposal -->
    <header>
        <div class="container" style="padding-top: 150px;">
            <div class="row">
                <div class="col-md-2"></div>
				<div class="col-md-8" style="background-color:#2C3E50; padding-left: 35px; padding-right: 35px; padding-top: 15px; padding-bottom: 15px;">
                    <h3 style="text-align: center; margin-bottom: 30px;">Buat Proposal Pendanaan</h3>
                    <?php echo form_open('ukm/proses_pendaftaran'); ?>
                        <div class="row control-group">
                            <div class="form-group col-xs-12">
                                <p class="label-form">Kebutuhan Dana (Rp.)</p>
                                <input type="text" name="kebutuhan_dana" class="form-control">
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12">
                                <p class="label-form">Jelaskan kenapa anda membutuhkan dana tersebut</p>
                                <textarea name="kebutuhan_dana" class="form-control" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12">
                                <p class="label-form">Batas Waktu Pengajuan</p>
                                <div class="col-md-6" style="padding:0px;">
                                    <input type="date" name="batas_waktu" class="form-control buat-proposal">
                                </div>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12">
                                <p class="label-form">Pilihan Hadiah</p>
                                <div id="hadiah">
                                    <div style="background-color: #18BC9C; padding: 15px; margin-bottom: 5px;" id="hadiah-1">
                                        <button type="button" class="btn" style="background-color:white;padding:0 4px; float:right;" onclick="hapus_hadiah('#hadiah-1')">
                                            <span class="glyphicon glyphicon-remove" style="color:#18BC9C;"></span>
                                        </button>
                                        <p class="label-form">Untuk jumlah sumbangan</p>
                                        <p class="label-form">
                                            Rp <input type="text" style="color:black; width:70%;"> atau lebih
                                        </p>
                                        <p class="label-form">Hadiah yang diberikan</p>
                                        <textarea style="width:100%;" rows="3"></textarea>
                                        <button class="btn btn-default" style="color:black;">Oke</button>
                                    </div>
                                </div>
                                <p style="font-size:14px; text-align: right;">Tambah Pilihan Hadiah
                                    <button type="button" class="btn" style="background-color: white;" onclick="tambah_hadiah()">
                                        <span class="glyphicon glyphicon-plus" style="color:#18BC9C;"></span>
                                    </button>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>