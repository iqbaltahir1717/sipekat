    <section id="hero" style="height: 91vh !important;">
        <div id="heroCarousel" style="height: 91vh !important;" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
            <div class="carousel-inner" role="listbox">
                <?php $i = 1;
                foreach ($slider as $s) { ?>
                    <div class="carousel-item <?php if ($i == 1) {
                                                    echo "active";
                                                } ?>" style="background-image:linear-gradient(90deg, rgba(0,71,116,0.4774860627844888) 0%, rgba(31,60,54,0.592332001159839) 100%), url(<?php echo base_url(); ?>upload/slider/<?php echo $s->slider_image; ?>)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown"><?php echo $s->slider_title; ?></h2>
                                <p class="animate__animated animate__fadeInUp"><?php echo $s->slider_text; ?></p>

                            </div>
                        </div>
                    </div>
                <?php $i++;
                } ?>
            </div>
        </div>
    </section>

    <!-- <div class="marquee pb-0">
        <marquee behavior="" direction="" scrollamount="6"><small><?php echo $setting[0]->setting_running_text; ?></small></marquee>
    </div> -->


    <main id="main">
        <section id="tracking" class="cta">
            <div class="container">
                <div class="row" data-aos="zoom-in">
                    <div class="col-lg-9 text-center text-lg-left">
                        <h3>Tracking Pesan/Aduan Anda</h3>
                        <p> Jika ingin mengetahui progress dari pesan yang telah anda adukan silahkan klik tombol Tracking untuk mengetahui detailnya.</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="<?php echo site_url('page/tracking'); ?>">Tracking Pesan</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="pengaduan" class="contact">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Form Aduan</h2>
                    <p>Jika memiliki aduan mengenai suatu hal, silahkan mengisi form dibawah ini. <br> Atas perhatianmu kami ucapkan Terimakasih</p>
                </div>
                <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">
                    <div class="col-lg-12 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">
                        <?php
                        if ($this->session->flashdata('alert')) {
                            echo $this->session->flashdata('alert');
                            unset($_SESSION['alert']);
                        }
                        ?>
                        <?php echo form_open_multipart("page/create_message") ?>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <?php echo csrf(); ?>
                                <input type="text" name="message_name" class="form-control" id="name" placeholder="Nama Anda" data-rule="minlen:4" data-msg="Nama minimal 4 karakter" required />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-3 form-group">
                                <input type="text" class="form-control" name="message_phone" id="email" maxlength="12" placeholder="cth : 62852xxxxxxxx" data-rule="minlen:16" data-msg="Masukkan nomor telpon yang valid" required />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-3 form-group">
                                <input type="email" class="form-control" name="message_email" id="email" placeholder="Email Anda" data-rule="email" data-msg="Masukkan email anda yang valid" required />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <select name="message_subject" data-rule="minlen:4" data-msg="Subject minimal 4-8 karakter" class="form-control" id="subject" required>
                                <option value="">Pilih Jenis Aduan</option>
                                <option value="Pelayanan">Pelayanan</option>
                                <option value="Kriminal">Kriminal</option>
                                <option value="Kerusakan">Kerusakan</option>
                                <option value="Aduan Lainnya">Aduan Lainnya</option>
                            </select>
                            <!-- <input type="text" class="form-control" name="message_subject" id="subject" placeholder="Subjek Pesan" data-rule="minlen:4" data-msg="Subject minimal 4-8 karakter" required /> -->
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message_text" rows="5" data-rule="required" data-msg="Tulis sesuatu dikolom pesan" placeholder="Pesan Anda" required></textarea>
                            <div class="validate"></div>
                        </div>

                        <div class="text-center"><button class="btn" style="background: #085690; color:white" type="submit">Kirim Pesan</button></div>
                        <?php echo form_close(); ?>

                    </div>

                </div>

            </div>
        </section>

    </main>