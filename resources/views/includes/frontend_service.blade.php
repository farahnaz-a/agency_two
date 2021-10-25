

<!-- =================service Section Start=================== -->
<section id="service__part">
   <div class="service__overlay">
       <div class="container">
              <div class="title">
                <h6>{{ $titles->service_title }}</h6>
                <h4> {{ $titles->service_subtitle }}</h4>
              </div>
           <div class="row">
               @foreach ($services as $item)
               
               <div class="col-lg-4 col-md-6">
                  <div class="service"  data-aos="fade-right">
                   {{-- <i class="fas fa-mobile-alt service__mobile-icon"></i> --}}
                   <img class="service__mobile-icon" src="{{ asset('uploads/services/')}}/{{ $item->image }}" alt="service.png">
                      <h2>{{ $item->title }}</h2>
                  </div>
               </div>

               @endforeach          
           </div>
       </div>
   </div>
  </section>
<!-- =================service Section End===================== -->