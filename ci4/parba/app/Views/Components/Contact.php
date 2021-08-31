<!-- Start Contact -->
<section class="section" id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="text-center">
                    <span class="sub-item-title">Contact Us</span>
                    <h2>Get In Touch</h2>
                    <p class="text-muted mx-auto section-subtitle mt-3">Lorem ipsum dolor sit amet, consect
                        adipisic elit, sed do eiusmod tempor incididunt ut labore et d magna aliqua enim sed do
                        sit.</p>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-6">
                <div class="text-center contact_box_area">
                    <div> <i class="mbri-mobile text-custom h1"></i> </div>
                    <div class="contact_detail">
                        <h5 class="mt-1 mb-1 contact_detail-title font-weight-bold">Contact Us</h5>
                        <p class="text-muted">(+12) 3467-890-123</p>
                    </div>
                </div>
                <div class="text-center contact_box_area">
                    <div> <i class="mbri-letter text-custom h1"></i> </div>
                    <div class="contact_detail">
                        <h5 class="mt-1 mb-1 contact_detail-title font-weight-bold">Email Address</h5>
                        <p class="text-muted">mail@example.com</p>
                    </div>
                </div>
                <div class="text-center contact_box_area">
                    <div> <i class="mbri-map-pin text-custom h1"></i> </div>
                    <div class="contact_detail">
                        <h5 class="mt-1 mb-1 contact_detail-title font-weight-bold">Office Address</h5>
                        <p class="text-muted">505, Lorem ipsum dolor sit amet consect adipisic elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="vfx-form-group">
                    <form action="" method="POST">
                        <?= csrf_field(); ?>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <input name="name" id="name" type="text" class="form-control" placeholder="Name*" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <input name="email" id="email" type="email" class="form-control" placeholder="Email*" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <input type="number" class="form-control" id="phone" name="phone" placeholder="Phone" required />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <!-- <input type="text" class="form-control" id="subject" placeholder="Subject" required /> -->
                                    <select class="form-control" name="kelas" id="Subject" required>
                                        <option value="" selected disabled>Pilih Kelas</option>
                                        <option value="Modul Belajar">Modul Belajar</option>
                                        <option value="Modul VIP">Modul VIP</option>
                                        <option value="Modul Private">Modul Private</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mb-4">
                                    <textarea name="message" id="comments" rows="4" class="form-control" placeholder="Message..." required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <input type="submit" name="submit" class="btn btn-custom" value="Send Message">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact -->