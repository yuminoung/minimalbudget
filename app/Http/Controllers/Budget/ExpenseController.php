<?php

namespace App\Http\Controllers\Budget;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index()
    {
        $breadcrumbs = [
            'Oung' => route('oung.index'),
            'Budget' => route('budget.index'),
            'Expenses' => route('budget.expenses.index')
        ];
        return view('budget.expenses.index', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }
}
