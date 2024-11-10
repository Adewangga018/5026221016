<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeetController extends Controller
{

	public function hello(){
		return view('hello');
	}

    public function responsive(){
		return view('responsive');
	}

    public function style(){
		return view('style');
	}

    public function style1(){
		return view('style1');
	}

    public function form(){
		return view('form');
	}

    public function linktreeTask(){
		return view('linktreeTask');
	}

    public function testimoniTask(){
		return view('testimoniTask');
	}

    public function index(){
		return view('index');
	}

    public function help(){
		return view('help');
	}

    public function account(){
		return view('account');
	}

    public function contactUs(){
		return view('contactUs');
	}

    public function legalNotices(){
		return view('legalNotices');
	}
}
