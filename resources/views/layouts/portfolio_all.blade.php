@extends('layouts.master')
@section('content')
    @include('layouts.sidebar')
    <div class="main-content" id="main_content">
        <div class="portfolio-section">
            <div class="laravel-section">
                <h1 class="text-decoration-underline text-center pb-4 pt-5">LARAVEL</h1>
                <div class="row g-4">
                    @if ($laravel_projects->isNotEmpty())
                        @foreach ($laravel_projects as $laravel)
                            <div class="col-xl-3 col-md-6">
                                <div class="portfolio-content">
                                    <div class="portfolio-img">
                                        <img src="{{ $laravel->image }}" class="img-fluid" alt="img">
                                        <div class="portfolio">
                                            <a href="{{ $laravel->github }}" class="portfolio-btn"><i
                                                    class="fa-brands fa-github"></i></a>
                                        </div>
                                    </div>
                                    <p class="text-center pt-3">{{ $laravel->title }}</p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="php-section">
                    <h1 class="text-decoration-underline text-center pb-4 mt-4">PHP</h1>
                    <div class="row g-4">
                        @if ($php_projects->isNotEmpty())
                            @foreach ($php_projects as $php)
                                <div class="col-xl-3 col-sm-6">
                                    <div class="portfolio-content">
                                        <div class="portfolio-img">
                                            <img src="{{ $php->image }}" class="img-fluid" alt="img">
                                            <div class="portfolio">
                                                <a href="{{ $php->github }}" class="portfolio-btn"><i
                                                        class="fa-brands fa-github"></i></a>
                                            </div>
                                            <p class="text-center pt-3">{{ $php->title }}</p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="js-section">
                    <h1 class="text-decoration-underline text-center pb-4 pt-4">JAVASCRIPT</h1>
                    <div class="row g-4">
                        @if ($js_projects->isNotEmpty())
                            @foreach ($js_projects as $js)
                                <div class="col-xl-3 col-sm-6">
                                    <div class="portfolio-content">
                                        <div class="portfolio-img">
                                            <img src="{{ $js->image }}" class="img-fluid" alt="img">
                                            <div class="portfolio">
                                                <a href="{{ $js->project }}" class="portfolio-btn"><i
                                                        class="fa-regular fa-eye"></i></a>
                                                <a href="{{ $js->github }}" class="portfolio-btn"><i
                                                        class="fa-brands fa-github"></i></a>
                                            </div>
                                            <p class="text-center pt-3">{{ $js->title }}</p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="design-section">
                    <h1 class="text-center text-decoration-underline pb-4 pt-4">WEBSITE DESIGN</h1>
                    <div class="row g-4">
                        @if ($design_projects->isNotEmpty())
                            @foreach ($design_projects as $design)
                                <div class="col-xl-3 col-sm-6">
                                    <div class="portfolio-content">
                                        <div class="portfolio-img">
                                            <img src="{{ $design->image }}" class="img-fluid" alt="img">
                                            <div class="portfolio">
                                                <a href="{{ $design->project }}" class="portfolio-btn"><i
                                                        class="fa-regular fa-eye"></i></a>
                                                <a href="{{ $design->github }}" class="portfolio-btn"><i
                                                        class="fa-brands fa-github"></i></a>
                                            </div>
                                            <p class="text-center pt-3">{{ $design->title }}</p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
