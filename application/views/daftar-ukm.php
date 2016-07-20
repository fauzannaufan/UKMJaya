    <script src="<?php echo base_url('/resources/jquery/jquery/dist/jquery.js') ?>"></script>
    <script type="text/javascript">

        $(document).ready(function() {
            
            $('#sektor_usaha').change(function() {
                $('#sub_sektor > option').remove();
                var id_sektor = $('#sektor_usaha').val();
                $.ajax({
                    type: "POST",
                    url : "http://localhost/ukmjaya/data/get_sub_sektor/"+id_sektor,
                    success : function(sektor) {
                        $.each(sektor, function(id,name) {
                            var opt = $('<option/>');
                            opt.val(id);
                            opt.text(name);
                            $('#sub_sektor').append(opt);
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
                    <h3 style="text-align: center; margin-bottom: 30px;">Pendaftaran UKM</h3>
                    <?php echo form_open('ukm/proses_pendaftaran'); ?>
                        <div class="row control-group">
                            <div class="form-group col-xs-12">
                                <p class="label-form">Sektor Usaha</p>
                                <?php

                                $sektor_usaha[''] = "Pilih Sektor";
                                foreach($list_sektor->result() as $row) {
                                    $sektor_usaha[$row->id] = $row->nama;
                                }

                                echo form_dropdown('sektor_usaha', $sektor_usaha, '', 'id="sektor_usaha" class="form-control"');

                                ?>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12">
                                <p class="label-form">Sub Sektor Usaha</p>
                                <?php

                                $sub_sektor_usaha['']  = "Pilih Sub Sektor";

                                echo form_dropdown('sub_sektor_usaha', $sub_sektor_usaha, '', 'id="sub_sektor" class="form-control"');

                                ?>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12">
                                <p class="label-form">Jenis Usaha</p>
                                <input type="text" name="jenis_usaha" class="form-control">
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12">
                                <p class="label-form">Bentuk Usaha</p>
                                <?php

                                $bentuk_usaha[''] = "Pilih Bentuk Usaha";
                                foreach($list_bentuk_usaha->result() as $row) {
                                    $bentuk_usaha[$row->id] = $row->nama;
                                }

                                echo form_dropdown('bentuk_usaha', $bentuk_usaha, '', 'class="form-control"');

                                ?>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12">
                                <p class="label-form">Jumlah Aset</p>
                                <input type="text" name="jumlah_aset" class="form-control">
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12">
                                <p class="label-form">Jumlah Omzet</p>
                                <input type="text" name="jumlah_omzet" class="form-control">
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12">
                                <p class="label-form">Alamat Lengkap Usaha</p>
                                <input type="text" name="alamat_usaha" class="form-control">
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12">
                                <p class="label-form">Desa/Kelurahan Usaha</p>
                                <input type="text" name="desa_kel_usaha" class="form-control">
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12">
                                <p class="label-form">Kecamatan Usaha</p>
                                <input type="text" name="kecamatan_usaha" class="form-control">
                            </div>
                        </div>
                        <div class="row control-group" style="margin-bottom: 20px;">
                            <div class="form-group col-xs-12">
                                <p class="label-form">Kode Pos Usaha</p>
                                <input type="text" name="kode_pos" class="form-control">
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12">
                                <input type="submit" class="form-control" value="Lanjut" style="width:106px; margin:0px auto; display:block;">
                            </div>
                        </div>
                    </form>
				</div>
            </div>
        </div>
    </header>