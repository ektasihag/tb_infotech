@extends('frontend.layouts.main')

@section('main-section')

<div class="home-banner" style="background-image: url('{{ asset('frontend/img/abouts.png') }}');">
    <div class="layer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 main-text">
                    <div class="blob blob-14">
                        <h2>Create Software and Apps To Meet Your Customer Needs</h2>
                        <p>Collaborate with the TB InfoTech to develop products and platforms that improve your customer’s experiences, reward their loyalty, and help your business thrive.</p>
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
            <div class="offset-md-1 col-md-10 offset-md-1 text-section2">
                <h2 class="text-center">Our Mission is To Harness Our Creativity Into a Viable Solution</h2>
                <div class="title-divider">
                    <div class="bar-1"></div>
                        <div class="bar-2">
                        <div class="bar-2-1"></div>
                        <div class="bar-2-2"></div>
                        <div class="clear"></div>
                    </div>
                </div>
                <p class="text-center"><b>TB InfoTech</b> is one of the leading companies based in Mohali, Punjab in India providing Software Solutions across world. We are set up with an objective to deliver the world class good and top quality services. We understand your business needs and work according to your requirements and needs. We at TB InfoTech visualize all the possibilities of your products and services. We focus on attraction and interaction towards your work. We have a highly talented, qualified and highly experienced team of developers, who are always there to assist you 24*7. Our teams possess solid foundation in technology, marketing, development and skills. We offer span web design, software design, e-commerce development, online marketing solutions, WordPress solutions and Content management systems. We offer a wide range of services in WordPress development which are WordPress customization, website development, WordPress theme design, WordPress plug-in development, WordPress SEO services, and many more.</p>
            </div>
        </div>
    </div>
</section>
<!--2nd section end-->
<!--who we  section-->
<section class="abour-com" style="background-image: url('img/slider-bg');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-6">
                   <div class="images-sec mb-5">
                        <div class="img1">
                            <img src="{{ asset('storage/about_images/' . $chooseUs['front_image']) }}" alt="{{ $chooseUs['title'] }}">
                        </div>
                        <div class="img2">
                            <img src="{{ asset('storage/about_images/' . $chooseUs['back_image']) }}" alt="{{ $chooseUs['title'] }}">
                        </div>
                   </div>
            </div>
            <div class="col-sm-12 col-md-6 about-page">
            <h2>{{ $chooseUs->title}}</h2>
                <div class="text-border"></div>
                <p class="newclr">{{ $chooseUs->description}}</p>
            </div>
           
        </div>
    </div>
</section>

<section class="abour-com">
    <div class="container">

        <div class="row align-items-center">
        <div class="col-sm-12 col-md-6 about-page">
                <h2>{{ $customerSatisfaction->title}}</h2>
                <div class="text-border"></div>
                <p class="newclr">{{ $customerSatisfaction->description}}</p>
            </div>
            <div class="col-sm-12 col-md-6">
                   <div class="imagein-right images-sec mb-5">
                        <div class="img1">
                            <img src="{{ asset('storage/about_images/' . $customerSatisfaction['front_image']) }}" alt="{{ $customerSatisfaction['title'] }}">
                        </div>
                        <div class="img2">
                            <img src="{{ asset('storage/about_images/' . $customerSatisfaction['back_image']) }}" alt="{{ $customerSatisfaction['title'] }}">
                        </div>
                   </div>
            </div>
        </div>
    </div>
</section>

<section class="vision-mission" style="background-image: url('{{asset('frontend/img/slider-bg') }}');">
    <div class="container">
        <div class="row">

            <div class="col-sm-12 col-md-4">
                <div class="our-vission">
                    <h4>{{ $companyValues ->title1 }}</h4>
                    <div class="divide"></div>
                    <p>{{ $companyValues ->description1 }}</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="our-img">
                    <img src="{{ asset('storage/company_values_images/' . $companyValues ->image) }}" alt="Company Image">
                </div>
            </div>
            <div class="col-sm-12 col-md-4 posti">
                <div class="our-mission">
                    <h4>{{ $companyValues ->title2 }}</h4>
                    <div class="divide"></div>
                    <p>{{ $companyValues ->description2 }}</p>
                </div>
                
            </div>
        </div>
    </div>
</section>
@endsection