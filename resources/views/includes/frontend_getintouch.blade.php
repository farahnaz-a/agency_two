
<!-- =================getintouch Section Start===================== -->
<section id="getin__touch">

    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-xl-4 col-xxl-4" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <div class="ftr-lft">
                    <h1>Get In Touch</h1>
                    <ul>
                        <li><a href="#"><i class="fas fa-map-marker-alt"></i></a> 1234, Parkstreet Avenue, America.</li>
                        <li><a href="#"><i class="fas fa-envelope"></i></a> portflo@personalportfolio.com</li>
                        <li><a href="#"><i class="fas fa-globe"></i></a> www.portflopersonal.com</li>
                    </ul>
                    <h1>Follow Me</h1>
                    <div class="ftr-icon">
                        <a href="#"> <i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        <a href="#"><i class="fab fa-behance"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-xl-8 col-xxl-7" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <div class="ftr-msg">
                      @if (session('success'))
                         <div class="alert alert-success">{{ session('success') }}</div>
                      @endif
                    <h1 class="msg">Massage Me</h1> 
                    <form action="{{ route('contacts.store') }}" method="POST" >
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name">
                                    @error('name')
                                        <span class="text-danger"> {{ $message }} *</span>
                                    @enderror  
                            </div>
                            <div class="col-lg-6">
                                <input type="email" name="email" class="form-control" placeholder="Your E-mail">
                                    @error('email')
                                        <span class="text-danger"> {{ $message }} *</span>
                                    @enderror
                            </div>
                            <div class="col-lg-12">

                                <div class="newsletter">
                                    <textarea name="message" class="form-control" placeholder="Your Massage"></textarea>
                                    @error('message')
                                        <span class="text-danger"> {{ $message }} *</span>
                                    @enderror
                                    <div class="nsltr">
                                        {{-- <a href="#"><i class="fab fa-telegram-plane"></i> </a> --}}
                                    </div>
                                </div>
                            </div>
                            <button type="submit"><i class="fab fa-telegram-plane"></i> </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- =================getintouch Section End=================== -->
