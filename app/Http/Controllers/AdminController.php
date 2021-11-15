<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Contact;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
    // List all users 
    public function indexUser(){

        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    // create new user 
    public function createUser(){
        return view('admin.user.create');
    }

    // store user 
    public function storeUser(Request $request){
        $request->validate([
            'name' => 'required', 
            'email' => 'required|unique:users', 
            'password' => 'required', 
            'confirm_password' => 'required|same:password',
        ]); 
        
        $user = New User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();
        return redirect('admin/list-user')->with('success', "User Create Successfully");
    }

    public function deleteUser(Request $request){
        User::find($request->id)->delete();
        return back()->with('success', 'Deleted Successfully');

    }
}
