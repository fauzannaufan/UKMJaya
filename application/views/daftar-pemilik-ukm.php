    <script src="<?php echo base_url('/resources/jquery/jquery/dist/jquery.js') ?>"></script>
    <script type="text/javascript">

        $(document).ready(function() {

            $('#provinsi').change(function() {
                $('#kota > option').remove();
                var id_provinsi = $('#provinsi').val();
                $.ajax({
                    type: "POST",
                    url : "http://localhost/ukmjaya/data/get_list_kab_kota/"+id_provinsi,
                    success : function(kota) {
                        $.each(kota, function(id,name) {
                            var opt = $('<option/>');
                            opt.val(id);
                            opt.text(name);
                            $('#kota').append(opt);
                        });
                    }
                });
            });

        });

    </script>

    <style>

        .label-form {
            text-align: left;
            font-size: 14px;
        }

    </style>

    <header>
        <div class="container" style="padding-top: 150px;">
            <div class="row">
                <div class="col-md-2"></div>
				<div class="col-md-8" style="background-color:#2C3E50; padding-left: 35px; padding-right: 35px; padding-top: 15px; padding-bottom: 15px;">
                    <h3 style="text-align: center; margin-bottom: 30px;">Pendaftaran Pemilik UKM</h3>
                    <?php echo form_open('ukm/proses_pendaftaran_pemilik'); ?>
                        <div class="row control-group">
                            <div class="form-group col-xs-12">
                                <p class="label-form">Nama Lengkap</p>
                                <input type="text" name="nama" class="form-control">
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12">
                                <p class="label-form">No KTP</p>
                                <input type="text" name="no_ktp" class="form-control">
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12">
                                <p class="label-form">Alamat Lengkap</p>
                                <input type="text" name="alamat" class="form-control">
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12">
                                <p class="label-form">Desa/Kelurahan</p>
                                <input type="text" name="desa_kel" class="form-control">
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12">
                                <p class="label-form">Kecamatan</p>
                                <input type="text" name="kecamatan" class="form-control">
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12">
                                <p class="label-form">Provinsi</p>
                                <?php

                                $options_provinsi['']   = "Pilih Provinsi";
                                foreach($list_provinsi->result() as $row) {
                                    $options_provinsi[$row->id] = $row->nama;
                                }

                                echo form_dropdown('provinsi', $options_provinsi, '', 'id="provinsi" class="form-control"');

                                ?>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12">
                                <p class="label-form">Kabupaten/Kota</p>
                                <?php
                                
                                $kota['']  = "Pilih Kabupaten/Kota";
                                echo form_dropdown('kab_kota', $kota, '', 'id="kota" class="form-control"');

                                ?>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12">
                                <p class="label-form">Kode Pos</p>
                                <input type="text" name="kode_pos" class="form-control">
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12">
                                <p class="label-form">No Telepon</p>
                                <input type="text" name="no_tlp" class="form-control">
                            </div>
                        </div>
                        <div class="row control-group" style="margin-bottom: 20px;">
                            <div class="form-group col-xs-12">
                                <p class="label-form">No Handphone</p>
                                <input type="text" name="no_hp" class="form-control">
                            </div>
                        </div>

                        <div class="row control-group">
                            <div class="form-group col-xs-12">
                                <input type="submit" class="form-control" value="Lanjut" style="width:106px; float: center;">
                            </div>
                        </div>
                    </form>
				</div>
            </div>
        </div>
    </header>