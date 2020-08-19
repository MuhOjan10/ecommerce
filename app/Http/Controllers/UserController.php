<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $pageTitle = 'User';
        $user = User::get();

        $data['pageTitle'] = $pageTitle;
        $data['user'] = $user;
        return view('user.index', $data);
    }

    public function create()
    {

        return view('user.create');
    }

    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('user.index');
    }

    public function view($id)
    {
        $user = User::find($id);
        $pageTitle = 'User';
        $data['user'] = $user;
        $data['pageTitle'] = $pageTitle;
        return view('user.view', $data);
    }

    public function edit($id)
    {
        $user = User::find($id);
        $data['user'] = $user;
        return view('user.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('user.index');
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->back();
    }
}
