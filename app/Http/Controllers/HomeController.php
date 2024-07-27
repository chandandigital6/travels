<?php

namespace App\Http\Controllers;


use App\Models\About;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\ClientLogo;
use App\Models\Destination;
use App\Models\Packages;
use App\Models\Service;
use App\Models\State;
use App\Models\StateContent;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function index()
    {
        $banners =Banner::all();
        $abouts =About::all();
        $testimonials= Testimonial::all();
        $blogs =Blog::all();
        $packages=Packages::where('status',1)->get();
//        dd($packages);
        $services=Service::where('status',1)->get();
        $clientLogos = ClientLogo::all();
        $destinations=Destination::with('states')->get();
        return view('front_pages.index',compact('banners','abouts','testimonials','blogs','packages','services','clientLogos','destinations'));
    }

    public function about()
    {
        $abouts =About::all();
        return view('front_pages.about',compact('abouts'));
    }

    public function services()
    {
        $services=Service::where('status',1)->get();
        $testimonials= Testimonial::all();
        return view('front_pages.services',compact('services','testimonials'));
    }

    public function packages()
    {
        $packages=Packages::where('status',1)->get();
        return view('front_pages.packages',compact('packages'));
    }

    public function blog()
    {
        $blogs =Blog::all();
        return view('front_pages.blog',compact('blogs'));
    }

    public function contact()
    {
        return view('front_pages.contact');
    }

    public function destination()
    {
        $destinations=Destination::with('states')->get();
        return view('front_pages.destination',compact('destinations'));
    }


    public function show($title)
    {

        $state = State::where('title', $title)->first();

//        if (!$state) {
//            dd('State not found');
//        }

        $stateContents = StateContent::where('state_id', $state->id)->get();

//        dd($stateContents);

//        // You can also eager load the state relationship if needed
//        $stateContents = StateContent::with('states')->where('state_id', $state->id)->get();
//
//        dd($stateContents);
        $state = State::with('stateContents')
            ->where('title', $title)
            ->first();

//        dd($state);
        $destinations=Destination::with('states')->get();
        return view('front_pages.details',compact('destinations','stateContents','state'));
    }


    public function india()
    {
        $destinations = Destination::with('states')->where('name', 'india')->get();
//        dd($destinations);
        return view('front_pages.india',compact('destinations'));
    }

    public function tour()
    {
        return view('front_pages.tour');
    }

    public function booking()
    {
        return view('front_pages.booking');
    }

    public function gallery()

    {
        $clientLogos = ClientLogo::all();
        return view('front_pages.gallery',compact('clientLogos'));
    }

    public function guides()
    {
        return view('front_pages.guides');
    }

    public function testimonial()

    {
        $testimonials= Testimonial::all();
        return view('front_pages.testimonial',compact('testimonials'));
    }

    public function page404()
    {
        return view('front_pages.404');
    }

    public function login()
    {
        return view('front_pages.login');
    }

    public function register()
    {
        return view('front_pages.register');
    }

    public function myprofile()
    {
        return view('front_pages.myprofile');
    }

    public function inbox()
    {
        return view('front_pages.inbox');
    }

    public function notifications()
    {
        return view('front_pages.notifications');
    }

    public function accountsetting()
    {
        return view('front_pages.accountsetting');
    }

    public function kashmir()
    {
        return view('front_pages.kashmir');
    }

    public function rajasthan()
    {
        return view('front_pages.rajasthan');
    }



    public function legalnotice()
    {
        return view('front_pages.legalnotice');
    }

    public function privacypolicy()
    {
        return view('front_pages.privacypolicy');
    }

    public function termsconditon()
    {
        return view('front_pages.termsconditon');
    }

    public function cookiepolicy()
    {
        return view('front_pages.cookiepolicy');
    }

    public function thanks()
    {
        return view('front_pages.thanks');
    }


    public function showDestination($slug)
    {
        $destination = Destination::where('slug', $slug)->firstOrFail();
        return view('components.header', compact('destination'));
    }

}
