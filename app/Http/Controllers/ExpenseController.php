<?php

namespace RainbowDigital\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ExpenseController extends Controller
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

    public function AddExpense()
    {
    	return view('add_expense');
    }

    public function InserExpense(Request $request)
    {
    	$data=array();
    	$data['details']=$request->details;
    	$data['amount']=$request->amount;
    	$data['date']=$request->date;
    	$data['month']=$request->month;
    	$data['year']=$request->year;

    	$exp=DB::table('expenses')->insert($data);
    	if ($exp) {
                 $notification=array(
                 'messege'=>'Successfully Expense Inserted ',
                 'alert-type'=>'success'
                  );
                return Redirect()->route('today.expense')->with($notification);                      
             }else{
              $notification=array(
                 'messege'=>'error ',
                 'alert-type'=>'success'
                  );
                 return Redirect()->back()->with($notification);
             } 
             return Redirect()->route('today.expense');    
    }

    public function TodayExpense()
    {
    	$date= date("d/m/y");
    	$today=DB::table('expenses')->where('date',$date)->get();
    	return view('today_expense', compact('today'));
    }

    public function EditTodayExpense($id)
    {
    	$tdy=DB::table('expenses')->where('id',$id)->first();
    	return view('edit_today_expense', compact('tdy'));
    }

    public function UpdateExpense(Request $request,$id)
    {
    	$data=array();
    	$data['details']=$request->details;
    	$data['amount']=$request->amount;
    	$data['date']=$request->date;
    	$data['month']=$request->month;
    	$data['year']=$request->year;

    	$exp=DB::table('expenses')->where('id',$id)->update($data);
    	if ($exp) {
                 $notification=array(
                 'messege'=>'Successfully Expense updated ',
                 'alert-type'=>'success'
                  );
                return Redirect()->route('today.expense')->with($notification);                      
             }else{
              $notification=array(
                 'messege'=>'error ',
                 'alert-type'=>'success'
                  );
                 return Redirect()->back()->with($notification);
             }

             return Redirect()->back();  
    }

    public function MonthlyExpense()
    {
        $month= date("F");
        $expense=DB::table('expenses')->where('month',$month)->get();
        return view('monthly_expense', compact('expense'));
    }

    public function YearlyExpense()
    {
         $year=date("Y");
         $year=DB::table('expenses')->where('year',$year)->get();
         return view('yearly_expense', compact('year'));
    }

    public function JanuaryExpense()
    {
        $month="January";
        $expense=DB::table('expenses')->where('month',$month)->get();
        return view('monthly_expense', compact('expense'));
    }

     public function FebruaryExpense()
    {
         $month="February";
         $expense=DB::table('expenses')->where('month',$month)->get();
         return view('monthly_expense', compact('expense'));
    }

     public function MarchExpense()
    {
         $month="March";
         $expense=DB::table('expenses')->where('month',$month)->get();
         return view('monthly_expense', compact('expense'));
    }
     public function AprilExpense()
    {
         $month="April";
         $expense=DB::table('expenses')->where('month',$month)->get();
         return view('monthly_expense', compact('expense'));
    }
     public function JuneExpense()
    {
         $month="June";
         $expense=DB::table('expenses')->where('month',$month)->get();
         return view('monthly_expense', compact('expense'));
    }
     public function JulyExpense()
    {
         $month="July";
         $expense=DB::table('expenses')->where('month',$month)->get();
         return view('monthly_expense', compact('expense'));
    }
     public function AugustExpense()
    {
         $month="August";
         $expense=DB::table('expenses')->where('month',$month)->get();
         return view('monthly_expense', compact('expense'));
    }
     public function SeptemberExpense()
    {
         $month="September";
         $expense=DB::table('expenses')->where('month',$month)->get();
         return view('monthly_expense', compact('expense'));
    }
     public function OctoberExpense()
    {
         $month="October";
         $expense=DB::table('expenses')->where('month',$month)->get();
         return view('monthly_expense', compact('expense'));
    }
     public function NovemberExpense()
    {
         $month="November";
         $expense=DB::table('expenses')->where('month',$month)->get();
         return view('monthly_expense', compact('expense'));
    }
     public function DecemberExpense()
    {
         $month="December";
         $expense=DB::table('expenses')->where('month',$month)->get();
         return view('monthly_expense', compact('expense'));
    }
     public function MayExpense()
    {
         $month="May";
         $expense=DB::table('expenses')->where('month',$month)->get();
         return view('monthly_expense', compact('expense'));
    }
}
