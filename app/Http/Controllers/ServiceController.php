<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('welcome', compact('services'));
    }
    
    public function search(Request $request)
    {
        // Implement search logic
    }
    
    public function show(Service $service)
    {
        return view('services.show', compact('service'));
    }
}