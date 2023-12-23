<!-- breadcrumb -->
<div class="content-wrapper">
    <section class="wrapper bg-soft-grape">
        <div class="container py-3 py-md-5">
            <nav class="d-inline-block" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 bg-transparent">
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>" class="text-decoration-none"><?= !empty($this->lang->line('home')) ? $this->lang->line('home') : 'Home' ?></a></li>
                    <?php if (isset($right_breadcrumb) && !empty($right_breadcrumb)) {
                        foreach ($right_breadcrumb as $row) {
                    ?>
                            <li class="breadcrumb-item"><?= $row ?></li>
                    <?php }
                    } ?>
                    <li class="breadcrumb-item active text-muted" aria-current="page"><?= !empty($this->lang->line('contact_us')) ? $this->lang->line('contact_us') : 'Contact Us' ?></li>
                </ol>
            </nav>
            <!-- /nav -->
        </div>
        <!-- /.container -->
    </section>
</div>
<!-- end breadcrumb -->

<section class="wrapper bg-light">
    <div class="container mt-12">
        <div class="row">
            <div class="col-xl-10 mx-auto">
                <div class="card">
                    <div class="row gx-0">
                        <div class="col-lg-6 align-self-stretch">
                            <div class="map map-full rounded-top rounded-lg-start">
                                <?php if (isset($web_settings['map_iframe']) && !empty($web_settings['map_iframe'])) {
                                    echo html_entity_decode(stripcslashes($web_settings['map_iframe']));
                                } ?>
                                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25387.23478654725!2d-122.06115399490332!3d37.309248660190086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb4571bd377ab%3A0x394d3fe1a3e178b4!2sCupertino%2C%20CA%2C%20USA!5e0!3m2!1sen!2str!4v1645437305701!5m2!1sen!2str" style="width:100%; height: 100%; border:0" allowfullscreen></iframe> -->
                            </div>
                            <!-- /.map -->
                        </div>
                        <!--/column -->
                        <div class="col-lg-6">
                            <div class="p-10 p-md-11 p-lg-14">
                                <div class="d-flex flex-row">
                                    <?php if (isset($web_settings['address']) && !empty($web_settings['address'])) { ?>
                                        <div>
                                            <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
                                        </div>
                                        <div class="align-self-start justify-content-start">
                                            <h5 class="mb-1"><?= !empty($this->lang->line('find_us')) ? $this->lang->line('find_us') : 'Find us' ?></h5>
                                            <address><?= output_escaping(str_replace('\r\n', '</br>', $web_settings['address'])) ?></address>
                                        </div>
                                    <?php } ?>
                                </div>
                                <!--/div -->
                                <div class="d-flex flex-row">
                                    <?php if (isset($web_settings['support_number']) && !empty($web_settings['support_number'])) { ?>
                                        <div>
                                            <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                                        </div>
                                        <div>
                                            <h5 class="mb-1"><?= !empty($this->lang->line('contact_us')) ? $this->lang->line('contact_us') : 'Contact Us' ?></h5>
                                            <!-- <p>00 (123) 456 78 90 <br class="d-none d-md-block" />00 (987) 654 32 10</p> -->
                                            <p><?= $web_settings['support_number'] ?></p>
                                        </div>
                                    <?php } ?>
                                </div>
                                <!--/div -->
                                <div class="d-flex flex-row">
                                    <?php if (isset($web_settings['support_email']) && !empty($web_settings['support_email'])) { ?>
                                        <div>
                                            <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
                                        </div>
                                        <div>
                                            <h5 class="mb-1"><?= !empty($this->lang->line('email_us')) ? $this->lang->line('email_us') : 'Email Us' ?></h5>
                                            <p class="mb-0"><a href="mailto:sandbox@email.com" class="link-body"><?= $web_settings['support_email'] ?></a></p>
                                        </div>
                                    <?php } ?>
                                </div>
                                <!--/div -->
                            </div>
                            <!--/div -->
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->

        <div class="row mt-10 mb-15">
            <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2 login-form">
                <h2 class="display-4 mb-3 text-center"><?= !empty($this->lang->line('contact_us')) ? $this->lang->line('contact_us') : 'Contact Us' ?></h2>
                <p class="lead text-center mb-10">Reach out to us from our contact form and we will get back to you shortly.</p>
                <form id="contact-us-form" class="contact-form needs-validation" action="<?= base_url('home/send-contact-us-email') ?>" method="POST" novalidate>
                    <div class="row gx-4">
                        <!-- /column -->
                        <div class="col-md-6">
                            <div class="form-floating mb-4">
                                <input id="inputEmail4" type="text" name="username" class="form-control" placeholder="Doe" required>
                                <label for="inputEmail4"><?= !empty($this->lang->line('username')) ? $this->lang->line('username') : 'Username' ?></label>
                            </div>
                        </div>
                        <!-- /column -->
                        <div class="col-md-6">
                            <div class="form-floating mb-4">
                                <input id="inputPassword4" type="email" name="email" class="form-control" placeholder="jane.doe@example.com" required>
                                <label for="inputPassword4"><?= !empty($this->lang->line('email')) ? $this->lang->line('email') : 'Email' ?></label>
                            </div>
                        </div>
                        <!-- /column -->
                        <div class="col-12">
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control" id="inputAddress" name="subject" placeholder="Subject">
                                <label for="inputAddress"><?= !empty($this->lang->line('subject')) ? $this->lang->line('subject') : 'Subject' ?></label>
                            </div>
                        </div>
                        <!-- /column -->
                        <div class="col-12">
                            <div class="form-floating mb-4">
                                <textarea id="inputAddress" name="message" class="form-control" placeholder="Your message" style="height: 150px" required></textarea>
                                <label for="inputAddress"><?= !empty($this->lang->line('message')) ? $this->lang->line('message') : 'Message' ?></label>
                            </div>
                        </div>
                        <!-- /column -->
                        <div class="col-12 text-center">
                            <button id="contact-us-submit-btn" class="btn btn-outline-primary rounded-pill btn-send mb-3"><?= !empty($this->lang->line('send_message')) ? $this->lang->line('send_message') : 'Send Message' ?></button>
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </form>
                <!-- /form -->
            </div>
            <!-- /column -->
        </div>
    </div>
    <!-- /.container -->
</section>
<!-- /section -->