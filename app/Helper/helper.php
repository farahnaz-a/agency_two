<?php

function getColors(){
    return \App\Models\Color::first();
};
function getBannerImage(){
    return \App\Models\Banner::first();
}
function generalSettings(){
    return \App\Models\Setting::first();
}
function totalMessages(){
    return \App\Models\Contact::all();
}
function totalServices(){
    return \App\Models\Service::all();
}
function totalClients(){
    return \App\Models\Client::all();
}
function totalTestimonials(){
    return \App\Models\Testimonial::all();
}
