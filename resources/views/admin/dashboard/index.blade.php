@extends('layouts.dashboard')
@section('dashboardIndex')
active
@endsection
@section('content')
<section class="main-section py-5" id="main">
    <div class="row">
      <div class="col-12">
        <h2 class="dash-ad-title m-0 mb-3">Admin Dashboard |</h2>
      </div>
    </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-sm-6 col-12">
            <div class="card shadow">
                <div class="card-header d-flex py-4">
                    <div>
                        <h2 class="font-weight-bolder m-0">{{ count(totalMessages()) }}</h2>
                        <p class="card-text">Total Messages</p>
                    </div>
                    <div class="avatar bg-light-primary">
                        <div class="avatar-content">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers font-medium-5" cursorshover="true"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
          <div class="card shadow">
                <div class="card-header d-flex py-4">
                    <div>
                        <h2 class="font-weight-bolder m-0">{{ count(totalServices()) }}</h2>
                        <p class="card-text">Total Services</p>
                    </div>
                    <div class="avatar bg-light-primary">
                        <div class="avatar-content">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers font-medium-5" cursorshover="true"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
          <div class="card shadow">
                <div class="card-header d-flex py-4">
                    <div>
                        <h2 class="font-weight-bolder m-0">{{ count(totalClients()) }}</h2>
                        <p class="card-text">Total Clients</p>
                    </div>
                    <div class="avatar bg-light-primary">
                        <div class="avatar-content">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers font-medium-5" cursorshover="true"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
          <div class="card shadow">
                <div class="card-header d-flex py-4">
                    <div>
                        <h2 class="font-weight-bolder m-0">{{ count(totalTestimonials()) }}</h2>
                        <p class="card-text">Total Testimonials</p>
                    </div>
                    <div class="avatar bg-light-primary">
                        <div class="avatar-content">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers font-medium-5" cursorshover="true"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
    <div id="chart">

    </div>
  </section>
    
@endsection
@section('js')
<script>
          
          var options = {
          series: [{
            name: "Desktops",
            data: [10, 41, 35, 51, 49, 62, 69, 91, 148]
        }],
          chart: {
          height: 350,
          type: 'line',
          zoom: {
            enabled: false
          }
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'straight'
        },
        title: {
          text: 'Product Trends by Month',
          align: 'left'
        },
        grid: {
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.5
          },
        },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
</script>
    
@endsection