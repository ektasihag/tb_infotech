<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CompanyValues;
use App\Models\CustomerSatisfaction;
use App\Models\ChooseUs;
use App\Models\Home;
use App\Models\Menus;

class AboutController extends Controller
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

   public function index(){
    $companyValues = CompanyValues::first();
    $customerSatisfaction = CustomerSatisfaction::first();
     $chooseUs = ChooseUs::first();
      $homes = Home::all();
         $menus=Menus::all();
    return view('frontend.about', compact('companyValues','customerSatisfaction','chooseUs','homes','menus'));
   }
   public function create()
    {
        return view('frontend.create');
    }

}
