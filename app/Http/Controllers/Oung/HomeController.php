<?php

namespace App\Http\Controllers\Oung;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $breadcrumbs = [
            'Oung' => route('oung.index')
        ];
        return view(
            'oung.index',
            [
                'breadcrumbs' => $breadcrumbs
            ]
        );
    }
}
