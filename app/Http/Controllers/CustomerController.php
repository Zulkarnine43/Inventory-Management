<?php

namespace RainbowDigital\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use RainbowDigital\Customer;

class CustomerController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    //new customer form view
    public function index()
    {
    	return view('add_customer');
    }

    public function Store(Request $request)
    {
         
          $customer = new Customer();
        $customer->company = $request->company;
        $customer->name = $request->name;
        $customer->phone = $request->phone;
       
        $customer->save();
        
        return redirect()->back();
    
    }

    public function AllCustomer()
    {
        $customer=DB::table('customers')->get();
        return view('all_customer')->with('customer',$customer);
    }

    //view a single employee
    public function ViewCustomer($id)
    {
        $single=DB::table('customers')
                ->where('id',$id)
                ->first();
        return view('view_customer', compact('single'));     
    }

//delete a single customer
    public function DeleteCustomer($id)
    {
         Customer::find($id)->delete();
        return redirect()->back();         
    }

    public function EditCustomer($id)
    {
        $cus=DB::table('customers')->where('id',$id)->first();
        return view('edit_customer', compact('cus'));
    }

    public function UpdateCustomer(Request $request ,$id)
    {
        
      
        $customer = Customer::find($id);
         $customer->company = $request->company;
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->save();
        return redirect()->route('all.customer');
    }

}
