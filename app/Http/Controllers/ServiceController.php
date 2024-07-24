<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceRequest;

use App\Models\Seo;
use App\Models\Service;
use App\Models\ServiceBefore;
use App\Models\ServiceChoose;
use App\Models\ServiceGallery;
use App\Models\ServiceHeader;
use App\Models\ServiceVideo;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
        $service = Service::query();

        if (!empty($keyword)) {
            $service->where('title', 'like', "%$keyword%");
        }
        $serviceData = $service->paginate(5);

        return view('service.index',compact('serviceData'));
    }

    public function create(){
        return view('service.create');
    }

    public function store(ServiceRequest $request){
//        dd($request);
        $validatedData = $request->validated();

        // Handle image uploads
        $imageFields = ['image', 'service_image',];

        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                $imagePath = $request->file($field)->store('public/service');
                // Save the image path without 'public/' prefix
                $validatedData[$field] = str_replace('public/', '', $imagePath);
            }
        }

        // Create the About model instance with the validated data
        Service::create($validatedData);
        return redirect()->route('service.index')->with('success', 'Service  created successfully.');
    }

    public function edit(Service $service){

        return view('service.edit',compact('service'));
    }

    public function update(ServiceRequest $request, Service $service)
    {
        $validatedData = $request->validated();

        // Handle image uploads
        $imageFields = ['image', 'service_image'];

        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                $imagePath = $request->file($field)->store('public/service');
                // Save the image path without 'public/' prefix
                $validatedData[$field] = str_replace('public/', '', $imagePath);
            }
        }

        $service->update($validatedData);

        return redirect()->route('service.index')->with('success', 'Service item successfully updated');
    }


    public function delete(Service $service){
        $service->delete();
        return redirect()->route('service.index')->with('error','Successfully  service items deleted');

    }
    public function duplicate(Service $service){
        $productDuplicate=$service->replicate();
        $productDuplicate->save();
        return redirect()->back();
    }


    public function show($title){
//          dd($service);
//        $logos=ClientLogo::all();
        $service = Service::where('title', $title)->first();

        $services=Service::where('status' ,1)->get();
        $serviceHeader = ServiceHeader::where('service_id', $service->id)->get();
        $serviceBefore = ServiceBefore::where('service_id', $service->id)->get();
//        dd($serviceBefore);
        $serviceGallery = ServiceGallery::where('service_id', $service->id)
         ->where('status', '1')
            ->get();
//     dd($serviceGallery);
        $serviceVideo= ServiceVideo::where('service_id', $service->id)
          ->where('status', '1')
            ->get();
        $serviceChooseUs=ServiceChoose::where('service_id', $service->id)
           ->where('status', '1')
            ->get();
//        dd($chooseUs);
        $testimonials=Testimonial::all();
        $seos= Seo::where('service_id', $service->id)->get();
        return view('front_end.servicesDetail',compact('service','serviceGallery','serviceChooseUs','services','serviceVideo','seos','testimonials','serviceHeader','serviceBefore'));
    }

}
