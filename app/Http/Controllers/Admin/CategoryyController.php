<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryyController extends Controller
{
    public function index()
    {
        return view('admin.admin-category-table');
    }

    public function create()
    {
        return view('admin.admin-category-create');
    }
}
