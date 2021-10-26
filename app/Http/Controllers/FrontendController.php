<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Choose;
use App\Models\Client;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Social;
use App\Models\Testimonial;
use App\Models\TitleSetting;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
     protected $data = [];
    public function index()
    {
        $this->data['titles']       = TitleSetting::first();
        $this->data['banners']      = Banner::first();
        $this->data['abouts']       = About::first();
        $this->data['socials']      = Social::all();
        $this->data['services']     = Service::all();
        $this->data['chooses']      = Choose::first();
        $this->data['testimonials'] = Testimonial::all();
        $this->data['clients']      = Client::all();
        $this->data['settings']      = Setting::first();
        return view('frontend.index', $this->data);
    }
}
