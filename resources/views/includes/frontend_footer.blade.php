
<!-- =================footer Section Start=================== -->
<footer>
    <div class="container">
        <div class="row" data-aos="fade-up"
        data-aos-anchor-placement="center-bottom">
            <div class="col-lg-4"><div class="footer__logo">
                <img src=" {{ asset('uploads/settings') }}/{{ $settings->logo }}" alt="logo.png">
     
                   <div class="footer__icon mt-35">
                    @foreach ($socials as $item)
                    <a href="{{ $item->social_link }}"> {!! $item->social_icon !!} </a> 
                    @endforeach
                        {{-- <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a> --}}
                   </div>
     
            </div></div>
            <div class="col-lg-4 text-light"><div class="footer__about_us">
                @php
                $title     = explode(" " , $abouts->title);
                $lastIndex    = array_pop($title);
                $title    = implode(" ", $title);
            @endphp
            <h4>{{ $title }} <span>{{ $lastIndex }}</span></h4>
            <p>{!! $abouts->description !!}</p>
            </div></div>
            <div class="col-lg-4 col-xl-4 col-xxl-4">
                <div class="ftr-lft">
                    <h1>Contact <span>us  </span></h1>
                    <ul>
                        <li><a href="#"><i class="fas fa-map-marker-alt"></i></a> {{ $settings->address }}</li>
                        <li><a href="#"><i class="fas fa-envelope"></i></a> {{ $settings->email }}</li>
                        <li><a href="#"><i class="fas fa-phone"></i></a> {{ $settings->phone }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- =================footer Section End===================== -->




    <!-- JS here -->
    <script src="{{ asset('frontend_assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{ asset('frontend_assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{ asset('frontend_assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('frontend_assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('frontend_assets/js/aos.js')}}"></script>
    <script src="{{ asset('frontend_assets/js/slick.min.js')}}"></script>
    <script src="{{ asset('frontend_assets/js/venobox.min.js')}}"></script>
    <script src="{{ asset('frontend_assets/js/script.js')}}"></script>
</body>

</html>
