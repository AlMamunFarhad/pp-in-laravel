@extends('layouts.master')
@section('content')
    @include('layouts.sidebar')
    <div class="main-content" id="main_content">
        <!-- ============== About ================== -->
        <section id="about">
            <div class="about-section d-flex align-items-center">
                <div class="container">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-md-8">
                            <div class="about-content">
                                    <h1>{{ $about_home->name }}</h1>
                                    <h5>{{ $about_home->title }}</h5>
                                <p class="py-3">{{ $about_home->description }} <a href="{{ route('front.resume') }}">View resume</a> and <a
                                            href="{{ route('portfolio.all') }}">View all Projects</a>.
                                    </p>
                                <div class="d-flex flex-wrap about-btn">
                                    <a href="" class="custom-btn">View Portfolio</a>
                                    <a href="{{ route('front.resume') }}" class="ms-2 resume-btn">View Resume</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset($about_home->image) }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ============== About ================== -->
        <!--======= Skills Section ========-->
        <section class="skills-section" id="skills">
            <div class="container">
                <div class="row">
                    <div class="skills-text">
                        <h1 class="text-border ps-3">Skills</h1>
                        <p>I'm a passionate full-stack web developer dedicated to creating innovative and user-centric
                            digital
                            experiences. Proficient in HTML, CSS/Sass, Bootstrap, JavaScript, WordPress, PHP, OOP, Laravel,
                            and
                            various front-end and back-end frameworks. - Experienced in server-side scripting languages like
                            PHP,
                            with expertise in MySQL database. - Skilled in version control with Git, and proficient in
                            deploying and
                            managing web applications on platforms like AWS and Heroku.</p>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="skills-content">
                            <div class="skills-img">
                                <img src="images/laravel.png" class="img-fluid" alt="">
                            </div>
                            <h1>LARAVEL</h1>
                            <p>I'm proficient in Laravel, a powerful PHP framework known for its elegance and simplicity. I
                                leverage
                                Laravel's built-in features and conventions to streamline development, improve code
                                maintainability,
                                and deliver scalable and secure web applications.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="skills-content">
                            <div class="skills-img">
                                <img src="images/oop.png" class="img-fluid" alt="">
                            </div>
                            <h1>OOP</h1>
                            <p>I have extensive experience with OOP concepts such as encapsulation, inheritance,
                                polymorphism, and
                                abstraction. I apply these principles to design elegant and efficient solutions that are
                                easy to
                                understand, extend, and maintain.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="skills-content">
                            <div class="skills-img d-flex pt-2">
                                <div class="skills-img">
                                    <img src="images/php.png" class="img-fluid php-icon" alt="">
                                </div>
                                <div class="s-right-img" style="padding-top: .8rem;">
                                    <img src="images/mysql.png" class="img-fluid" alt="">
                                </div>
                            </div>
                            <h1>PHP</h1>
                            <p>I'm skilled in server-side scripting languages like PHP and the principles of object-oriented
                                programming (OOP). I use PHP to develop robust backend solutions, implement business logic,
                                and
                                interact with databases to retrieve and manipulate data.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="skills-content">
                            <div class="skills-img d-flex pt-2">
                                <div class="s-left-img">
                                    <img src="images/git1.png" class="img-fluid" alt="">
                                </div>
                                <div class="s-right-img">
                                    <img src="images/github.jpg" class="img-fluid github-img" alt="">
                                </div>
                            </div>
                            <h1>Git & Github</h1>
                            <p>I have extensive knowledge of Git, the mainstay of modern version control systems. GitHub is
                                my
                                virtual workspace, where ideas come to life through collaboration, communication, and code.
                                GitHub
                                empowers me to connect with fellow developers.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="skills-content">
                            <div class="skills-img">
                                <img src="images/js.png" class="img-fluid" alt="">
                            </div>
                            <h1>Vanilla JavaScript</h1>
                            <p>I have a deep understanding of vanilla JavaScript, including its core concepts, syntax, and
                                best
                                practices. I excel at writing clean, efficient, and maintainable code to implement various
                                functionalities, such as DOM manipulation, event handling, and asynchronous programming.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="skills-content">
                            <div class="skills-img d-flex">
                                <div class="s-left-img">
                                    <img src="images/html.png" class="img-fluid" alt="">
                                </div>
                                <div class="s-right-img">
                                    <img src="images/css.png" class="img-fluid" alt="">
                                </div>
                                <div class="s-right-img">
                                    <img src="images/bootstrap.png" class="img-fluid bootstrap-icon" width="500"
                                        alt="">
                                </div>
                            </div>
                            <h1>Html Css & Sass</h1>
                            <p>I have a strong foundation in front-end development, with extensive experience in HTML, CSS,
                                and
                                Bootstrap. I specialize in crafting responsive and visually appealing user interfaces that
                                provide an
                                optimal viewing experience across all devices.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="skills-content">
                            <div class="skills-img d-flex">
                                <div class="s-left-img">
                                    <img src="images/sass.png" class="img-fluid" alt="">
                                </div>
                            </div>
                            <h1>Bootstrap & Tailwind</h1>
                            <p>I'm a detail-oriented front-end developer with a specialization in Sass With a keen eye for
                                design
                                and a passion for efficiency, I harness the power of Sass to create elegant, maintainable,
                                and
                                scalable stylesheets that bring websites to life.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="skills-content">
                            <div class="skills-img">
                                <img src="images/wp_1.png" class="pt-2 img-fluid" alt="">
                            </div>
                            <h1>Wordpress</h1>
                            <p>I'm a dedicated web developer with a specialization in WordPress. With a keen eye for design
                                and a
                                passion for user experience, I leverage the power and flexibility of WordPress to create
                                stunning and
                                functional websites that meet the unique needs of my clients.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--======= Skills Section end========-->
    </div>
@endsection
