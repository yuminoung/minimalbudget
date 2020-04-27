<?php

namespace App\Http\Controllers\Budget;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function __construct()
    {
        return $this->middleware(['auth']);
    }

    private function setupBreadcrumbs()
    {
        return $breadcrumbs = [
            'Oung' => route('oung.index'),
            'Budget' => route('budget.index'),
        ];
    }

    public function index()
    {
        $date = Carbon::now()->setTimezone('Australia/Victoria');
        $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        $breadcrumbs = [
            'Oung' => route('oung.index'),
            'Budget' => route('budget.index'),
            'Expenses' => route('budget.expenses.index')
        ];
        return view('budget.expenses.index', [
            'breadcrumbs' => $breadcrumbs,
            'date' => $date,
            'year' => $date->year,
            'month' => $date->month,
            'months' => $months
        ]);
    }

    public function create()
    {


        $breadcrumbs = $this->setupBreadcrumbs();
        $breadcrumbs['Expenses'] = route('budget.expenses.index');
        $breadcrumbs['Create'] = route('budget.expenses.create');



        return view('budget.expenses.create', [
            'breadcrumbs' => $breadcrumbs,
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'amount' => ['required'],
            'date' => ['required', 'date'],
            'note' => ['nullable'],
        ]);
        auth()->user()->expenses()->create($attributes);
    }
}
