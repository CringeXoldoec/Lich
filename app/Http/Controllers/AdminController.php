<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Request as ModelsRequest;

class AdminController extends Controller
{
    public function index(){
        return view('admin');
    }
}
