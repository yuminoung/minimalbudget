<?php

namespace App\Http\Controllers\Budget;

use App\Http\Controllers\Controller;
use App\Model\Budget\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        return $this->middleware(['auth']);
    }

    public function index()
    {
        $breadcrumbs = [
            'Oung' => route('oung.index'),
            'Budget' => route('budget.index'),
            'Categories' => route('budget.categories.index')
        ];

        $incomes = auth()->user()->categories()->where('category_type', 'income')->get();
        $expenses = auth()->user()->categories()->where('category_type', 'expense')->get();

        return view('budget.categories.index', [
            'breadcrumbs' => $breadcrumbs,
            'incomes' => $incomes,
            'expenses' => $expenses,
        ]);
    }

    public function create()
    {
        $breadcrumbs = [
            'Oung' => route('oung.index'),
            'Budget' => route('budget.index'),
            'Categories' => route('budget.categories.index'),
            'Create' => route('budget.categories.create')
        ];
        return view('budget.categories.create', ['breadcrumbs' => $breadcrumbs]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'category_type' => ['required'],
            'category_name' => ['required'],
        ]);
        auth()->user()->categories()->create($attributes);
        return redirect()->route('budget.categories.index');
    }

    public function edit(Category $category)
    {
        $breadcrumbs = [
            'Oung' => route('oung.index'),
            'Budget' => route('budget.index'),
            'Categories' => route('budget.categories.index'),
            'Edit' => route('budget.categories.edit', $category)
        ];

        return view('budget.categories.edit', [
            'breadcrumbs' => $breadcrumbs,
            'category' => $category
        ]);
    }

    public function update(Category $category)
    {
    }
}
