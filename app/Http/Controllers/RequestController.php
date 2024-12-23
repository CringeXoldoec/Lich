<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request as ModelsRequest;
use Illuminate\Validation\Rule;
use App\Models\Request;
use Illuminate\Support\Facades\Auth;
class RequestController extends Controller
{

    public function store(ModelsRequest $request){
        $validated = $request->validate([
            'course' => 'required|string',
            'date' => 'required|string',
            'payment_metod' => ['required', Rule::in('card', 'cash') ],
        ]);

        $model = new Request();
        $model->course = $request->course;
        $model->date = $request->date;
        $model->payment_metod = $request->payment_metod;
        $model->user_id = Auth::id();
        $model->save();

        session()->flash('success', 'Ваша заявка успешно отправлена.');
        $hasExistingRequests = Request::where('user_id', Auth::id())->exists();

        return redirect()->back();
    }
}
