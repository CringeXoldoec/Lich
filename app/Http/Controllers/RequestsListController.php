<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request as ModelsRequest;
use App\Models\Request;

class RequestsListController extends Controller
{
    public function index()
    {
        $requests = Request::where('user_id', auth()->id())
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('list', compact('requests'));
    }
}
