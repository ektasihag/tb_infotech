<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class TestEmailController extends Controller
{
    public function sendTestEmail(){
        $data = ['name' => 'Recipient'];
        // print_r($data);exit;
       try {
      
            Mail::send('emails.test', $data, function ($message) {
                $message->to('ektasihag07@gmail.com')
                        ->subject('Test Email with View');
            });
            return 'Test email sent!';
        } catch (Exception $e) {
         
            return 'Failed to send test email. Error: ' . $e->getMessage();
        }
    }
}
