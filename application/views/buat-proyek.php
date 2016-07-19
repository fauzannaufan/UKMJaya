    <style>

        .form-buat-proyek {
            font-size : 16px;
            height: 35px;
        }

    </style>

    <!-- Buat Proyek -->
    <header>
        <div class="container" style="padding-top: 150px;">
			<div class="row" style="margin-bottom: 50px;">
                <div class="col-lg-12">
                    <div class="intro-text">
                        <span class="name">BUAT PROYEK</span>
                    </div>
                </div>
            </div>
            <div class="row">
				<div class="col-md-8">
                    <div class="row control-group">
                        <div class="form-group col-xs-12">
                            <input type="text" name="nama_proyek" class="form-control" placeholder="Nama Proyek" style="font-size:20px; height: 40px;">
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12">
                            <input type="text" name="subjudul_proyek" class="form-control form-buat-proyek" placeholder="Subjudul Proyek">
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12">
                            <input type="text" name="target_dana" class="form-control form-buat-proyek" placeholder="Target Dana (Rp.)">
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12">
                            <div class="col-md-4" style="text-align:left; padding-left: 0px;">
                                <p>Batas Waktu Proyek</p>
                            </div>
                            <div class="col-md-8" style="padding-right: 0px;">
                                <input type="date" name="batas_waktu" class="form-control form-buat-proyek">
                            </div>
                        </div>
                    </div>
                    <div class="row control-group">
                        <p style="text-align: left; padding-left: 15px;">Jelaskan Proyek Anda</p>
                        <div class="form-group col-xs-12">
                            <textarea name="deskripsi_proyek" class="form-control form-buat-proyek" rows="20"></textarea>
                        </div>
                    </div>
				</div>
                <div class="col-md-4">
                    <div class="row control-group">
                        <p style="text-align: left; padding: 0 15px;">Pilih Gambar Proyek</p>
                        <div class="form-group col-xs-12">
                            <input type="file" class="form-control" name="gambar_proyek" size="20">
                        </div>
                    </div>
                    <div class="row control-group">
                        <p style="text-align: left; padding: 0 15px;">Pilihan Hadiah</p>
                        <div class="form-group col-xs-12">
                            <div style="background-color: #2C3E50; padding: 7px; margin-bottom: 5px;">
                                <p style="font-size:15px; text-align: left;">Untuk jumlah sumbangan</p>
                                <p style="font-size:15px; text-align: left;">
                                    Rp <input type="text" style="color:black; width:70%;"> atau lebih
                                </p>
                                <p style="font-size:15px; text-align: left;">Hadiah yang diberikan</p>
                                <textarea style="width:100%;" rows="3"></textarea>
                                <button class="btn btn-default" style="color:black;">Oke</button>
                            </div>
                            <p style="font-size:15px; text-align: right;">Tambah Pilihan Hadiah
                                <button class="btn" style="background-color: #2C3E50;">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>