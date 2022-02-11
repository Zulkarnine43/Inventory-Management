<?php

namespace RainbowDigital\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class incomeController extends Controller
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

    public function Addincome()
    {
    	return view('add_income');
    }

    public function Inserincome(Request $request)
    {
    	$data=array();
    	$data['details']=$request->details;
    	$data['amount']=$request->amount;
    	$data['date']=$request->date;
    	$data['month']=$request->month;
    	$data['year']=$request->year;

    	$exp=DB::table('incomes')->insert($data);
    	if ($exp) {
                 $notification=array(
                 'messege'=>'Successfully income Inserted ',
                 'alert-type'=>'success'
                  );
                return Redirect()->route('today.income')->with($notification);                      
             }else{
              $notification=array(
                 'messege'=>'error ',
                 'alert-type'=>'success'
                  );
                 return Redirect()->back()->with($notification);
             }      
    }

    public function Todayincome()
    {
    	$date= date("d/m/y");
    	$today=DB::table('incomes')->where('date',$date)->get();
    	return view('today_income', compact('today'));
    }

    public function EditTodayincome($id)
    {
    	$tdy=DB::table('incomes')->where('id',$id)->first();
    	return view('edit_today_income', compact('tdy'));
    }

    public function Updateincome(Request $request,$id)
    {
    	$data=array();
    	$data['details']=$request->details;
    	$data['amount']=$request->amount;
    	$data['date']=$request->date;
    	$data['month']=$request->month;
    	$data['year']=$request->year;

    	$exp=DB::table('incomes')->where('id',$id)->update($data);
    	if ($exp) {
                 $notification=array(
                 'messege'=>'Successfully income updated ',
                 'alert-type'=>'success'
                  );
                return Redirect()->route('today.income')->with($notification);                      
             }else{
              $notification=array(
                 'messege'=>'error ',
                 'alert-type'=>'success'
                  );
                 return Redirect()->back()->with($notification);
             }  
    }

    public function Monthlyincome()
    {
        $month= date("F");
        $income=DB::table('incomes')->where('month',$month)->get();
        return view('monthly_income', compact('income'));
    }

    public function Yearlyincome()
    {
         $year=date("Y");
         $year=DB::table('incomes')->where('year',$year)->get();
         return view('yearly_income', compact('year'));
    }

    public function Januaryincome()
    {
        $month="January";
        $income=DB::table('incomes')->where('month',$month)->get();
        return view('monthly_income', compact('income'));
    }

     public function Februaryincome()
    {
         $month="February";
         $income=DB::table('incomes')->where('month',$month)->get();
         return view('monthly_income', compact('income'));
    }

     public function Marchincome()
    {
         $month="March";
         $income=DB::table('incomes')->where('month',$month)->get();
         return view('monthly_income', compact('income'));
    }
     public function Aprilincome()
    {
         $month="April";
         $income=DB::table('incomes')->where('month',$month)->get();
         return view('monthly_income', compact('income'));
    }
     public function Juneincome()
    {
         $month="June";
         $income=DB::table('incomes')->where('month',$month)->get();
         return view('monthly_income', compact('income'));
    }
     public function Julyincome()
    {
         $month="July";
         $income=DB::table('incomes')->where('month',$month)->get();
         return view('monthly_income', compact('income'));
    }
     public function Augustincome()
    {
         $month="August";
         $income=DB::table('incomes')->where('month',$month)->get();
         return view('monthly_income', compact('income'));
    }
     public function Septemberincome()
    {
         $month="September";
         $income=DB::table('incomes')->where('month',$month)->get();
         return view('monthly_income', compact('income'));
    }
     public function Octoberincome()
    {
         $month="October";
         $income=DB::table('incomes')->where('month',$month)->get();
         return view('monthly_income', compact('income'));
    }
     public function Novemberincome()
    {
         $month="November";
         $income=DB::table('incomes')->where('month',$month)->get();
         return view('monthly_income', compact('income'));
    }
     public function Decemberincome()
    {
         $month="December";
         $income=DB::table('incomes')->where('month',$month)->get();
         return view('monthly_income', compact('income'));
    }
     public function Mayincome()
    {
         $month="May";
         $income=DB::table('incomes')->where('month',$month)->get();
         return view('monthly_income', compact('income'));
    }
}
