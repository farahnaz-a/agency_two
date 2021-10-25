<!-- =================about Section start===================== -->
<section id="about__part">
     
     <div class="container">

         <div class="row">
          <div class="col-lg-5 col-md-12" data-aos="zoom-in-right">
            <div class="about-img">
              <img src="{{ asset('uploads/abouts/')}}/{{ $abouts->image }}" alt="about.jpg">
              
            </div>
          </div>
           <div class="col-lg-7 col-md-12" data-aos="zoom-in-down">
            <div class="about-text">
              @php
              $title     = explode(" " , $abouts->title);
              $lastIndex    = array_pop($title);
                  $title    = implode(" ", $title);
              @endphp
              <h2>{{ $title }} <span>{{ $lastIndex }}</span></h2>
              <p>{!! $abouts->description !!}
                  </p>
              <h4>{{ $titles->social_title }}:</h4>
          <ul>
            @foreach ($socials as $item)
             <li><a href="{{ $item->social_link }}"> {!! $item->social_icon !!} </a></li>
            @endforeach
          </ul>
            </div>
           </div>
         </div>
     </div>
 </section>
<!-- =================about Section End===================== -->