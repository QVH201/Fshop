<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'product_id' => 'required|exists:products,id',
            'sender_name' => 'required|string|max:255',
            'email' => 'required|email|max:255'
        ]);

        Report::create([
            'title' => $request->title,
            'content' => $request->content,
            'product_id' => $request->product_id,
            'sender_name' => $request->sender_name,
            'email' => $request->email,
            'user_id' => Auth::id(), // Must be logged in to track
            'status' => 'pending'
        ]);

        return back()->with('status', 'Report submitted successfully!');
    }
}
