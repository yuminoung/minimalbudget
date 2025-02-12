<?php

namespace App\Http\Controllers\Budget;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $breadcrumbs = [
            'Oung' => route('oung.index'),
            'Budget' => route('budget.index')
        ];
        return view('budget.index', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }
}
