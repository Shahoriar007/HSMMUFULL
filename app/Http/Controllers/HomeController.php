<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use App\Models\Logo;
use App\Models\Navbar;
use App\Models\Notice;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Socialmedia;
use App\Models\Teacher;
use App\Models\Teacherapplications;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
     
        $socialMedia = Socialmedia::all();
        $slider = Slider::all(); 
        $notices = Notice::all();
        $totalTeachers = Teacher::all();
        $totalStudents = User::all();
        return view('welcome',compact('slider','notices','totalTeachers','totalStudents'));
    }
}
