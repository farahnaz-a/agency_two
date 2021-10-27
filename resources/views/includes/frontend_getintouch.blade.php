<!-- =================getintouch Section Start===================== -->
<section id="getin__touch">

    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-xl-4 col-xxl-4" data-aos="fade-right" data-aos-offset="300"
                data-aos-easing="ease-in-sine">
                <div class="ftr-lft">
                    <h1> {{ $titles->getInTouch_title }}</h1>
                    <ul>
                        <li><a href="#"><i class="fas fa-map-marker-alt"></i></a> {{ $settings->address }}</li>
                        <li><a href="#"><i class="fas fa-envelope"></i></a> {{ $settings->email }}</li>
                        <li><a href="#"><i class="fas fa-phone"></i></a> {{ $settings->phone }}</li>
                    </ul>
                    <h1>Follow Us</h1>
                    <div class="ftr-icon">


                        @foreach ($socials as $item)
                            <a href="{{ $item->social_link }}"> {!! $item->social_icon !!} </a>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-xl-8 col-xxl-7" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                data-aos-duration="2000">
                <div class="ftr-msg">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <h1 class="msg">Massage Us</h1>
                    <form action="{{ route('contacts.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                @error('name')
                                    <span class="text-danger"> {{ $message }} *</span>
                                @enderror
                                <input type="text" name="name" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="col-lg-6">
                                @error('email')
                                    <span class="text-danger"> {{ $message }} *</span>
                                @enderror
                                <input type="email" name="email" class="form-control" placeholder="Your E-mail">
                            </div>
                            <div class="col-lg-12">

                                <div class="newsletter">
                                    @error('message')
                                        <span class="text-danger"> {{ $message }} *</span>
                                    @enderror
                                    <textarea name="message" class="form-control"
                                        placeholder="Your Massage"></textarea>
                                    
                                    <button class="submit-btn py-2" type="submit"> Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- =================getintouch Section End=================== -->
