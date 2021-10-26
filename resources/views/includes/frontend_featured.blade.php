
<!--=================Featured Section Start================-->

<section id="featured_section">
        <div class="container text-center">
            <div class="section_title pb-50 text-center">
          
                <h2>{{ $titles->client_title }}</h2>
            </div>
            <div class="row featured_slider align-items-center">

                @foreach ($clients as $item)
                    
                <div class="col-lg-3">
                    <a href="{{ $item->clients_url }}" class="clients__item">
                        <img src="{{ asset('uploads/clients') }}/{{ $item->clients_logo }}" class="img-fluid" alt="not found">
                    </a>
                </div>

                @endforeach
            </div>
        </div>
    </section>

    <!--=================Featured Section End==================-->