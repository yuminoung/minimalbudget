<?php

namespace App\Http\Controllers\Budget;

use App\Http\Controllers\Controller;
use App\Model\Budget\Expense;
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

        $expenses = auth()->user()->expenses()
            ->whereMonth('date', '=', Carbon::now())
            ->whereYear('date', '=', Carbon::now())
            ->orderBy('date', 'desc')
            ->orderBy('created_at', 'desc')
            ->leftJoin('categories', 'expenses.category_id', '=', 'categories.id')
            ->select('expenses.*', 'categories.category_name')
            ->get()
            ->groupBy('date');

        $breadcrumbs = [
            'Oung' => route('oung.index'),
            'Budget' => route('budget.index'),
            'Expenses' => route('budget.expenses.index')
        ];
        return view('budget.expenses.index', [
            'breadcrumbs' => $breadcrumbs,
            'expenses' => $expenses,
            'date' => $date,
            'months' => $months
        ]);
    }

    public function create()
    {
        $breadcrumbs = $this->setupBreadcrumbs();
        $breadcrumbs['Expenses'] = route('budget.expenses.index');
        $breadcrumbs['Create'] = route('budget.expenses.create');
        $categories = auth()->user()->categories()->where('category_type', 'expense')->get();

        return view('budget.expenses.create', [
            'breadcrumbs' => $breadcrumbs,
            'categories' => $categories,
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'amount' => ['required'],
            'date' => ['required', 'date'],
            'note' => ['nullable'],
            'category_id' => ['required']
        ]);
        auth()->user()->expenses()->create($attributes);
    }

    public function edit(Expense $expense)
    {
        $breadcrumbs = [
            'Oung' => route('oung.index'),
            'Budget' => route('budget.index'),
            'Expenses' => route('budget.expenses.index'),
            'Edit' => route('budget.expenses.edit', $expense)
        ];
        return view('budget.expenses.edit', [
            'breadcrumbs' => $breadcrumbs,
            'expense' => $expense
        ]);
    }
}
