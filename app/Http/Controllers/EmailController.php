<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Panggil SendMail yang telah dibuat
use App\Mail\SendMail;
// Panggil support email dari Laravel
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function index()
    {
        $nama = "abdulatif";
        $email = "fasijardiq@gmail.com";
        $kirim = Mail::to($email)->send(new SendMail($nama));
    
        if($kirim){
            echo "Email telah dikirim";
        }
     
    }
    public function mail()
        {
        $to_name = 'abdulatif';
        $to_email = 'fasijardiq@gmail.com';
        $data = array('name'=>"$to_name", "body" => "pesan registrasi");
        
        Mail::send('mail', $data, function($message) use ($to_name, $to_email) {
        $message->to($to_email, $to_name)
        ->subject('Register Akun');
        $message->from('koperandalan@gmail.com','PERIKSA-IN');
    });
    
    return 'Email sent Successfully';
    }
} 