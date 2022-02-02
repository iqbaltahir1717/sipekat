            <div class="content-wrapper">
                <section class="content-header">
                    <h1 class="fontPoppins">
                        <?php echo strtoupper($title); ?>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo site_url('admin/dashboard'); ?>"><i class="fa fa-dashboard"></i> DASHBOARD</a></li>
                        <li class="active"><?php echo strtoupper($title); ?></li>
                    </ol>
                </section>

                <section class="content">
                    <div class="box">
                        <?php echo form_open_multipart("admin/setting/update") ?>
                        <div class="box-header with-border">

                            <div class="box-tools pull-right">
                                <a href="<?php echo site_url('admin/setting') ?>" class="btn btn-success btn-flat" title="Refresh halaman">Refresh</a>
                                <button type="submit" class="btn btn-warning btn-flat" title="Update data setting">Update Data Setting</button>
                            </div>
                        </div>
                        <div class="box-body">
                            <?php
                            if ($this->session->flashdata('alert')) {
                                echo $this->session->flashdata('alert') . "<br>";
                                unset($_SESSION['alert']);
                            }
                            ?>
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2 class="fontPoppins"><i class="text-red fa fa-info-circle"></i> Informasi Aplikasi</h2>
                                            <hr style="border: 0.5px dashed #d2d6de">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Nama Aplikasi <small class="text-red">*</small></label>
                                                <?php echo csrf(); ?>
                                                <input type="hidden" class="form-control" name="setting_id" value="<?php echo $setting[0]->setting_id; ?>" required>
                                                <input type="hidden" class="form-control" name="setting_logo" value="<?php echo $setting[0]->setting_logo; ?>" required>
                                                <input type="hidden" class="form-control" name="setting_background" value="<?php echo $setting[0]->setting_background; ?>" required>
                                                <input type="text" class="form-control" placeholder="Nama Aplikasi" name="setting_appname" value="<?php echo $setting[0]->setting_appname; ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Singkatan (Max 10 Huruf) <small class="text-red">*</small></label>
                                                <input type="text" class="form-control" maxlength="10" placeholder="Singkatan Aplikasi" name="setting_short_appname" value="<?php echo $setting[0]->setting_short_appname; ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Logo</label>
                                                <input type="file" class="form-control" name="logo">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Preview Logo</label><br>
                                                <img src="<?php echo base_url(); ?>assets/core-images/<?php echo $setting[0]->setting_logo; ?>" height="57">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Background Login</label>
                                                <input type="file" class="form-control" name="background">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Preview Background</label><br>
                                                <a href="<?php echo base_url(); ?>assets/core-images/<?php echo $setting[0]->setting_background; ?>" class="btn btn-sm btn-success" target="_blank">Preview Disini</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2 class="fontPoppins"><i class="text-red fa fa-user"></i> Pemiliki Aplikasi</h2>
                                            <hr style="border: 0.5px dashed #d2d6de">
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label> Pemilik/Kantor/Instansi <small class="text-red">*</small></label>
                                                <input type="text" class="form-control" placeholder="Pemiliki/Kantor/Instansi" name="setting_owner_name" value="<?php echo $setting[0]->setting_owner_name; ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Telepon </label>
                                                <input type="text" class="form-control" placeholder="Telepon" name="setting_phone" value="<?php echo $setting[0]->setting_phone; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Email </label>
                                                <input type="text" class="form-control" placeholder="Email" name="setting_email" value="<?php echo $setting[0]->setting_email; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Kota/Kabupaten <small class="text-red">*</small></label>
                                                <input type="text" class="form-control" placeholder="Asal/Kota/kabupaten" name="setting_origin_app" value="<?php echo $setting[0]->setting_origin_app; ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label> Alamat <small class="text-red">*</small></label>
                                                <textarea class="form-control" name="setting_address" placeholder="Alamat" rows="5"><?php echo $setting[0]->setting_address; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>





                        </div>
                        <div class="box-footer">
                            <small>Page rendered in <strong>{elapsed_time}</strong> seconds.</small>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </section>
            </div>