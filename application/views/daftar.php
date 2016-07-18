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

    <!-- Form Daftar -->
    <header>
        <div class="container" style="padding-top: 130px;"">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4" style="background-color:#2C3E50; padding-left: 35px; width: 430px; padding-right: 35px; padding-top: 15px; padding-bottom: 15px;">
                    <h3 style="text-align: center; margin-bottom: 30px;">Daftar Akun</h3>
                    <?php echo form_open('daftar/proses'); ?>
                        <div class="row control-group">
                            <div class="form-group col-xs-12">
                                <input type="text" name="nama" class="form-control" placeholder="Nama">
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12">
                                <input type="text" name="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12">
                                <input type="password" name="c_password" class="form-control" placeholder="Masukkan kembali password">
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12">
                                <?php

                                $options_provinsi['']   = "Pilih Provinsi";
                                foreach($list_provinsi->result() as $row) {
                                    $options_provinsi[$row->id] = $row->nama;
                                }
                                echo form_dropdown('provinsi', $options_provinsi, '', 'id="provinsi" class="form-control"');
                                ?>
                            </div>
                        </div>
                        <div class="row control-group" style="margin-bottom: 10px;">
                            <div class="form-group col-xs-12">
                                <?php
                                $kota['']  = "Pilih Kabupaten / Kota";
                                echo form_dropdown('kab_kota', $kota, '', 'id="kota" class="form-control"');
                                ?>
                            </div>
                        </div>
                        <div class="row control-group" style="margin-bottom: 20px;">
                            <div class="col-md-6" style="text-align:left;">
                                Saya mendaftar sebagai
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                   <input name="jenis_user" value="ukm" type="radio"> UKM
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input name="jenis_user" value="funder" type="radio"> Funder
                                </div>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12">
                                <input type="submit" class="form-control" value="Daftar" style="width:106px; margin:0px auto; display:block;">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>