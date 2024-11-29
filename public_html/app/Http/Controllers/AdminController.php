<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Reservation;
use App\Models\User;
use App\Models\Project;
use App\Models\Contact;
use Notification;
use App\Notifications\SendEmailNotification;

class AdminController extends Controller
{
    public function newproject()
    {
        return view('admin.add_project');
    }

    public function upload(Request $request)
    {
        $data=new project;
        $data->title=$request->title;
        $data->link=$request->youtube_link;

        $data->save();
        return redirect()->back()->with('message','Project has been created successfully!');
    }

    public function All_projects()
    {
        $data=project::orderBy('id', 'asc')->paginate(6);
         
        return view('admin.All_projects',compact('data'));
    }

    public function message()
    {
        $data=contact::orderBy('id', 'asc')->paginate(10);

        return view('admin.message',compact('data'));
    }

    public function addview()
    {
        return view('admin.add_reservation');
    }

    public function showreservation()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype==1)
            {
                $data=reservation::orderBy('id', 'asc')->paginate(6);

                return view('admin.showreservation',compact('data'));
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

    public function adduser()
    {
        return view('admin.adduser');
    }

    public function register(Request $request)
    {
        $data=new user;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone_number=$request->phone;
        $data->password=$request->password;

        $data->save();
        return redirect()->back();
    }

    public function approved($id)
    {
        $data=reservation::find($id);
        $data->status='Approved';
        $data->save();
        return redirect()->back();
    }

    public function rejected($id)
    {
        $data=reservation::find($id);
        $data->status='Rejected';
        $data->save();
        return redirect()->back();
    }

    public function emailview($id)
    {
        $data=reservation::find($id);

        return view('admin.email_view',compact('data'));
    }

    public function sendemail(Request $request,$id)
    {
        $data = reservation::find($id);
        $details=
        [
            'greeting' => $request->greeting,
            'body' => $request->body,
            'actiontext' => $request->actiontext,
            'actionurl' => $request->actionurl,
            'endpart' => $request->endpart
        ];

        Notification::send($data,new SendEmailNotification($details));

        return redirect()->back()->with('message','Email is sent successfully to {{($users->name)}}!');
    }

}
