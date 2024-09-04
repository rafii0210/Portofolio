<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Education;
use App\Models\Profile;
use App\Models\Skill;
use App\Models\experiences;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index(){
        $profile=Profile::first();
        return view('portof.profile', compact('profile'));
    }
    public function experience(){
        $experiences=Experiences::get();
        return view('portof.experiences', compact('experiences'));
    }
    public function education(){
        $educations=Education::get();
        return view('portof.education', compact('educations'));
    }
    public function skill(){
        $skills=Skill::get();
        return view('portof.skill',compact('skills'));
    }
}
