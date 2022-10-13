<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;//обязат
use App\Mail\newMail;

class mailController extends Controller
{
    public function send(){
        Mail::send(new newMail());
    }

    public function email(){
        return view('email');
    }

}

    // public function send(){
    //     Mail::send(['text' => 'mail'], ['name', 'Web dev blog'], function($message){
    //         $message->to('merzhankuralay@gmail.com', 'Salem alem')->subject('Test email');
    //         $message->from('merzhankuralay@gmail.com', 'Alem salem');
    //     });   
