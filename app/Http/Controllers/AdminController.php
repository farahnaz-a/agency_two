<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
      

        for($i=0; $i<=6; $i++){

            $clientCount[]=Client::whereDate('created_at', Carbon::now()->subDays($i))->get()->count();
            $days[]=Carbon::today()->subDays($i)->format('d-m');
            
            $messageCount[]=Contact::whereDate('created_at', Carbon::now()->subDays($i))->get()->count();
            

        }
        return view('admin.dashboard.index', compact('clientCount','messageCount', 'days'));
    }
}
