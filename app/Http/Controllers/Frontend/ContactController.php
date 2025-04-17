<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Models\Contacts;
use App\Models\Home;
use App\Models\Menus;

class ContactController extends Controller
{

 public $footer = "";
   public $header = "";
  public function __construct(){
      $footer = $this->footer();
      $header = $this->header();
      // print_r($footer);exit;  
    }
    public function footer(){
      $homes = Home::all();
      return $homes;
    }
public function header(){
      $menus = Menus::all();
      return $menus;
    }

    public function index()
    {
         $homes = Home::all();
          $menus=Menus::all();
        return view('frontend.contact-us',compact('homes','menus'));
    }

    // Store contact form data and send an email
    public function ContactUsForm(Request $request)
    {
        // Form validation
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            

        ]);
   $data = $request->only(['first_name', 'last_name', 'email', 'subject', 'message']);

        if ($request->hasFile('banner_image')) {
        $file = $request->file('banner_image');
        $filename = time() . '-' . $file->getClientOriginalName();
        $file->storeAs('public/contact_images', $filename);
        $data['banner_image'] = $filename;
         
    }

    // Handle image upload
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = time() . '-' . $file->getClientOriginalName();
        $file->storeAs('public/contact_images', $filename);
        $data['image'] = $filename;
    }

        // Store data in the database
         
        // Send an email
          $contact = Contacts::create($data);

        try {
        
            Mail::send('emails.test', $data, function ($message) use ($data) {
                $message->to($data['email'])
                        ->subject($data['subject']);
            });

            // Success response
            return back()->with('success', 'We have received your message and would like to thank youqwert.');
        } catch (Exception $e) {
            // Error response
            return back()->with('error', 'Failed to send your message. Please try again later.');
        }
    }

    public function create(){

        return view('contact.create');
    }
}
