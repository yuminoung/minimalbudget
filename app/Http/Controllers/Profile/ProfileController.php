<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $breadcrumbs = [
            'Oung' => route('oung.index'),
            'Profile' => route('profile.index')
        ];

        return view('profile.index', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }
}
