@extends('layouts.master')
@section('content')
@include('layouts.sidebar')
    <div class="resume-container">
        <div class="main-content" id="main_content">
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
                                    <h1 class="pt-3">ABDULLAH ALL MAMUN FARHAD</h1>
                                    <h5 class="pb-3">Full Stack Developer</h5>
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
                            <!-- <hr> -->
                            <div class="summarise mb-4">
                                <div class="row d-flex align-items-center">
                                    <div class="col-md-2">
                                        <div class="resume-img d-flex justify-content-center">
                                            <img src="{{ asset('images/farhad.png') }}" class="img-fluid rounded-pill" width="150"
                                                height="150" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <p>I'm a highly skilled web designer and developer with 4 years of
                                            experience,
                                            seeking a challenging position in a dynamic and innovative company.
                                            My expertise
                                            includes HTML, CSS, Sass, Bootstrap, Tailwind CSS, JavaScript,
                                            jQuery, PHP, OOP,
                                            Laravel, and WordPress. Committed to continuous learning and
                                            passionate about
                                            delivering exceptional results, I'm excited about contributing to
                                            new projects
                                            and challenges, creating visually stunning and functional websites.
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
                                                <h4>Web Developer</h4>
                                                <p>I have gained extensive experience working as a web developer
                                                    across
                                                    various online marketplaces as well as in local markets. I
                                                    am passionate
                                                    about my work and eager to contribute my skills to your
                                                    team. Given the
                                                    opportunity, I am committed to delivering my best and making
                                                    a positive
                                                    impact.</p>
                                                <ul>
                                                    <li>Utilized PHP for server-side scripting, database
                                                        management, and
                                                        backend development</li>
                                                    <li>Applied Object-Oriented Programming (OOP) concepts to
                                                        architect
                                                        scalable and maintainable codebases.</li>
                                                    <li>Advanced skills in PHP programming and Laravel
                                                        framework.</li>
                                                </ul>
                                                <h4>Website Maintenance</h4>
                                                <p class="text-end"> FictoTech Solutions Ltd | 2022 - 2023
                                                </p>
                                                <p>At FictoTech Solutions Ltd, I spearheaded website updates,
                                                    coding, and
                                                    collaborated on new features. Additionally, I diligently
                                                    monitored
                                                    analytics and provided crucial technical support. My
                                                    contributions
                                                    significantly enhanced cutting-edge IT solutions and digital
                                                    transformation services, benefiting businesses in Bangladesh
                                                    and beyond.
                                                </p>
                                                <h4>Web Designer</h4>
                                                <p class="text-end"> Design Tech Solutions | 2021 -
                                                    2022
                                                </p>
                                                <p>I had the pleasure of working as a web designer at Design
                                                    Tech Solutions,
                                                    where I collaborated on various projects. My experience with
                                                    the company
                                                    was exceptionally positive and overwhelming.</p>
                                            </div>
                                            <div class="portfoio-project mt-4">
                                                <h3>PROJECT</h3>
                                                <h4>OOP|Project</h4>
                                                <p><a
                                                        href="https://github.com/AlMamunFarhad/oop-project-1">https://github.com/AlMamunFarhad/oop-project-1</a>
                                                </p>
                                                <p><a
                                                        href="https://github.com/AlMamunFarhad/php-oop-project-2">https://github.com/AlMamunFarhad/php-oop-project-2</a>
                                                </p>
                                                <h4>PHP|Project</h4>
                                                <p><a
                                                        href="https://github.com/AlMamunFarhad/core-php-cms-1">https://github.com/AlMamunFarhad/core-php-cms-1</a>
                                                </p>
                                                <p><a
                                                        href="https://github.com/AlMamunFarhad/core-php-cms-2">https://github.com/AlMamunFarhad/core-php-cms-2</a>
                                                </p>
                                                <h4>HTML/CSS/Bootstrap|Project</h4>
                                                <p><a
                                                        href="https://github.com/AlMamunFarhad/social-media-project">https://github.com/AlMamunFarhad/social-media-project</a>
                                                </p>
                                                <p><a
                                                        href="https://github.com/AlMamunFarhad/html-css-js-project">https://github.com/AlMamunFarhad/html-css-js-project</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 right-info">
                                        <div class="resume-right text-break">
                                            <div class="content-one">
                                                <h3>SKILLS</h3>
                                                <h4 class="pt-2">Technical</h4>
                                                <p>HTML/CSS/Sass/Bootstrap/JavaScrip</p>
                                                <p>PHP/OOP/Laravel/WordPress</p>
                                                <p>MySQL</p>
                                                <p>Git/Github</p>
                                                <p>Object-oriented design</p>
                                                <p>Design and implement database structures</p>
                                                <p>Lead and deliver complex websites</p>
                                            </div>
                                            <div class="professional">
                                                <h4>Professional</h4>
                                                <p>Effective communication</p>
                                                <p>Team player</p>
                                                <p>Strong problem solver</p>
                                                <p>Good time management</p>
                                            </div>
                                            <div class="education">
                                                <h3 class="mt-4">EDUCATION</h3>
                                                <h4>Udemy</h4>
                                                <P>PHP | OOP | Laravel
                                                    <br> November 2021 - 2024
                                                </P>
                                                <h4>CodersTrust</h4>
                                                <P>Responsive Web Design
                                                    <br> September 2022 - March 2023
                                                </P>
                                                <h4>Raw Tech Society</h4>
                                                <P>Basic Web Design <br> January 2021 - September 2021</P>
                                                <h4>Bachelor of Science in Chemistry</h4>
                                                <P>Joypurhat Govt. College
                                                    <br> 2017 - 2021
                                                </P>
                                            </div>
                                            <div class="interests">
                                                <h3 class="mt-4">INTERESTS</h3>
                                                <h4>Udemy</h4>
                                                <P>Travelling</P>
                                                <P>Photography</P>
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
