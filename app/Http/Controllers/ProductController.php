<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;
use DB;

class ProductController extends Controller
{
    public function index()
    {
        $pageTitle = 'Konsumen';
        $product = Product::get();

        $data['pageTitle'] = $pageTitle;
        $data['product'] = $product;

        return view('product.index', $data);
    }

    public function create()
    {
        $categories = Category::pluck('name', 'id');
        $units = [
            'ons' => 'Ons',
            'gram' => 'Gram',
            'kg' => 'Kg',
            'ikat' => 'Ikat',
            'pcs' => 'Pcs',
        ];

        $data['categories'] = $categories;
        $data['units'] = $units;
        return view('product.create', $data);
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $product = new Product;
            $product->name = $request->name;
            $product->unit = $request->unit;
            $product->price = $request->price;
            $product->category_id = $request->category_id;
            $product->save();
            DB::commit();
        } catch (Exception $th) {
            //throw $th;
            DB::rollback();
        }

        return redirect()->route('product.index');
    }

    public function view($id)
    {
        $pageTitle = 'Konsumen';
        $product = Product::where('id', $id)->first();

        $data['product'] = $product;
        $data['pageTitle'] = $pageTitle;
        return view('product.view', $data);
    }

    public function edit($id)
    {
        $product = Product::where('id', $id)->first();
        $categories = Category::pluck('name', 'id');
        $units = [
            'ons' => 'Ons',
            'gram' => 'Gram',
            'kg' => 'Kg',
            'ikat' => 'Ikat',
            'pcs' => 'Pcs',
        ];

        $data['categories'] = $categories;
        $data['units'] = $units;
        $data['product'] = $product;
        return view('product.edit', $data);
    }

    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $product = Product::find($id);
            $product->name = $request->name;
            $product->unit = $request->unit;
            $product->price = $request->price;
            $product->category_id = $request->category_id;
            $product->save();
            DB::commit();
        } catch (Exception $th) {
            //throw $th;
            DB::rollback();
        }

        return redirect()->route('product.index');
    }

    public function delete($id)
    {
        DB::beginTransaction();
        try {
            $product = Product::find($id);
            $product->delete();
            DB::commit();
        } catch (Exception $th) {
            //throw $th;
            DB::rollback();
        }

        return redirect()->back();
    }
}
