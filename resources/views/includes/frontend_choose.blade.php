
<!-- =================  Choose Section Start=================== -->
<section id="people_choose_part">
     <div class="container">
         <div class="row">
             <div class="col-lg-6">
                 <div class="why_choose" data-aos="zoom-in-right">
                  <h6>{{ $titles->choose_title }}</h6>
                  <h4>{{ $titles->choose_subtitle }}</h4>
                  <p>{{ $chooses->description }}</p>

                      <div class="main">
                          <div class="people__img"><img src="{{ asset('uploads/chooses')}}/{{ $chooses->image }}" alt="people.jpg"></div>
                          <div class="people__text">
                              <p> {{ $chooses->description_2 }}</p>
                          </div>
                      </div>
                  
                 </div>
             </div> 
             <div class="col-lg-6"  data-aos="fade-left">
                 <div class="main">
                     <div class="choose__card d-flex flex-column align-items-center justify-content-center">
                        <img class="w-25" src="{{ asset('uploads/chooses')}}/{{ $chooses->block_1_image }}" alt="image not found">
                        <h5>{{ $chooses->block_1_title }}</h5>
                     </div>
                     <div class="choose__card d-flex flex-column align-items-center justify-content-center choose__card--padding">
                        <img class="w-25" src="{{ asset('uploads/chooses')}}/{{ $chooses->block_2_image }}" alt="image not found">
                        <h5>{{ $chooses->block_2_title }}</h5>
                    </div>
                 </div>
                 <div class="main">
                    <div class="choose__card d-flex flex-column align-items-center justify-content-center">
                        <img class="w-25" src="{{ asset('uploads/chooses')}}/{{ $chooses->block_3_image }}" alt="image not found">
                        <h5>{{ $chooses->block_3_title }}</h5>
                    </div>
                    <div class="choose__card d-flex flex-column align-items-center justify-content-center choose__card--padding">
                        <img class="w-25" src="{{ asset('uploads/chooses')}}/{{ $chooses->block_4_image }}" alt="image not found">
                       <h5>{{ $chooses->block_4_title }}</h5>
                   </div>
                </div>
             </div>
         </div>
     </div>
   </section>
<!-- ================= Choose Section End===================== -->