<?php

namespace App\Http\Controllers\Web\Admin;

use App\StallApplicant;
use App\StallDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
	
    public function index()
    {
        return view('department.Admin.dashboard');
    }
}
