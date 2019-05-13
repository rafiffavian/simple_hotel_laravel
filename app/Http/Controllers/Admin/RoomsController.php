<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoomsController extends Controller
{
    public function index()
    {
        return view('admin.admin-table');
    }
    public function create()
    {
        return view('admin.admin-room-create');
    }
}
