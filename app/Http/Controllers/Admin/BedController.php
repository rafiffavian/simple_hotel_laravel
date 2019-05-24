<?php

namespace App\Http\Controllers\Admin;

use App\Bed_type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BedController extends Controller
{
    public function index()
    {
        $bedtype = Bed_type::all();
        return view('admin.admin-bedtype-table', compact('bedtype'));
    }
    public function create()
    {
        return view('admin.admin-bedtype-create');
    }
    public function store(Request $request)
    {
        $request->validate([

            'nama_bed' => 'required'
        ]);

        $bedtype = new Bed_type;
        $bedtype->create($request->except('_token'));
        return redirect(route('admin.bedtype'));
    }
    public function edit($id)
    {
        $bedtypes = Bed_type::findOrFail($id);
        return view('admin.admin-bedtype-edit',[

                'mybedtype' => $bedtypes
        ]);
    }
}
