@extends('frontend.layouts.main')
@section('main-section')


<div class="services-banner" style="background-image: url('{{ asset('frontend/img/portfolio.png') }}');">
    <div class="layer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 service-text text-center">
                    <div class="blob blob-14">
                        <p>KNOW MORE ABOUT OUR WORK</p>
                        <h2>Our Work</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="our-wrk" style="background-image: url('{{asset('frontend/img/slider-bg') }}');">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-lg-4 py-3 ourworks">
                <div class="overf">
                    <a target="_blank" href="{{ isset($ourWork['image']) && $ourWork['image'] ? asset('storage/our_work_images/' . $ourWork['image']) : 'https://via.placeholder.com/150' }}">
                        <img src="{{ isset($ourWork['image']) && $ourWork['image'] ? asset('storage/our_work_images/' . $ourWork['image']) : 'https://via.placeholder.com/150' }}" alt="Placeholder Image" >
                            <div class="overlay">
                            <div class="text">
                                    <i class="fa-solid fa-link"></i>
                                </div>
                            </div>
                    </a>
                </div>
            </div>
        <!--     <div class="col-xs-12 col-sm-6 col-lg-4 py-3 ourworks">
                <div class="overf">
                    <a target="blak" href="https://murfreesboro.com/">
                        <img src="{{ asset('frontend/img/work2.png') }}">
                            <div class="overlay">
                            <div class="text">
                                    <i class="fa-solid fa-link"></i>
                                </div>
                            </div>
                    </a>
                </div>
            </div> -->
         <!--    <div class="col-xs-12 col-sm-6 col-lg-4 py-3 ourworks">
                <div class="overf">
                    <a target="blak" href="https://murfreesboro.com/">
                        <img src="{{ asset('frontend/img/work3.png') }}">
                            <div class="overlay">
                                <div class="text">
                                    <i class="fa-solid fa-link"></i>
                                </div>
                            </div>
                    </a>
                </div>
            </div> -->
           <!--  <div class="col-xs-12 col-sm-6 col-lg-4 py-3 ourworks">
                <div class="overf">
                    <a target="blak" href="https://murfreesboro.com/">
                        <img src="{{ asset('frontend/img/work4.png') }}">
                            <div class="overlay">
                                <div class="text">
                                    <i class="fa-solid fa-link"></i>
                                </div>
                            </div>
                    </a>
                </div>
            </div> -->
          <!--   <div class="col-xs-12 col-sm-6 col-lg-4 py-3 ourworks">
                <div class="overf">
                    <a target="blak" href="https://murfreesboro.com/">
                        <img src="{{ asset('frontend/img/work5.png') }}">
                            <div class="overlay">
                                <div class="text">
                                    <i class="fa-solid fa-link"></i>
                                </div>
                            </div>
                    </a>
                </div>
            </div> -->
          <!--   <div class="col-xs-12 col-sm-6 col-lg-4 py-3 ourworks">
                <div class="overf">
                    <a target="blak" href="https://murfreesboro.com/">
                        <img src="{{ asset('frontend/img/work6.png') }}">
                            <div class="overlay">
                                <div class="text">
                                    <i class="fa-solid fa-link"></i>
                                </div>
                            </div>
                    </a>
                </div>
            </div> -->
           <!--  <div class="col-xs-12 col-sm-6 col-lg-4 py-3 ourworks">
                <div class="overf">
                    <a target="blak" href="https://murfreesboro.com/">
                        <img src="{{ asset('frontend/img/work7.png') }}">
                            <div class="overlay">
                                <div class="text">
                                    <i class="fa-solid fa-link"></i>
                                </div>
                            </div>
                    </a>
                </div>
            </div> -->
          <!--   <div class="col-xs-12 col-sm-6 col-lg-4 py-3 ourworks">
                <div class="overf">
                    <a target="blak" href="https://murfreesboro.com/">
                        <img src="{{ asset('frontend/img/work8.png') }}">
                            <div class="overlay">
                                <div class="text">
                                    <i class="fa-solid fa-link"></i>
                                </div>
                            </div>
                    </a>
                </div>
            </div> -->
          <!--   <div class="col-xs-12 col-sm-6 col-lg-4 py-3 ourworks">
                <div class="overf">
                    <a target="blak" href="https://murfreesboro.com/">
                        <img src="{{ asset('frontend/img/work9.png') }}">
                            <div class="overlay">
                                <div class="text">
                                    <i class="fa-solid fa-link"></i>
                                </div>
                            </div>
                    </a>
                </div>
            </div> -->




        </div>
    </div>
</section>


@endsection