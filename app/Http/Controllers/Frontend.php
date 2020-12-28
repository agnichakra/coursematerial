<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

/* must include */
use Mail;
class Frontend extends Controller
{
    function contact(Request $request) {

        $request->validate([
        'name' => 'required',
        'subject' => 'required',
        'email' => 'required|email',
        'mobile' => 'required|digits:10',
        'message' => 'required|min:8'
        
        
        ], [
        'message.min' => 'Your message should be at least 8 characters'
        
        
        ]) ;  
        
        $name = $request->name;
        $subject = $request->subject;
        $email = $request->email;
        $mobile = "91".$request->mobile;
        $message = $request->message;
        
        /* sms gateway integration */
        $curl = curl_init();
               
        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://rest-api.d7networks.com/secure/send",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS =>"{\n\t\"to\":\"{$mobile}\",\n\t\"content\":\"Hi {$name}, Welcome to cese , Our team will contact you as soon as possible..\\nFeana Design\\nhttps://cesc.com \",\n\t\"from\":\"Adwitiya Ghosh,Technophilix\",\n\t\"dlr\":\"yes\",\n\t\"dlr-method\":\"GET\", \n\t\"dlr-level\":\"2\", \n\t\"dlr-url\":\"https://technophilix.com\"\n}",
          CURLOPT_HTTPHEADER => array(
            "Content-Type: application/x-www-form-urlencoded",
            "Authorization: Write your own"
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);


        /* end of sms gateway integration*/


        $data['msg'] =$message;
        $data['name'] = $name;
        $data['mobile'] = $mobile;
        $data['subject'] =$subject;
        $data['email'] =$email;
        
        Mail::send('mail.contact', $data, function($message) {
          $message->to('agnichakra.1984@gmail.com')->subject('Mail form website');
          $message->from('technophilix2020@gmail.com','Website');
        });
        
        
        return redirect()->route('contactus')->with('success' , 'Thank you. Our team will contact your soon.')  ;
        
        
        
        
        
        
        
        
        }
    
}