<footer>
    <section class="footer-sec" style="background-image: url('{{ asset('frontend/img/fg.jpg') }}');">

        <div class="linarg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-3 pt-4 logo-footer">
                  <a href="{{ url('/') }}">
             <img src="{{ asset('frontend/img/logonew.png') }}" alt="Logo">
               </a>

                        <p>TBinfotech delivers innovative IT solutions, combining expertise in technology with tailored services to drive growth and efficiency for businesses.</p>
                        <div class="social-icons">
                            <a target="_blank" href="https://www.facebook.com/TBInfotech/"><i class="fa-brands fa-facebook"></i></a>
                            <a target="_blank" href="skype:tbinfotech?call"><i class="fa-brands fa-skype"></i></a>
                            <a target="_blank" href="https://www.linkedin.com/in/rajesh-thanoch-97706392"><i class="fa-brands fa-linkedin"></i></a>
                            <a target="_self" href="mailto:thanoch.rajesh@gmail.com"><i class="fa-solid fa-envelope"></i></a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 pt-4 fmenu">
                        <h4>Services</h4>
                            <div class="footer-b"></div>
                        <ul>
                            @foreach($homes as $home)
                            <li><a href="{{ $home['id'] }}">{{ $home['title'] }}</a></li>
                           <!--  <li><a href="#">Web Design</a></li>
                            <li><a href="#">Custom Web Development</a></li>
                            <li><a href="#">CRM Development</a></li>
                            <li><a href="#">E-commerce Development</a></li>
                            <li><a href="#">Support & Maintenance</a></li> -->
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-3 pt-4 fmenu">
                        <h4>Information links</h4>
                        <div class="footer-b"></div>
                        <ul>
                            <li><a href="{{ url('/about') }}">About US</a></li>
                            <li><a href="{{ url('/services') }}">Our Services</a></li>
                            <li><a href="{{ url('/work') }}">Our Work</a></li>
                            <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-3 pt-4 offices">
                        <h4>Office</h4>
                        <div class="footer-b"></div>
                        <p class="d-flex locations"><i class="fa-solid fa-location-dot"></i><span>Manchanda Tower, Plot No D133C, 1st Floor, Phase 7, Industrial Area, Sector 73, Mohali</span></p>
                        <p class="d-flex"><i class="fa-solid fa-envelope"></i><span>contact@tbinfotech.com</span></p>
                        <p class="d-flex"><i class="fa-solid fa-phone"></i><span>+91 9888021115</span></p>
                    </div>

                </div>
                
            </div>
            <div class="bottom-sec">
                <div class="container">
                    <h4>© Copyright - {{ date('Y') }}  |  Developed By <a target=_blank  href="https://tbinfotech.com/">TB Infotech </a>  |   All Rights Reserved </h4>
                </div>
            </div>
        </div>
    </div>
        </section>
   
</footer>