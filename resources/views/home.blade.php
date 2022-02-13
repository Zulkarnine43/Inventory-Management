@extends('layouts.app')
@section('content')
 @php


$expense=DB::Table('expenses')->select('amount')->sum('amount');







$sub_total=DB::Table('orders')->select('sub_total')->sum('sub_total');
$payment=DB::Table('orders')->select('payment')->sum('pay');








$due=DB::Table('orders')->select('due')->sum('due');

$discount=DB::Table('orders')->select('discount')->sum('discount');

$month= date("F");
$month=DB::Table('orders')->where('month',$month)->sum('sub_total');

$date= date("d/m/y");
$dayincome=DB::Table('orders')->where('order_date',$date)->sum('pay');
$date= date("d/m/y");
$daydue=DB::Table('orders')->where('order_date',$date)->sum('due');

$date= date("d/m/y");
$daydiscount=DB::Table('orders')->where('order_date',$date)->sum('discount');

$year= date("Y");
$year=DB::Table('orders')->where('year',$year)->sum('sub_total');


@endphp


@php 


$payday=$dayincome-$daydue-$daydiscount;

$dpay=$sub_total-$due;

@endphp


@php 



$pay=$dpay-$discount;

@endphp


@php 


$profit=$dayincome-$expense;


@endphp
<div class="content-page">
  <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Welcome !</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">eSofthy</a></li>
                                    <li class="active">Dashboard</li>
                                </ol>
                            </div>
                        </div>

                        <!-- Start Widget -->
                      
                        <!-- End row-->

                          <div class="row">
                             <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-info"><i class="ion-social-usd"></i></span>
                                   
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter">{{$due}}</span>
                                       Total due
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase">Total due  <span class="pull-right">{{$due}} Taka</span></h5>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-info"><i class="ion-social-usd"></i></span>
                                   
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter">{{$payment}}</span>
                                       Total Pay
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase">Total Pay <span class="pull-right">{{$payment}} Taka</span></h5>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-info"><i class="ion-social-usd"></i></span>
                                   
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter">{{$discount}}</span>
                                       Total Discount
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase">Total Discount <span class="pull-right">{{$discount}} Taka</span></h5>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                 
                        </div>  

                         <div class="row">
                           


                             <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-info"><i class="ion-social-usd"></i></span>
                                   
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter">{{$daydue}}</span>
                                       Day Due
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase">Day Due  <span class="pull-right">{{$daydue}} Taka</span></h5>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-info"><i class="ion-social-usd"></i></span>
                                   
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter">{{$dayincome}}</span>
                                       Day Pay
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase">Day Pay <span class="pull-right">{{$dayincome}} Taka</span></h5>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-info"><i class="ion-social-usd"></i></span>
                                   
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter">{{$daydiscount}}</span>
                                       Day Discount
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase">Day Discount <span class="pull-right">{{$daydiscount}} Taka</span></h5>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                 
                        </div>  





                         <div class="row">

                         <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-info"><i class="ion-social-usd"></i></span>
                                   
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter">{{$expense}}</span>
                                       Total Expense
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase">Total Expense  <span class="pull-right">{{$expense}} Taka</span></h5>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                              <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-info"><i class="ion-social-usd"></i></span>
                                   
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter">{{$profit}}</span>
                                       Total Profit
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase">Total Profit <span class="pull-right">{{$profit}} Taka</span></h5>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>         
                                         
                        </div> 
       
                        <!-- Start Widget -->                   
    </div> <!-- container -->
            


</div> <!-- content -->

@endsection
      
