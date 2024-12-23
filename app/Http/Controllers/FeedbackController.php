<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::where('user_id', auth()->id())->get();
        return view('feed', compact('feedbacks'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'descript' => 'required|string|max:10000',
        ]);

        $models = new Feedback();
        $models->descript = $request->descript;
        $models->user_id = Auth::id();
        $models->save();
        
        session()->flash('success', 'Отзыв успешно создан.');
        return redirect()->route('feedbacks');
    }

    public function showAllFeedbacks()
    {
        $feedbacks = Feedback::all(); //все отзывы
        $feedbacks = Feedback::where('user_id', auth()->id())->get(); //только свои отзывы
        return view('feedbacks', compact('feedbacks'));
    }
}
