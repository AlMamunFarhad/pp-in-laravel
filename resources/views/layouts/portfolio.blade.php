@extends('layouts.master')

@section('content')
@include('layouts.sidebar')
<div class="main-content" id="main_content">
    <section id="portfolio">
        <div class="portfolio-section">
            <div class="container">
                <div class="d-flex justify-content-center align-items-center pb-3">
                    <h1 class="text-center mb-4 text-border">PORTFOLIO</h1>
                </div>
                <div class="menu">
                    <button class="menu-btn active" data-target="row1">All</button>
                    <button class="menu-btn" data-target="row2">Backend</button>
                    <button class="menu-btn" data-target="row3">JavaScript</button>

                </div>
                <div class="row g-4 justify-content-center change active" id="row1">
                    <div class="col-lg-4 col-md-6">
                        <div class="portfolio-content">
                            <div class="portfolio-img">
                                <img src="images2/laravel/laravel.jpg" class="img-fluid" alt="img">
                                <a href="https://github.com/AlMamunFarhad/job-portal-in-laravel"
                                    class="portfolio-btn">View</a>
                            </div>
                            <p class="text-center pt-3">Job Portal in Laravel</p>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="portfolio-content">
                            <div class="portfolio-img">
                                <img src="images2/core_php2.jpg" class="img-fluid" alt="img">
                                <a href="https://github.com/AlMamunFarhad/laravel-blog-application"
                                    class="portfolio-btn">View</a>
                            </div>
                            <p class="text-center pt-3">Laravel Blog Application in Laravel</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="portfolio-content">
                            <div class="portfolio-img">
                                <img src="images2/laravel/student1.jpg" class="img-fluid" alt="img">
                                <a href="https://github.com/AlMamunFarhad/Student-Management-system-in-laravel"
                                    class="portfolio-btn">View</a>
                            </div>
                            <p class="text-center pt-3">Student Management system in laravel</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="portfolio-content">
                            <div class="portfolio-img">
                                <img src="images2/img9.png" class="img-fluid" alt="img">
                                <a href="https://github.com/AlMamunFarhad/Restaurant-reservation-in-laravel"
                                    class="portfolio-btn">View</a>
                            </div>
                            <p class="text-center pt-3">Restaurant reservation in laravel</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="portfolio-content">
                            <div class="portfolio-img">
                                <img src="images2/oop1.png" class="img-fluid" alt="img">
                                <a href="https://github.com/AlMamunFarhad/oop-project-1"
                                    class="portfolio-btn">View</a>
                            </div>
                            <p class="text-center pt-3">OOP project</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="portfolio-content">
                            <div class="portfolio-img">
                                <img src="images2/core_php1.jpg" class="img-fluid" alt="img">
                                <a href="https://github.com/AlMamunFarhad/core-php-cms-1"
                                    class="portfolio-btn">View</a>
                            </div>
                            <p class="text-center pt-3">Core PHP CMS</p>
                        </div>
                    </div>
                    <div class=" d-flex justify-content-center align-items-center">
                        <a href="{{ route('portfolio.all') }}" class="text-center custom-btn">READ MORE</a>
                    </div>
                </div>
                <div class="row g-4 justify-content-center service-row change" id="row2">
                    <div class="col-lg-4 col-md-6">
                        <div class="portfolio-content">
                            <div class="portfolio-img">
                                <img src="images2/laravel/laravel.jpg" class="img-fluid" alt="img">
                                <a href="https://github.com/AlMamunFarhad/job-portal-in-laravel"
                                    class="portfolio-btn">View</a>
                            </div>
                            <p class="text-center pt-3">Job Portal in Laravel</p>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="portfolio-content">
                            <div class="portfolio-img">
                                <img src="images2/core_php2.jpg" class="img-fluid" alt="img">
                                <a href="https://github.com/AlMamunFarhad/laravel-blog-application"
                                    class="portfolio-btn">View</a>
                            </div>
                            <p class="text-center pt-3">Laravel Blog Application in Laravel</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="portfolio-content">
                            <div class="portfolio-img">
                                <img src="images2/laravel/student1.jpg" class="img-fluid" alt="img">
                                <a href="https://github.com/AlMamunFarhad/Student-Management-system-in-laravel"
                                    class="portfolio-btn">View</a>
                            </div>
                            <p class="text-center pt-3">Student Management system in laravel</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="portfolio-content">
                            <div class="portfolio-img">
                                <img src="images2/img9.png" class="img-fluid" alt="img">
                                <a href="https://github.com/AlMamunFarhad/Restaurant-reservation-in-laravel"
                                    class="portfolio-btn">View</a>
                            </div>
                            <p class="text-center pt-3">Restaurant reservation in laravel</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="portfolio-content">
                            <div class="portfolio-img">
                                <img src="images2/oop1.png" class="img-fluid" alt="img">
                                <a href="https://github.com/AlMamunFarhad/oop-project-1"
                                    class="portfolio-btn">View</a>
                            </div>
                            <p class="text-center pt-3">OOP project</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="portfolio-content">
                            <div class="portfolio-img">
                                <img src="images2/core_php1.jpg" class="img-fluid" alt="img">
                                <a href="https://github.com/AlMamunFarhad/core-php-cms-1"
                                    class="portfolio-btn">View</a>
                            </div>
                            <p class="text-center pt-3">Core PHP CMS</p>
                        </div>
                    </div>
                </div>
                <div class="row g-4 service-row change" id="row3">
                    <div class="col-lg-4 col-md-6">
                        <div class="portfolio-content">
                            <div class="portfolio-img">
                                <img src="../images2/js-img1.png" class="img-fluid" alt="img">
                                <a href="https://almamunfarhad.github.io/javascript-guessing-game/"
                                    class="portfolio-btn">View</a>
                            </div>
                            <p class="text-center pt-3">JS Guessing Game</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="portfolio-content">
                            <div class="portfolio-img">
                                <img src="../images2/js-img2.png" class="img-fluid" alt="img">
                                <a href="https://almamunfarhad.github.io/Todo-app/"
                                    class="portfolio-btn">View</a>
                            </div>
                            <p class="text-center pt-3">JS Todo App</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="portfolio-content">
                            <div class="portfolio-img">
                                <img src="../images2/js-img3.png" class="img-fluid" alt="img">
                                <a href="https://almamunfarhad.github.io/javascript-dynamic-card/"
                                    class="portfolio-btn">View</a>
                            </div>
                            <p class="text-center pt-3">JS Dynamic Card</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="portfolio-content">
                            <div class="portfolio-img">
                                <img src="../images2/js-img4.png" class="img-fluid" alt="img">
                                <a href="https://almamunfarhad.github.io/js-user-preferece/"
                                    class="portfolio-btn">View</a>
                            </div>
                            <p class="text-center pt-3">JS User Preferece</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
@endsection