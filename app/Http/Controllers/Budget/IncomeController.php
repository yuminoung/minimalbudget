<?php

namespace App\Http\Controllers\Budget;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function index()
    {
        $breadcrumbs = [
            'Oung' => route('oung.index'),
            'Budget' => route('budget.index'),
            'Income' => route('budget.income.index')
        ];
        return view('budget.income.index', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }
}
