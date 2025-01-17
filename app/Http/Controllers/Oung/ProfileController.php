<?php

namespace App\Http\Controllers\Oung;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        return $this->middleware(['auth']);
    }

    public function index()
    {
        $breadcrumbs = [
            'Oung' => route('oung.index'),
            'Profile' => route('oung.profile.index'),
        ];

        return view('oung.profile.index', ['breadcrumbs' => $breadcrumbs]);
    }
}
