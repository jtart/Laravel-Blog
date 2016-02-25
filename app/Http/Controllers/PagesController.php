<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class PagesController extends Controller
{

   /**
     * Show the application homepage.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex() {

    	# process variable or params
    	# talk to model
    	# reieve from model
    	# compile or process model data if needed
    	# pass data back to correct view

        return view('pages.index');
    }

   /**
     * Show the application about page.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAbout() {
    	$fullName = 'Jordan Tart';
    	$emailAddress = 'hello@jordantart.com';
    	$data['fullName'] = $fullName;
    	$data['emailAddress'] = $emailAddress;

        return view('pages.about')->withData($data);
    }

   /**
     * Show the application contact page.
     *
     * @return \Illuminate\Http\Response
     */
    public function getContact() {
        return view('pages.contact');
    }
}
