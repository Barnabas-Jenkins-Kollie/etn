<?php include 'include/nav.php'; ?>
<!-- Contact Section -->
<section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Contact us</h2>

    </div><!-- End Section Title -->



    <div class="container" data-aos="fade">

        <div class="row gy-5 gx-lg-5">

            <div class="col-lg-4">

                <div class="info">
                    <h3>Get in touch</h3>
                    <p>You can contact us directly through the follow mediums and we will be excited to hear from
                        you. Your communication is important to us.
                    </p>

                    <div class="info-item d-flex">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h4>Location:</h4>
                            <p>14 St.Sinkor, Monrovia, Liberia,</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h4>Email:</h4>
                            <p>educatethenextgen2015@gmail.com</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-phone flex-shrink-0"></i>
                        <div>
                            <h4>Call:</h4>
                            <p>+231 77 004 6553</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

            </div>

            <div class="col-lg-8">
                <form action="forms/contact.php" method="post">
                    <div class="form-row align-items-center">
                        <div class="col-auto">

                            <input type="text" class="form-control mb-2" name="fullname" id="inlineFormInput"
                                placeholder="full name">
                        </div>
                        <div class="col-auto">

                            <div class="input-group mb-2">

                                <input type="email" name="email" class="form-control" id="inlineFormInputGroup"
                                    placeholder="Email">
                            </div>

                            <div class="col-auto">

                                <div class="input-group mb-2">

                                    <input type="text" name="subject" class="form-control" id="inlineFormInputGroup"
                                        placeholder="Subject">
                                </div>


                                <div class="form-group">

                                    <textarea class="form-control" name="message" id="exampleFormControlTextarea1"
                                        placeholder="message" rows="8"></textarea>
                                </div>
                            </div>

                            <div class="col-auto mt-3">
                                <button type="submit" name="submit" class="btn btn-danger btn-lg btn-block mb-2">Send
                                    message</button>
                            </div>
                        </div>
                </form>

            </div>

        </div>

</section><!-- /Contact Section -->
<?php include 'include/footer.php';