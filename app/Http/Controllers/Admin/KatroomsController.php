<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kategori_room;


class KatroomsController extends Controller
{
    public function index()
    {   
        $katroom = Kategori_room::all();
        return view('admin.admin-katroom-table',compact('katroom'));
    }
    public function create()
    {
        return view('admin.admin-katroom-create');
    }
    public function store(Request $request)
    {
        $request->validate([

            'nama_kategori' => 'required'
        ]);

        $katrom = new Kategori_room;
        $katrom->create($request->except('_token'));
        return redirect(route('admin.katrooms'));
    }
    public function edit($id)
    {
        $katrooms= Kategori_room::findOrFail($id);
        return view('admin.admin-katroom-edit',[

            'mykatroom' => $katrooms
        ]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kategori' => 'required'
        ]);
        $katroomm = Kategori_room::findOrFail($id);
        $katroomm->fill($request->except(['token','_method']))->save();
        return redirect(route('admin.katrooms'));
    }
    public function delete($id)
    {
        $apus = Kategori_room::findOrFail($id);
        $apus->delete();
        return redirect(route('admin.katrooms'));
    }
}
