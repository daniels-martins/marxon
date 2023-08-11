@extends('layout.website')

@section('content')
    <!-- Contact Section Start -->
    <section class="contact-section py-140 rpy-100">
        <div class="container">
            <div class="row no-gap">
                <div class="col-lg-4">
                    <div class="contact-info-wrap bg-dark-blue text-white wow fadeInLeft delay-0-2s">
                        <div class="contact-info-inner">
                            <h3 class="contact-title mb-35">Get In Touch</h3>
                            <div class="contact-info-item">
                                <i class="flaticon-call"></i>
                                <div class="content">
                                    <h5>Phone</h5>
                                    <a href="callto:+02347045063380"> +234 ) 704 - 5063 380</a><br>
                                    {{-- <a href="callto:+01245568695">+234 ) 704 - 5063 380</a><br> --}}
                                </div>
                            </div>
                            <div class="contact-info-item">
                                <i class="flaticon-mail"></i>
                                <div class="content">
                                    <h5>email</h5>
                                    <span style="text-transform: none"><strong> info@marxon.com.ng</strong></span>
                                    {{-- <a
                                        href="https://demo.webtend.net/cdn-cgi/l/email-protection#b0d9ded6dff0c4d5dcd3df9ed3dfdd"><span
                                            class="__cf_email__"
                                            data-cfemail="066f6860694672636a65692865696b">[email&#160;protected]</span></a><br>
                                    <a
                                        href="https://demo.webtend.net/cdn-cgi/l/email-protection#10797e767f5064757c737f3e737f7d"><span
                                            class="__cf_email__"
                                            data-cfemail="fb9f9e9694bb8f9e979894d5989496">[email&#160;protected]</span></a> --}}
                                </div>
                            </div>
                            <div class="contact-info-item">
                                <i class="flaticon-location"></i>
                                <div class="content">
                                    <h5>Location</h5>
                                    {{-- <p>129 Lily Cl, London<br> W14 9YB, UK</p> --}}
                                    <p>22, Olajide Street, <br> off Itire Road, Lagos</p>
                                    <p>102102, NG</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <form class="contact-form wow fadeInRight delay-0-2s" action="contact.html#">
                        <div class="contact-form-inner">
                            <h3 class="contact-title mb-35">Send a message</h3>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" id="name" name="name" class="form-control"
                                            placeholder="full name" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" id="email" name="email" class="form-control"
                                            placeholder="Email Address" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" id="phone" name="phone" class="form-control"
                                            placeholder="Phone No :" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" id="subject" name="subject" class="form-control"
                                            placeholder="Subject" required="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" rows="5" class="form-control" placeholder="Message" required=""></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-10">
                                        <button class="theme-btn" type="submit">send message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->


    <!-- Contact Map Start -->
    <div class="contact-page-map wow fadeInUp delay-0-2s">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d136834.1519573059!2d-74.0154445224086!3d40.7260256534837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1639991650837!5m2!1sen!2sbd"
            height="500" style="border:0; width: 100%;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <!-- Contact Map End -->
@endsection
