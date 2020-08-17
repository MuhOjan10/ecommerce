<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class DashboardUserController extends Controller
{
    public function index()
    {
        $category = Category::get();
        $data['category'] = $category;
        return view('interface.dashboard.index', $data);
    }
}
