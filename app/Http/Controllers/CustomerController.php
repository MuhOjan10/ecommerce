<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Customer;
use DB;

class CustomerController extends Controller
{
    public function index()
    {
        $pageTitle = 'Konsumen';
        $customer = Customer::get();
        // $customer->paginate(10);

        $data['pageTitle'] = $pageTitle;
        $data['customer'] = $customer;

        return view('customer.index', $data);
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $customer = new Customer;
            $customer->name = $request->name;
            $customer->username = $request->username;
            $customer->email = $request->email;
            $customer->address = $request->address;
            $customer->save();
            DB::commit();
        } catch (Exception $th) {
            //throw $th;
            DB::rollback();
        }

        return redirect()->route('customer.index');
    }

    public function view($id)
    {
        $pageTitle = 'Konsumen';
        $customer = Customer::where('id', $id)->first();
        // dd($customer);

        $data['customer'] = $customer;
        $data['pageTitle'] = $pageTitle;
        return view('customer.view', $data);
    }

    public function edit($id)
    {
        $customer = Customer::where('id', $id)->first();

        $data['customer'] = $customer;
        return view('customer.edit', $data);
    }

    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $customer = Customer::find($id);
            $customer->name = $request->name;
            $customer->username = $request->username;
            $customer->email = $request->email;
            $customer->address = $request->address;
            $customer->save();
            DB::commit();
        } catch (Exception $th) {
            //throw $th;
            DB::rollback();
        }

        return redirect()->route('customer.index');
    }

    public function delete($id)
    {
        DB::beginTransaction();
        try {
            $customer = Customer::find($id);
            $customer->delete();
            DB::commit();
        } catch (Exception $th) {
            //throw $th;
            DB::rollback();
        }

        return redirect()->back();
    }
}
