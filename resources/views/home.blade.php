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
                                    <a href="{{ route('portfolio.all') }}" class="custom-btn">View Portfolio</a>
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
                        <h1 class="text-border ps-3 mb-3">{{ $description->title }}</h1>
                        <p class="mb-3">{!! $description->description !!}</p>
                    </div>
                    @foreach ($skills as $skill)
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="skills-content">
                            @php
                                $images = json_decode($skill->images)
                            @endphp
                            <div class="d-flex align-items-center">
                            @foreach ($images as $image)
                            <div class="skills-img">
                                <img src="{{ asset($image) }}" class="img-fluid" alt="">
                            </div>
                            @endforeach
                        </div>
                            <h1>{{ $skill->title }}</h1>
                            <p>{!! $skill->content !!}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!--======= Skills Section end========-->
    </div>
@endsection
