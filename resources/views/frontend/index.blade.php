@extends('frontend.layouts.main')
@section('main-section')

<div class="home-banner" style="background-image: url('{{ asset('frontend/img/banner.jpg') }}');">
    <div class="layer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 main-text">
                    <div class="blob blob-14">
                        <h2>With Our Expert Web Solutions, You Can Speed Up Your Web Design Process.</h2>
                        <p>We specialize in offering end-to-end bespoke web app design and development services that are specifically built to address your business’s particular needs. So, in this technologically evolved world, don’t go unnoticed and use a websiteor a web application to help your business flourish.</p>
                        <a href="#">FREE CONSULTATION</a>
                    </div>
                </div>
                    <div class="col-sm-12 col-md-6">
                        
                    </div>
            </div>
        </div>
    </div>
</div>
<!--2nd section-->
<section>
    <div class="container">
        <div class="row">
            <div class="offset-md-2 col-md-8 offset-md-2 text-section2">
                <h2 class="text-center">Exploit Our Full-Stack Web Design & Development Services to Your Advantage.</h2>
                <div class="title-divider">
                    <div class="bar-1"></div>
                        <div class="bar-2">
                        <div class="bar-2-1"></div>
                        <div class="bar-2-2"></div>
                        <div class="clear"></div>
                    </div>
                </div>
                <p class="text-center">We provide a comprehensive variety of web design and development services as an unique web design and developmen organization with over 10 years of professional experience. Everything linked to the online, from strategy and advice to bespoke web design and development, progressive web apps (PWAs) to business web applications.</p>
            </div>
        </div>
    </div>
</section>
<!--2nd section end-->
<!--who we  section-->
<section class="abour-com" style="background-image:  url('{{ asset('frontend/img/slider-bg.jpg') }}');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-6 ">
                <h5>{{ $home_who_are['title'] ?? 'Default Title' }}</h5>
                <h1>{{ $home_who_are['sub_title'] ?? 'Default Subtitle' }}</h1>
                <p>{{ $home_who_are['descrition'] ?? 'Default Description' }}</p>
            </div>
            <div class="col-sm-12 col-md-6">
               <img src="{{ asset('storage/home_who_are_images/' . ($homeWhoAre['image'] ?? 'default_image.png')) }}" alt="{{ $homeWhoAre['sub_title'] ?? 'Default Title' }}">

            </div>
        </div>
    </div>
</section>
<!--who we  section end-->
<!--tabs-sec-->
<section class="abour-get">
    <div class="container">
        <div class="row">
            <div class="get-advise">
                <div class="row align-items-center">

                    <div class="col-sm-12 col-md-4">
                       <img src="{{ asset('storage/home_free_consultation_images/' . ($home_free_consultations['image'] ?? 'default_image.png')) }}" alt="{{ $home_free_consultations['title'] ?? 'Default Title' }}">
                    </div>
                    <div class="col-sm-12 col-md-8">
                        <h3>{{ isset($home_free_consultations['title']) ? $home_free_consultations['title'] : 'Default Title' }}</h3>
                        <p>{{ isset($home_free_consultations['description']) ? $home_free_consultations['description'] : 'Default Description' }}</p>
                        <a href="{{ url('/') }}">FREE CONSULTATION</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--tabs-sec end-->

<!--why choose us-->
<section class="servs" style="background-image:  url('{{ asset('frontend/img/slider-bg') }}');" id="serverId">
    <div class="container">
        <div class="row">
         @foreach($homes as $home)
    <div class="col-md-12 mb-4 tabs-boxes" id="serverId{{$home['id']}}">
        <div class="row">
            <div class="col-lg-1 d-flex align-items-center">
                <div class="image-circle">
                    <img src="{{ asset($home['image']) }}" alt="{{ $home['title'] }}">
                </div>
            </div>
            <div class="col-lg-11">
                <span class="title-tabs">{{ $home['title'] }}</span>
                <span class="number-tabs">{{ $loop->iteration }}</span>
                <div class="text-border"></div>
                <div class="row">
                    <div class="col-12 pdi">
                        <p>{{ $home['description'] }}</p>
                            </div>
                        </div>
                </div>
            </div>
        </div>
           @endforeach
        </div>
    </div>
</section>
<!--why choose us end-->
<!--last-sec-->
<section class="final-boxes">
    <div class="row">
          @foreach($highlights as $highlight)
        <div class="col-sm-12 col-md-4 frst-items">
            <img src="{{ asset($highlight['image']) }}" alt="{{ $highlight['title'] }}">
            <h3>{{ $highlight['title'] }}</h3>
            <p>{{ $highlight['description'] }}</p>
        </div>
         @endforeach
       </div>
</section>
<!--last-sec-->
<!--slider-sec-->

<section class="slider-sec">
    <div class="container">
        <div class="row">
            <div class="offset-md-2 col-md-8 offset-md-2 text-center">
                <h2>Advanced palette to chalk out creative visions for your businesses</h2>
                <div class="title-divider">
                    <div class="bar-1"></div>
                        <div class="bar-2">
                        <div class="bar-2-1"></div>
                        <div class="bar-2-2"></div>
                        <div class="clear"></div>
                    </div>
                </div>
                <p>The soaring exercise for human imagination is technology and we, here at Paradise use different technologies to help achieve our clients their unrealized visions.</p>
            </div>
        <div class="slideshow-container">
            @foreach($home_technology_logo as $home_technology_logos )
        <div class="slide">

            <img src="{{ asset('storage/our_technology_logo/' . $home_technology_logos['image']) }}">
        </div>
        @endforeach
<!--         <div class="slide">
            <img src="{{ asset('frontend/img/slick_two.png') }}">
        </div>
        <div class="slide">
             <img src="{{ asset('frontend/img/slick_three.png') }}">
        </div>
        <div class="slide">
            <img src="{{ asset('frontend/img/slick_four.png') }}">
        </div>
        <div class="slide">
            <img src="{{ asset('frontend/img/slick_five.png') }}">
        </div>
        <div class="slide">
            <img src="{{ asset('frontend/img/slick_six.png') }}">
        </div>
        <div class="slide">
            <img src="{{ asset('frontend/img/slick_nine.png') }}">
        </div>
        <div class="slide">
            <img src="{{ asset('frontend/img/slick_eleven.png') }}">
        </div>
        <div class="slide">
            <img src="{{ asset('frontend/img/slick_twelve.png') }}">
        </div>
        <div class="slide">
            <img src="{{ asset('frontend/img/figma.png') }}">
        </div>
        <div class="slide">
            <img src="{{ asset('frontend/img/drupal.jpg') }}">
        </div>
        <div class="slide">
            <img src="{{ asset('frontend/img/larawel.png') }}">
        </div> -->
        <!-- Add more slides as needed -->
    </div>
    <div class="dot-container">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <!-- Add more dots as needed -->
</div>

        </div>
    </div>
</section>
<!--end slider sec-->

<section class="infosec" style="background-image: url('{{ asset('frontend/img/lapi.jpg') }}');">
    <div class="clrs">
    <div class="container">
        <div class="row">
            <div class="offset-md-2 col-md-8 offset-md-2 text-center follow-sec">
                <h2>The Process We Follow From Design To Development.</h2>
                <div class="title-divider">
                    <div class="bar-1"></div>
                        <div class="bar-2">
                        <div class="bar-2-1"></div>
                        <div class="bar-2-2"></div>
                        <div class="clear"></div>
                    </div>
                </div>
                <p>We have served over 1000 clients as one of the leading web design and development firms by providing online solutions that have dramatically improved their growth.</p>
                <a href="#">GET IN TOUCH</a>
            </div>
        </div>
    </div>
    </div>
</section>

<section class="ab-team">
    <div class="container">
        @foreach($team_stats as $team_stat)
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-lg-3 pt-3 pb-3 text-center">
                <div class="team-info">
                    <h4>{{ $team_stat->satisfied_clients_number }}<span>+</span></h4>
                    <p>{{ $team_stat->satisfied_clients_title }}</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-3 pt-3 pb-3 text-center">
                <div class="team-info">
                    <h4>{{ $team_stat->positive_feedback_number }}<span>%</span></h4>
                    <p>{{ $team_stat->positive_feedback_title }}</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-3 pt-3 pb-3 text-center">
                <div class="team-info">
                    <h4>{{ $team_stat->project_ongoing_number }}<span>+</span></h4>
                    <p>{{ $team_stat->project_ongoing_title }}</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-3 pt-3 pb-3 text-center">
                <div class="team-info">
                    <h4>{{ $team_stat->years_of_experience_number }}<span>+</span></h4>
                    <p>{{ $team_stat->years_of_experience_title }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
 
@endsection
 