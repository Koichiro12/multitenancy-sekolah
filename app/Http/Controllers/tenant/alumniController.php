<?php

namespace App\Http\Controllers\tenant;

use App\Http\Controllers\Controller;
use App\Models\tenant\tenantAlumni;
use Illuminate\Http\Request;

class alumniController extends Controller
{
    public function index()
    {
        $alumni = tenantAlumni::get();
        return view('tenant.page.alumni', compact('alumni'));
    }
}
