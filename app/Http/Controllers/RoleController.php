<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $pageTitle = 'Daftar Role';
        $role = Role::get();

        $data['role'] = $role;
        $data['pageTitle'] = $pageTitle;
        return view('role.index', $data);
    }

    public function create()
    {
        $pageTitle = 'Tambah Role';

        $data['pageTitle'] = $pageTitle;
        return view('role.create', $data);
    }

    public function store(Request $request)
    {
        $role = Role::create([
            'name' => $request->name,
        ]);

        return redirect()->route('role.index');
    }

    public function view()
    {
    }

    public function edit($id)
    {
        $pageTitle = 'Ubah Role';
        $role = Role::find($id);
        // dd($role);

        $data['role'] = $role;
        $data['pageTitle'] = $pageTitle;
        return view('role.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $role = Role::find($id);
        $role->update([
            'name' => $request->name,
        ]);

        return redirect()->route('role.index');
    }

    public function delete($id)
    {
        $role = Role::find($id);
        $role->delete();

        return redirect()->back();
    }
}
