<?php include 'includes/header.php'; ?>

<!-- Contact Hero Section -->
<section class="product-hero main-hero-gradient">
    <div class="hero-shape-1"></div>
    <div class="hero-shape-2"></div>
    <div class="container relative-z text-center">
        <span class="about-tagline" data-aos="fade-down">Get in Touch</span>
        <h1 class="about-headline" data-aos="zoom-out" data-aos-duration="1200">Contact Us</h1>
        <p class="about-lead mb-4" data-aos="fade-up" data-aos-delay="200">Let's collaborate to accelerate your
            biomedical innovations.</p>
    </div>
</section>

<!-- Contact Info Cards -->
<section class="py-5 bg-white position-relative mt-n5 z-index-2">
    <div class="container">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6" data-aos="fade-up">
                <div
                    class="contact-card p-4 h-100 text-center shadow-sm rounded-4 border-bottom border-4 border-teal transition-all hover-up-teal bg-white">
                    <div class="icon-circle-bg mb-3 bg-teal-light text-teal rounded-circle d-inline-flex p-3"><i
                            class="bi bi-geo-alt fs-2"></i></div>
                    <h5 class="fw-bold mb-3">Contact Address</h5>
                    <p class="small text-muted mb-0">SRDK BIOCHEMICALS PRIVATE LIMITED<br>#244, GROUND FLOOR, SFS
                        407,<br>1st MAIN YELAHANKA NEW TOWN<br>BANGALORE, Karnataka, India – 560064</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div
                    class="contact-card p-4 h-100 text-center shadow-sm rounded-4 border-bottom border-4 border-orange transition-all hover-up-orange bg-white">
                    <div class="icon-circle-bg mb-3 bg-orange-light text-orange rounded-circle d-inline-flex p-3"><i
                            class="bi bi-envelope fs-2"></i></div>
                    <h5 class="fw-bold mb-3">Email Address</h5>
                    <p class="small text-muted mb-0"><a href="mailto:info@srdkbiochem.com"
                            class="text-decoration-none text-teal fw-bold">info@srdkbiochem.com</a></p>
                    <p class="small text-muted mt-2">Technical & Sales Support</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div
                    class="contact-card p-4 h-100 text-center shadow-sm rounded-4 border-bottom border-4 border-teal transition-all hover-up-teal bg-white">
                    <div class="icon-circle-bg mb-3 bg-teal-light text-teal rounded-circle d-inline-flex p-3"><i
                            class="bi bi-telephone fs-2"></i></div>
                    <h5 class="fw-bold mb-3">Phone Numbers</h5>
                    <p class="small text-muted mb-0">Information coming soon</p>
                    <p class="small text-muted mt-2">Monday - Saturday (9AM - 6PM)</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section class="py-5 bg-light-soft overflow-hidden">
    <div class="container py-4">
        <div class="row g-5">
            <div class="col-lg-5" data-aos="fade-right">
                <div class="overline">Inquiry Form</div>
                <h2 class="section-title mb-4">Send Us a Message</h2>
                <p class="section-text lead mb-5">Have a specific polymer requirement? Our technical team is ready to
                    assist you with custom synthesis and application support.</p>

                <div class="inquiry-features">
                    <div class="d-flex align-items-center mb-3">
                        <i class="bi bi-check-circle-fill text-teal me-3 fs-5"></i>
                        <span class="text-muted">Technical Dossier Requests</span>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <i class="bi bi-check-circle-fill text-teal me-3 fs-5"></i>
                        <span class="text-muted">Bulk Inquiry & Quotes</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="bi bi-check-circle-fill text-teal me-3 fs-5"></i>
                        <span class="text-muted">Custom Architecture Consultations</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-7" data-aos="fade-left">
                <div class="form-container p-4 p-md-5 bg-white rounded-4 shadow-lg border-top border-5 border-teal">
                    <form class="row g-3 needs-validation" id="contactForm" novalidate>
                        <div class="col-md-6">
                            <label for="fullName" class="form-label small fw-bold">Full Name</label>
                            <input type="text" class="form-control form-control-lg rounded-3 fs-6" id="fullName"
                                placeholder="Enter your name" required>
                            <div class="invalid-feedback">Please enter your full name.</div>
                        </div>
                        <div class="col-md-6">
                            <label for="location" class="form-label small fw-bold">Location</label>
                            <input type="text" class="form-control form-control-lg rounded-3 fs-6" id="location"
                                placeholder="City / Country" required>
                            <div class="invalid-feedback">Please enter your location.</div>
                        </div>
                        <div class="col-md-6">
                            <label for="contactNumber" class="form-label small fw-bold">Contact Number</label>
                            <input type="tel" class="form-control form-control-lg rounded-3 fs-6" id="contactNumber"
                                placeholder="+91 0000 000 000" required>
                            <div class="invalid-feedback">Please enter a valid phone number.</div>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label small fw-bold">Email Address</label>
                            <input type="email" class="form-control form-control-lg rounded-3 fs-6" id="email"
                                placeholder="name@company.com" required>
                            <div class="invalid-feedback">Please enter a valid email.</div>
                        </div>
                        <div class="col-12">
                            <label for="subject" class="form-label small fw-bold">Subject</label>
                            <select class="form-select form-select-lg rounded-3 fs-6" id="subject" required>
                                <option value="" selected disabled>Select subject</option>
                                <option value="Technical Inquiry">Technical Inquiry</option>
                                <option value="Quote Request">Quote Request</option>
                                <option value="Custom Synthesis">Custom Synthesis</option>
                                <option value="Partnership">Partnership Support</option>
                                <option value="Other">Other</option>
                            </select>
                            <div class="invalid-feedback">Please select a subject.</div>
                        </div>
                        <div class="col-12">
                            <label for="message" class="form-label small fw-bold">Write Message</label>
                            <textarea class="form-control form-control-lg rounded-3 fs-6" id="message" rows="4"
                                placeholder="Tell us about your polymer needs..." required></textarea>
                            <div class="invalid-feedback">Please write your message.</div>
                        </div>
                        <div class="col-12 mt-4">
                            <button class="btn btn-quality w-100 py-3 rounded-3 shadow-sm fs-5 type=" submit">Submit
                                Inquiry</button>
                        </div>
                    </form>

                    <script>
                        // Bootstrap form validation
                        (function () {
                            'use strict'
                            var forms = document.querySelectorAll('.needs-validation')
                            Array.prototype.slice.call(forms).forEach(function (form) {
                                form.addEventListener('submit', function (event) {
                                    if (!form.checkValidity()) {
                                        event.preventDefault()
                                        event.stopPropagation()
                                    }
                                    form.classList.add('was-validated')
                                }, false)
                            })
                        })()
                    </script>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>