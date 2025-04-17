@extends('frontend.layouts.main')
@section('main-section')
<div class="services-banner" style="background-image: url('{{ asset('frontend/img/ser.jpg') }}' );">
    <div class="layer">
        <div class="container">
            <div class="row">
                <div class="offset-md-2 col-sm-12 col-md-8 offset-md-2 service-text text-center">
                    <div class="blob blob-14">
                        <p>Get in Touch with Us</p>
                        <h2>Contact us with any questions or inquiries; we're here to help.</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="contact-page">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 pb-4 text-center contact-title">
                <h4>Contact Us</h4>
                <div class="title-divider">
                    <div class="bar-1"></div>
                        <div class="bar-2">
                        <div class="bar-2-1"></div>
                        <div class="bar-2-2"></div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 content-contact">
                @if (session('success'))
                   <div class="alert alert-success">
                       {{ session('success') }}
                  </div>
                @endif
               <form  method="post" action="{{ route('contact.store') }}">
                 @csrf
                        <div class="first-row">
                            <div class="form-item">
                                <label for="first_name">First Name</label><br>
                                <input type="text" name="first_name" required>
                            </div>
                            <div class="form-item">
                                <label for="last_name">Last Name</label><br>
                                <input type="text" name="last_name"required>
                            </div>
                        </div>
                        <div class="first-row">
                            <div class="form-item">
                                <label for="email">Email</label><br>
                                <input type="email"  name="email" required>
                            </div>
                            <div class="form-item">
                                <label for="subject">Subject</label><br>
                                <input type="text"  name="subject" required>
                            </div>
                        </div>
                        <div class="text-area">
                            <label for="message" >Your Message</label><br>
                            <textarea name="message"></textarea>
                        </div>
                        <div class="submit-btn">
                            <button type="submit" name="submit">Submit</button>
                        </div>
                    </form>
            </div>
            <div class="col-sm-12 col-md-6 text-center contact-image">
                <img src="{{ asset('frontend/img/contact.png') }}">
            </div>
        </div>
    </div>
</section>
<div class="map-sec">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3429.9928933886617!2d76.69698527467604!3d30.718600186317108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fef769d840aab%3A0x67a4d0b4c32864d3!2sTB%20InfoTech!5e0!3m2!1sen!2sin!4v1721998353384!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

@endsection