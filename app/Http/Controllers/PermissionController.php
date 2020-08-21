<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index()
    {
        $pageTitle = 'Daftar Permission';
        $permission = Permission::get();

        $data['permission'] = $permission;
        $data['pageTitle'] = $pageTitle;
        return view('permission.index', $data);
    }

    public function create()
    {
        $pageTitle = 'Tambah Permission';

        $data['pageTitle'] = $pageTitle;
        return view('permission.create', $data);
    }

    public function store(Request $request)
    {
        $permission = Permission::create([
            'name' => $request->name,
        ]);

        return redirect()->route('permission.index');
    }

    public function view()
    {
    }

    public function edit($id)
    {
        $pageTitle = 'Ubah permission';
        $permission = Permission::find($id);
        // dd($permission);

        $data['permission'] = $permission;
        $data['pageTitle'] = $pageTitle;
        return view('permission.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $permission = Permission::find($id);
        $permission->update([
            'name' => $request->name,
        ]);

        return redirect()->route('permission.index');
    }

    public function delete($id)
    {
        $permission = Permission::find($id);
        $permission->delete();

        return redirect()->back();
    }
}
