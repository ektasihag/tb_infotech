@extends('frontend.layouts.main')
@section('main-section')


<div class="services-banner" style="background-image: url('{{ asset('frontend/img/ser.jpg') }}');">
    <div class="layer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 service-text text-center">
                    <div class="blob blob-14">
                        <p>KNOW MORE ABOUT OUR SERVICES</p>
                        <h2>Our Services</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="abour-com">
    <div class="container">
        <div class="row align-items-center">
           
        <div class="col-sm-12 col-md-6 about-page">
                <p class="servive-text">Our process</p>
                <h2>What we are offerring?</h2>
                <div class="text-border"></div>
                 @foreach($service_offerings as $service_offering)
                <div class="servive-step">
                    <div class="service-number"><span>{{ $loop->iteration }}</span></div>
                        <div class="service-steps">
                            <p class="newclrs">{{ $service_offering['title'] }}</p>
                            <p>{{ $service_offering['description'] }}</p>
                        </div>
                   
                </div>
               
              
            </div>
          
            <div class="col-sm-12 col-md-6">
                   <div class="servive-images">
                        <div class="img1">
                            <img src="{{ asset('storage/service_offering_images/' . $service_offering['image']) }}" alt="{{ $service_offering['title'] }}">
                        </div>
                   </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="servs" style="background-image: url('{{ asset('frontend/img/slider-bg') }}');">
    <div class="container">
        <div class="row">
            <div class="col-12 services">
                <h2>Services We Offer <span>- Best Mobile App & Web</span> Designing Company</h2>
            </div>
        </div>
        <div class="row">
            @foreach($homes as $home)
        <div class="col-md-12 mb-4 tabs-boxes">
            <div class="row">
                <div class="col-lg-1 d-flex align-items-center">
                    <div class="image-circle">
                        <img src="{{ asset($home['image']) }}"  alt="{{ $home['title'] }}">
                    </div>
                </div>
                <div class="col-lg-11">
                    <span clss="title-tabs">{{ $home['title'] }}</span>
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


@endsection