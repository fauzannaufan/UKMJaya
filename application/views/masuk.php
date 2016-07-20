    <!-- Form Masuk -->
    <header>
        <div class="container" style="padding-top: 135px; padding-bottom: 80px;">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4" style="background-color:#2C3E50; padding-left: 35px; width: 430px; padding-right: 35px; padding-top: 15px; padding-bottom: 15px;">
                    <h3 style="text-align: center; margin-bottom: 30px;">Masuk Akun</h3>
                    <?php echo form_open('masuk/proses'); ?>
                        <div class="row control-group">
                            <div class="form-group col-xs-12">
                                <p style="text-align:left; font-size:14px;">Email</p>
                                <input type="text" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="row control-group" style="margin-bottom: 20px;">
                            <div class="form-group col-xs-12">
                                <p style="text-align:left; font-size:14px;">Kata sandi</p>
                                <input type="password" name="password" class="form-control">
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12">
                                <input type="submit" class="form-control" value="Masuk" style="width:106px; margin:0px auto; display:block;">
                            </div>
                        </div>
                    </form>
                    <hr>
                    <h4 style="text-align: center; margin-bottom: 25px; margin-top: 30px;">Belum Punya Akun?</h4>
                    <a href="<?php echo base_url(); ?>daftar"><h5 style="text-align: center; margin-bottom: 20px;">Daftar Di Sini</h5></a>  
                </div>
            </div>
        </div>
    </header>