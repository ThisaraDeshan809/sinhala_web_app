<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    public function index() {

        $latestFeedbacks = Feedback::latest()->take(10)->get();

        return view('Feedback.index',compact('latestFeedbacks'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'user_id' => 'integer',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $feedback = new Feedback();
        $feedback->name = $validatedData['name'];
        $feedback->user_id = Auth::user()->id;
        $feedback->email = $validatedData['email'];
        $feedback->subject = $validatedData['subject'];
        $feedback->message = $validatedData['message'];
        $feedback->save();

        return redirect()->back()->with('success', 'Thank you for your feedback!');
    }
}
