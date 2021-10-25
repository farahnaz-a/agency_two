<!-- =================banner Section Start=================== -->
<section id="banner__part">
  <div class="banner__overlay">
      <div class="container">
         <div class="row">
             <div class="col-lg-8">
                <h6 data-aos="fade-down-left">{{ $banners->title }}</h6>
                    @php
                    $subtitle     = explode(" " , $banners->subtitle);
                    $lastIndex    = array_pop($subtitle);
                        $title    = implode(" ", $subtitle);
                    @endphp
                <h1 data-aos="zoom-in"> {{ $title }} <span class="service__color">{{ $lastIndex }}</span></h1>
                <p class="mt-30 pb-30" data-aos="fade-right"> {{ $banners->short_description }}</p>
                    <div class="d-flex align-item-center justify-content-lg-start justify-content-center banner_button" data-aos="zoom-in-up">
                        <a class="after btn" href="{{ $banners->button_url }}"> {{ $banners->button_text }} </a>
                        <a  id="play-video"  class=" ml-10 video-play-button venobox play__responsive" data-autoplay="true" data-vbtype="video" href="{{ $banners->video_url }}">
                        <span></span>
                        </a>
                    </div>
             </div>
         </div>
      </div>
  </div>
</section>
<!-- =================banner Section End===================== -->