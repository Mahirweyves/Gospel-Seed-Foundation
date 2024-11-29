<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Reservation;
use App\Models\Project;
use App\Models\Contact;

class HomeController extends Controller
{
    public function redirect() {
        if(Auth::id()) {
            
            if(Auth::user()->usertype=='0') 
            {
                return View('user.home')
                    ->with('projects', Project::take(3)->get());
            }

            else 
            {
                $users = User::count();
                $users = User::where('usertype','0')->count();
                $reservations = Reservation::count();
                $projects = Project::count();
                $contacts = Contact::count();

                return view('admin.home', compact('users','reservations','projects','contacts'));
                
            }
        }

        else {
            return redirect()->back();
        }

    }

    public function index()
    {   
        if(Auth::id())
        {
            return redirect('home');
        }
        else
        {
            return View('user.home')
                ->with('projects', Project::take(3)->get());
        }       
    }

    public function reservation(Request $request)
    {
        $data = new reservation; 
        $data->first_name=$request->first_name;  
        $data->last_name=$request->last_name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->start_date=$request->start;
        $data->end_date=$request->end_date;
        $data->comment=$request->comment;
        $data->status='In progress';

        if(Auth::id())
        {
            $data->user_id=Auth::user()->id;
        }
        $data->save();
        return redirect()->back()->with('message','Reservation request has been Successfuly sent! We will reach out to you within 2days.');
    }
    public function myreservation()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype==0)
            {
                $userid=Auth::user()->id;
                $reserve=reservation::where('user_id',$userid)->get();

                return view('user.my_reservation',compact('reserve'));
            }
            else
            {
                return redirect()->back();
            }
        }
        else
        {
            return redirect('login');
        }
    }

    public function cancel_reserve($id)
    {
        $data=reservation::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function about()
    {
        return view('user.pages.about');       
    }

    public function booking()
    {
        return view('user.pages.booking');       
    }

    public function projects()
    {
        $data = project::orderBy('id', 'asc')->paginate(9);
        return view('user.pages.projects',compact('data'));        
    }

    // public function latest_project()
    // {
    //     return View('user.home')
    //                 ->with('projects', Project::take(2)->get());
    // }

    public function contact()
    {
        return view('user.pages.contact');       
    }
}
