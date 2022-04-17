<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Investmentplan;
use App\Models\Faq;
use Illuminate\Support\Facades\Mail;
use App\Mail\Adminmail;
use App\Models\Sitesetting;

class VisitorController extends Controller
{
    //
    public function index()
    {
        # code...
        $inv_plans = Investmentplan::all();
        $faqs = Faq::all();
        $company_detail = Sitesetting::where('id', 1)->first();
        $data=[];
        $data['company_detail'] = $company_detail;
        $data['compd'] = $company_detail;
        $data['investmentplans'] = $inv_plans;
        $data['faqs'] = $faqs;
        $data['title']="Home";
        return view ("visitors.index", $data);
    }



    public function about()
    {
        # code...
    $data=[];
    $company_detail = Sitesetting::where('id', 1)->first();
    $data['compd'] = $company_detail;
    $data['title']="About Us";
        return view ('visitors.about', $data);
    }


    public function blog()
    {
        # code...
    $data=[];
    $company_detail = Sitesetting::where('id', 1)->first();
    $data['compd'] = $company_detail;
    $data['title']="Blog";
        return view ('visitors.blog' , $data);
    }


    public function terms()
    {
        # code...
    $data=[];
    $company_detail = Sitesetting::where('id', 1)->first();
    $data['compd'] = $company_detail;
    $data['title']="Terms & Condition";
        return view ('visitors.terms' , $data);
    }


    public function invest()
    {
        # code...
    $data=[];
    $company_detail = Sitesetting::where('id', 1)->first();
    $data['compd'] = $company_detail;
    $data['title']="About Us";
        return view ('visitors.invest', $data);
    }


    public function faq()
    {
        # code...
    $data=[];
    $company_detail = Sitesetting::where('id', 1)->first();
    $data['compd'] = $company_detail;
    $faqs = Faq::all();
    $data['faqs'] = $faqs;
    $data['title']="Faqs";
        return view ("visitors.faqs", $data);
    }


    public function contact()
    {
        # code...
    $data=[];
    $company_detail = Sitesetting::where('id', 1)->first();
    $data['compd'] = $company_detail;
    $data['title']="Contact Us";
        return view ("visitors.contact", $data);
    }

    public function postcontact(Request $request)
    {   # code...
        $name = $request->name;
        $email = $request->email;
        $message = $request->message;
        $domain = request()->getHost();
        $email = "topedgeglobalinvestment@gmail.com";
        $mailtitle = "contact message from $name";
    $emaildata=['data'=> $email,'email_body'=>$message,'email_header'=>$mailtitle];

    Mail::to($email)->send(new Adminmail($emaildata));

        $company_detail = Sitesetting::where('id', 1)->first();

    $data=[];
    $data['company_detail'] = $company_detail;
    $data['title']="About Us";
        return redirect()->route("contact")->with("success","message sent, we will respond to you as soon as we can");
    }



    public function assetsmanagement()
    {
        # code...
    $data=[];
    $company_detail = Sitesetting::where('id', 1)->first();
    $data['compd'] = $company_detail;
    $data['title']="Asset Management";
        return view ("visitors.assetsmanagement", $data);
    }



    public function testimony()
    {
        # code...
    $data=[];
    $company_detail = Sitesetting::where('id', 1)->first();
    $data['compd'] = $company_detail;
    $data['title']="Testimony";
        return view ("visitors.testimony", $data);
    }



    public function fiduciary()
    {
        # code...
    $data=[];
    $company_detail = Sitesetting::where('id', 1)->first();
    $data['compd'] = $company_detail;
    $data['title']="Fiduciary";
        return view ("visitors.fiduciary", $data);
    }


    public function howwearedif()
    {
        # code...
    $data=[];
    $company_detail = Sitesetting::where('id', 1)->first();
    $data['compd'] = $company_detail;
    $data['title']="How We Are Different";
        return view ("visitors.howwearedif", $data);
    }


    public function ourteam()
    {
        # code...
    $data=[];
    $company_detail = Sitesetting::where('id', 1)->first();
    $data['compd'] = $company_detail;
    $data['title']="Our Team";
        return view ("visitors.ourteam", $data);
    }

public function news()
    {
        # code...
    $data=[];
    $company_detail = Sitesetting::where('id', 1)->first();
    $data['compd'] = $company_detail;
    $data['title']="Our Team";
        return view ("visitors.news", $data);
    }
}
