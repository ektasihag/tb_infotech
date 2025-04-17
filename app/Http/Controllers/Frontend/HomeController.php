<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Highlights;
use App\Models\TeamStats; 
use App\Models\HomeTechnologyLogo; 
use App\Models\HomeFreeConsultation;
use App\Models\HomeWhoAre;
use App\Models\Menus;
class HomeController extends Controller
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
   	  $homes = Home::all();
   	  $highlights = Highlights::all(); // Fetch all highlights
   	  $team_stats =TeamStats::all(); // Fetch all team stats
      $home_technology_logo =HomeTechnologyLogo::all(); // Fetch all team stats
      $home_free_consultations=HomeFreeConsultation::all();
       $home_who_are=HomeWhoAre::all();
      $menus=Menus::all();
       return view('frontend.index', compact('homes','highlights','team_stats','home_technology_logo','home_free_consultations','home_who_are','menus'));
   }

   public function create()
    {
        return view('frontend.create');
    }

  
}
