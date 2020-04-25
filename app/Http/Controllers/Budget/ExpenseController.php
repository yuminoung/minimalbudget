<?php

namespace App\Http\Controllers\Budget;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    private function setupBreadcrumbs()
    {
        return $breadcrumbs = [
            'Oung' => route('oung.index'),
            'Budget' => route('budget.index'),
        ];
    }

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

    public function create()
    {
        $breadcrumbs = $this->setupBreadcrumbs();
        $breadcrumbs['Expenses'] = route('budget.expenses.index');
        $breadcrumbs['Create'] = route('budget.expenses.create');

        return view('budget.expenses.create', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }
}
