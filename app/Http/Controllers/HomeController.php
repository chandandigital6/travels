<?php

namespace App\Http\Controllers;


use App\Models\About;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\ClientLogo;
use App\Models\Destination;
use App\Models\Packages;
use App\Models\Resort;
use App\Models\Seo;
use App\Models\Service;
use App\Models\State;
use App\Models\StateContent;
use App\Models\StateVideo;
use App\Models\Testimonial;
use App\Models\Video;
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
        $seos = Seo::where('page', 'index')->get();
        return view('front_pages.index',compact('banners','abouts','testimonials','blogs','packages','services','clientLogos','destinations','seos'));
    }

    public function about()
    {
        $abouts =About::all();
        $seos = Seo::where('page', 'about')->get();
        return view('front_pages.about',compact('abouts','seos'));
    }

    public function services()
    {
        $services=Service::where('status',1)->get();
        $testimonials= Testimonial::all();
        $seos = Seo::where('page', 'services')->get();
        return view('front_pages.services',compact('services','testimonials','seos'));
    }

    public function packages()
    {
        $packages=Packages::where('status',1)->get();
        $seos = Seo::where('page', 'packages')->get();
        return view('front_pages.packages',compact('packages','seos'));
    }

    public function blog()
    {
        $blogs =Blog::all();
        $seos = Seo::where('page', 'blog')->get();
        return view('front_pages.blog',compact('blogs','seos'));
    }

    public function contact()
    {
        $seos = Seo::where('page', 'contact')->get();
        return view('front_pages.contact',compact('seos'));
    }

    public function destination()
    {
        $destinations=Destination::with('states')->get();
        $seos = Seo::where('page', 'destination')->get();
        return view('front_pages.destination',compact('destinations','seos'));
    }


    public function show($title)
    {
        // Retrieve the state by its title
        $state = State::where('title', $title)->firstOrFail();

        // Retrieve state contents
        $stateContents = StateContent::where('state_id', $state->id)->get();

        // Retrieve the SEO entries for the state
        $seos = Seo::where('state_id', $state->id)->get();
        $stateVideo = StateVideo::where('state_id', $state->id)->get();
//      dd($seos);
        // Retrieve destinations with their associated states
        $destinations = Destination::with('states')->get();

        // Return the view with the retrieved data
        return view('front_pages.details', compact('destinations', 'stateContents', 'state', 'seos','stateVideo'));
    }




    public function showDestinationDetails($stateTitle, $destinationName)
    {
        $state = State::where('title', $stateTitle)->firstOrFail();
        $destination = Destination::where('name', $destinationName)->where('state_id', $state->id)->firstOrFail();

        // Pass the data to the view as needed
        return view('front_pages.destination_details', compact('state', 'destination'));
    }



    public function india()
    {
        $destinations = Destination::with('states')->where('name', 'india')->get();
//        dd($destinations);

        $seos = Seo::where('page', 'destination')->get();
        $videos=Video::where('title','India')->get();
        return view('front_pages.india',compact('destinations','seos','videos'));
    }


    public function national()
    {
//        $resortStates = Resort::with('resortStates')->where('name', 'national')->get();
//        dd($resortStates);
        $resortStates=Resort::with('resortStates')->where('name','national')->get();
        $seos = Seo::where('page', 'national')->get();

//        dd($videos);
        return view('front_pages.national', compact('resortStates', 'seos'));
    }

    public function international()
    {
//        $resortStates = Resort::with('resortStates')->where('name', 'national')->get();
//        dd($resortStates);
        $resortStates=Resort::with('resortStates')->where('name','international')->get();
        $seos = Seo::where('page', 'international')->get();
        return view('front_pages.international', compact('resortStates', 'seos'));
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
        $seos = Seo::where('page', 'gallery')->get();
        return view('front_pages.gallery',compact('clientLogos','seos'));
    }

    public function guides()
    {
        return view('front_pages.guides');
    }

    public function testimonial()

    {
        $testimonials= Testimonial::all();
        $seos = Seo::where('page', 'testimonial')->get();
        return view('front_pages.testimonial',compact('testimonials','seos'));
    }

    public function page404()
    {
        return view('front_pages.404');
    }

    public function login()
    {
        $seos = Seo::where('page', 'login')->get();
        return view('front_pages.login');
    }

    public function register()
    {
        $seos = Seo::where('page', 'register')->get();
        return view('front_pages.register',compact('seos'));
    }

    public function myprofile()
    {
        $seos = Seo::where('page', 'myprofile')->get();
        return view('front_pages.myprofile',compact('seos'));
    }

    public function inbox()
    {
        $seos = Seo::where('page', 'inbox')->get();
        return view('front_pages.inbox',compact('seos'));
    }

    public function notifications()
    {
        $seos = Seo::where('page', 'notifications')->get();
        return view('front_pages.notifications',compact('seos'));
    }

    public function accountsetting()
    {
        $seos = Seo::where('page', 'accountsetting')->get();
        return view('front_pages.accountsetting',compact('seos'));
    }

    public function kashmir()
    {
        $seos = Seo::where('page', 'kashmir')->get();
        return view('front_pages.kashmir',compact('seos'));
    }

    public function rajasthan()
    {
        return view('front_pages.rajasthan');
    }



    public function legalnotice()
    {
        $seos = Seo::where('page', 'legalnotice')->get();
        return view('front_pages.legalnotice',compact('seos'));
    }

    public function privacypolicy()
    {
        $seos = Seo::where('page', 'privacypolicy')->get();
        return view('front_pages.privacypolicy',compact('seos'));
    }

    public function termsconditon()
    {
        $seos = Seo::where('page', 'termsconditon')->get();
        return view('front_pages.termsconditon',compact('seos'));
    }

    public function cookiepolicy()
    {
        $seos = Seo::where('page', 'cookiepolicy')->get();

        return view('front_pages.cookiepolicy',compact('seos'));
    }

    public function thanks()
    {
        $seos = Seo::where('page', 'thanks')->get();
        return view('front_pages.thanks',compact('seos'));
    }

   public function blogdetails(Blog $blog)
{
//    dd($blog);
    $seos = Seo::where('page', 'blogdetails')->get();
    return view('front_pages.blogdetails',compact('seos','blog'));
}


}
