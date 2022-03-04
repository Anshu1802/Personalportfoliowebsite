<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modelpage;
use Crypt;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Facades\Mail;


class controllerpage extends Controller
{
    

    public function ansh()
    {
        return view('welcome');
    }
    public function contact()
    {
        return view('contact');
    }

    public function hireme()                                        
    {
        return view('Hireme');
    }

    public function submit(Request $ansh)
    {
        $registerpage=new Modelpage;
        $registerpage->email=$ansh['email'];
        $registerpage->name=$ansh['name'];
        $registerpage->company=$ansh['company'];
        $registerpage->contact=$ansh['contact'];
        $registerpage->message=$ansh['message'];        
        $registerpage->save();


        $data = [
            'names' => $ansh['name'],
            'emails' => $ansh['email'],
            'contacts'=>$ansh['contact'],
            'companys' => $ansh['company'],
            'messages' => $ansh['message'],

            
    
            
        ];


       
        
        $userHeading= "Thank you for your Gem time hope you will always connect with us ";
        $user['to'] = $ansh['email'];                    //variable $USER
       Mail::send('mailtemplate' , $data, function($message) use ($user, $userHeading) {
       $message->to($user['to']);
       $message->subject($userHeading);
        });

        $internalHeading = "New Job Alert! " ;
        Mail::send('mailtemplate' , $data, function($message) use ( $internalHeading) {
        $message->to('anshkevadiyaextraemail@gmail.com');
         $message->subject($internalHeading);
          });




        return view('/welcome');





}
}