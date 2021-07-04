<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function form_registrasi()
    {
        return view('form_registrasi');
    }

    public function data_activity()
    {
        return view('data_activity');
    }

    public function data_activity_detail()
    {
        return view('data_activity_detail');
    }

    public function data_activity_edit()
    {
        return view('data_activity_edit');
    }
}
