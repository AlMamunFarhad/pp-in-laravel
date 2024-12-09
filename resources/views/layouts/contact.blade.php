@extends('layouts.master')

@section('content')
@include('layouts.sidebar')
<div class="main-content" id="main_content">
    <!--====== Contact Section Start======-->
    <section id="contact" class="contact">
        <div class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="d-flex justify-content-center">
                        <h1 class=" text-border">CONTACT INFO</h1>
                    </div>
                    <div class="social-link mb-5">
                        <div class="nav-icon">
                            <ul class="list-unstyled d-flex justify-content-center mb-0">
                                <li><a href="https://github.com/AlMamunFarhad" target="_blank"
                                        class="icon-hover"><i class="bi bi-github"></i></a></li>
                                <li><a href="https://www.linkedin.com/public-profile/settings?trk=d_flagship3_profile_self_view_public_profile"
                                        target="_blank" class="icon-hover"><i class="bi bi-linkedin"></i></a>
                                </li>
                                <li><a href="https://www.facebook.com/profile.php?id=100009626361921"
                                        target="_blank" class="icon-hover"><i class="bi bi-facebook"></i></a>
                                </li>
                                <li><a href="https://www.instagram.com/almamunfarhad/" target="_blank"
                                        class="icon-hover"><i class="bi bi-instagram"></i></a></li>
                                <li><a href="https://twitter.com/FarhadAlMamun11" target="_blank"
                                        class="icon-hover"><i class="bi bi-twitter"></i></a></li>
                            </ul>
                            <!-- <hr class="lh-0"> -->
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="mb-4">
                            <a href="mailto:farhadmikky@gmail.com">
                                <div class="contact-info card ps-4">
                                    <h3><i class="bi bi-envelope-heart-fill"></i></h3>
                                    <h5>EMAIL</h5>
                                    <h6 class="text-break">farhadmikky@gmail.com</h6>
                                </div>
                            </a>
                        </div>

                        <div class="mb-4">
                            <a href="tel:+88 01318764476" class="mb-4">
                                <div class="contact-info card ps-4">
                                    <h3><i class="bi bi-telephone-fill"></i></h3>
                                    <h5>PHONE & WHATSAPP</h5>
                                    <h6>+88 01318764476</h6>
                                </div>
                            </a>
                        </div>
                        <div class="mb-4">
                            <a href="https://maps.app.goo.gl/doJkUf1aWFdctmhYA">
                                <div class="contact-info card ps-4">
                                    <h3><i class="bi bi-geo-alt-fill"></i></h3>
                                    <h5>LOCATION</h5>
                                    <h6>Bangladesh, Dhaka-1216</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div>
                            <div class="contact-form">
                                <h4 class="pb-4 text-center">Send Me a Message</h4>
                                <div class="form">
                                    <form action="">
                                        <div class="did-floating-label-content">
                                            <input class="did-floating-input" type="email" required
                                                placeholder=" ">
                                            <label class="did-floating-label">Email</label>
                                        </div>
                                        <div class="did-floating-label-content">
                                            <input class="did-floating-input" type="text" required
                                                placeholder=" ">
                                            <label class="did-floating-label">Subject</label>
                                        </div>
                                        <div class="did-floating-label-content">
                                            <textarea class="did-floating-input text-area" name="message"
                                                id="message" cols="30" rows="4" placeholder=" "></textarea>
                                            <label class="did-floating-label">Message</label>
                                        </div>
                                        <div class="form-btn">
                                            <a href="#"
                                                class="rounded-pill custom-btn form-control text-center">SEND</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Contact Section end======-->
</div>
@endsection