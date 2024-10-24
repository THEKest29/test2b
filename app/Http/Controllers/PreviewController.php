<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\preview;

class PreviewController extends Controller
{
    public function index() {
        $preview = preview::where('id')->get();
        return view('index', compact('previews'));
    }
    public function show(Request $request) {
        $request->validate([
            'id' => 'required',
            'text' => 'required|integer|min:5',
            'spec' => 'required',
            'status' => 'required',
        ]);
        preview::Create([
            
        ]);
    }
}
