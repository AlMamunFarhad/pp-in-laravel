@extends('layouts.master')
@section('content')
    @include('layouts.sidebar')
    <div class="main-content" id="main_content">
    <div class="resume-container">
            <div class="resume-right">
                <div class="resume-top text-center">
                    <h2>Online Resume</h2>
                    <a href="{{ asset('images/cv.pdf') }}" class="custom-btn mb-3" download=""><i class="fa-solid fa-file"></i>
                        Download PDF
                        Version</a>
                </div>
                <div class="right">
                    <div class="resume-section mt-5">
                        <div class="resume">
                            <div class="row">
                                <div class="col-lg-9 name">
                                    <h1 class="pt-3">{{ $resume->name }}</h1>
                                    <h5 class="pb-3">{{ $resume->title }}</h5>
                                </div>
                                <div class="col-lg-3">
                                    <div class="contact-details text-border">
                                        <p><i class="fa-solid fa-square-phone"></i> <a href="tel:+88 01318764476">+88
                                                01318764476</a></p>
                                        <p class="text-break"><i class="fa-solid fa-square-envelope"></i>
                                            <a href="mailto:farhadmikky@gmail.com">farhadmikky@gmail.com</a>
                                        </p>
                                        <p><i class="fa-solid fa-globe"></i> <a
                                                href="https://www.farhadsr.com/">www.farhadsr.com</a></p>
                                        <p> <i class="fa-solid fa-location-pin"></i> Bangladesh, Dhaka,
                                            <span>Mirpur-1</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="summarise mb-4">
                                <div class="row d-flex align-items-center">
                                    <div class="col-md-2">
                                        <div class="resume-img d-flex justify-content-center">
                                            <img src="{{ $resume->image }} " class="img-fluid rounded-pill" width="150"
                                                height="150" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <p>{!! $resume->summary !!}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="tecnical-skills">
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="resume-content">
                                            <div class="work-experinces">
                                                <h3>WORK EXPERIENCES</h3>
                                                <p>{!! $resume->experiences !!}</p>
                                            </div>
                                            <div class="portfoio-project mt-4">
                                                <h3>PROJECTS</h3>
                                                {!! $resume->projects !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 right-info">
                                        <div class="resume-right text-break">
                                            <div class="content-one">
                                                <h3>SKILLS</h3>
                                                {!! $resume->skills !!}
                                            </div>

                                            <div class="education">
                                                <h3 class="mt-4">EDUCATIONS</h3>
                                                {!! $resume->educations !!}
                                            </div>
                                            <div class="interests">
                                                <h3 class="mt-4">INTERESTS</h3>
                                                {!! $resume->interests !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="resume-social-link d-flex justify-content-center">
                                    <p><a href="https://github.com/AlMamunFarhad"><i class="fa-brands fa-github"></i>
                                            Github
                                        </a></p>
                                    <p><a href="https://www.fiverr.com/farhad_webdr?public_mode=true">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1.6em" height="1.6em"
                                                viewBox="-2 -2 24 24">
                                                <g fill="currentColor">
                                                    <path
                                                        d="M10 18a8 8 0 1 0 0-16a8 8 0 0 0 0 16m0 2C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10s-4.477 10-10 10" />
                                                    <path
                                                        d="M13.427 13.148v-5h-5v-.312c0-.517.42-.938.938-.938h.937V5.023h-.937a2.816 2.816 0 0 0-2.813 2.813v.312h-1.25v1.875h1.25v3.125h-1.25v1.875h4.375v-1.875h-1.25v-3.125h3.143v3.125h-1.268v1.875h4.375v-1.875z" />
                                                    <circle cx="12.402" cy="5.971" r="1.001" />
                                                </g>
                                            </svg>
                                            <span>Fiverr</span>
                                        </a> </p>
                                    <p><a href="https://www.upwork.com/freelancers/~017add125702c24b0a">
                                            <i class="fa-brands fa-upwork"></i>
                                            <span>Upwork</span>
                                        </a> </p>
                                    <p><a
                                            href="https://www.linkedin.com/public-profile/settings?trk=d_flagship3_profile_self_view_public_profile"><i
                                                class="fa-brands fa-linkedin-in"></i>
                                            Linkedin
                                        </a></p>
                                    <p><a href="https://www.facebook.com/profile.php?id=100009626361921"><i
                                                class="fa-brands fa-facebook"></i>
                                            Facebook
                                        </a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
