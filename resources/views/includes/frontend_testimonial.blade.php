
<!-- =================testimonial Section Start=================== -->
<section id="testimonial__section"> 
      <div class="testimonial_overlay">
          <div class="container">
             <div class="row">
                <div class="title">
                    <h6>{{ $titles->testimonial_title }}</h6>
                    <h4>{{ $titles->testimonial_subtitle }}</h4>
                  </div>
                <div class="col-lg-12">
                    <div class="testi__details__slider">
                         
                        @foreach ($testimonials as $item)
                        <div>
                           <div class="testi__details"  data-aos="flip-left">
                              <div class="testi__img"><img src="{{ asset('uploads/testimonials') }}/{{ $item->image }}" alt="clinte1.jpg"></div>
                              <h4>{{ $item->name }}</h4>
                              <h6>{{ $item->designation }}</h6>
                              <p> {{ $item->message }} </p>
                                    
                           </div>
                        </div>
                           
                        @endforeach
                    </div>
                </div>
             </div>
          </div>
      </div>
</section>
<!-- ================= testimonial Section End===================== -->