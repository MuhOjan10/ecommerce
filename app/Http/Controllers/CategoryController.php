<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use DB;

class CategoryController extends Controller
{
    public function index()
    {
        $pageTitle = 'Kategori Produk';
        $category = Category::get();

        $data['category'] = $category;
        $data['pageTitle'] = $pageTitle;
        return view('category.index', $data);
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $category = new Category;
            $category->code = $request->code;
            $category->name = $request->name;
            $category->description = $request->description;
            $category->save();
            DB::commit();
        } catch (Exception $th) {
            //throw $th;
            DB::rollback();
        }

        return redirect()->route('category.index');
    }

    public function view($id)
    {
        $pageTitle = 'Kategori Produk';
        $category = Category::where('id', $id)->first();

        $data['category'] = $category;
        $data['pageTitle'] = $pageTitle;
        return view('category.view', $data);
    }

    public function edit($id)
    {
        $category = Category::where('id', $id)->first();

        $data['category'] = $category;
        return view('category.edit', $data);
    }

    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $category = Category::find($id);
            $category->code = $request->code;
            $category->name = $request->name;
            $category->description = $request->description;
            $category->save();
            DB::commit();
        } catch (Exception $th) {
            //throw $th;
            DB::rollback();
        }

        return redirect()->route('category.index');
    }

    public function delete($id)
    {
        DB::beginTransaction();
        try {
            $category = Category::find($id);
            $category->delete();
            DB::commit();
        } catch (Exception $th) {
            //throw $th;
            DB::rollback();
        }

        return redirect()->back();
    }
}
