<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Service;
use App\Models\Social;
use App\Models\TitleSetting;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
     protected $data = [];
    public function index()
    {
        $this->data['titles']   = TitleSetting::first();
        $this->data['banners']  = Banner::first();
        $this->data['abouts']   = About::first();
        $this->data['socials']   = Social::all();
        $this->data['services']   = Service::all();
        return view('frontend.index', $this->data);
    }
}
