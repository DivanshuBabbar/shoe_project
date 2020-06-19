<?php

namespace App\Http\Controllers;

use Mail;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index()
    {
    	return view('/welcome');
    } 

    public function about()
    {
        return view('/about');
    } 

    public function blog()
    {
    	return view('/blog');
    }

    public function basic_profile()
    {
    	return view('/basic_profile');
    }

    public function key_man()
    {
        return view('/key_man');
    }

    public function contact()
    {
        return view('/contact');
    }

    public function footwear_industry()
    {
        return view('/footwear_industry');
    }

    public function shoe_laces()
    {
        return view('/shoe_laces');
    }

    public function tapes()
    {
        return view('/tapes');
    }

    public function medical_equipment()
    {
        return view('/medical_equipment');
    }

    public function elastic_item()
    {
        return view('/elastic_item');
    }

    public function cords()
    {
        return view('/cords');
    } 

    public function mail(Request $request)
    {
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $message = $request->input('message');
        $size = $request->input('size');
        $usage = $request->input('usage');
        $quantity = $request->input('quantity');
        $article_no = $request->input('article_no');

        $data = array('fname'=>$fname,'email'=>$email,'lname'=>$lname,'subject'=>$subject,'message'=>$message,'article_no'=>$article_no,'usage'=>$usage,'size'=>$size,'quantity'=>$quantity);
       
      try {
                Mail::send(['html'=>'mail'], $data, function($message) use ($data) {

                    $message->to('enterprisesharsh.84@gmail.com', 'mail')->subject
                        ($data['subject']);
                    $message->from($data['email'],'Client');
                });
            
            } catch (Exception $e) {
                echo 'Exception: ', $e->getMessage(), PHP_EOL;
            }
          
        
        return response()->json(['msg'=> 'Link Sent Succesfully.'], 200);  
    }
}
