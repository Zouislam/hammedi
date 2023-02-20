<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function index()
    {
        $certificates = Certificate::all();

        return view('certificates.index',compact('certificates'));
    }
    
    public function search(Request $request)
    {
        $certificates = Certificate::where('name', 'LIKE', '%'.$request->get('name').'%')->get();
        
        return view('certificates.search', compact('certificates'));
    }
    
    public function create()
    {
        return view('certificates.create');
    }
    
    public function store(Request $request)
    {
        $certificate = new Certificate();
        $certificate->name = $request->get('name');
        $certificate->certificate_image = $request->file('certificate_image')->store('public/certificates');
        $certificate->save();
        
        return redirect()->route('certificates.index')->with('success', 'Certificate added successfully');
    }
}