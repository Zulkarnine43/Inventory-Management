@extends('layouts.app')
@section('content')
     <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Invoice</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">Rainbow Digital</a></li>
                                    <li><a href="#">Pages</a></li>
                                    <li class="active">Invoice</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4>Invoice</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <h4 class="text-right">Echovel</h4>
                                                
                                            </div>
                                            <div class="pull-right">
                                                <h4>Invoice # <br>
                                                    <strong>{{ date('d/m/y') }}</strong>
                                                </h4>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                
                                                <div class="pull-left m-t-30">
                                                    <address>
                                                      <strong>Company Name: {{ $customer->company }}</strong><br>
                                                  
                                                      Name: {{ $customer->name }}
                                                      <br>
                                                      Phone: {{ $customer->phone }}
                                                      </address>
                                                </div>
                                                <div class="pull-right m-t-30">
                                                   <strong>Rainbow Digital</strong> 
                                                    <p>107/1 Naya Paltan,Culvert Road(Beside Mosque),1st Floor,Dhaka-100</p>
                                                    <p>017714303381(manager),01732647391</p>
                                                    <p>Website:www.rainbowdigital.com,E-mail:rainbowdigitalbd@gmail.com</p>
                                                     <p><strong>Today: </strong> {{ date("l jS \of F Y ") }}</p>

                                                  {{--   @php
                                                    $order=DB::table('orders')->select('id')->first();
                                                    @endphp --}}
                                                    <p class="m-t-10"><strong>Order ID: </strong> {{-- {{ $order++ }} --}} 1</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-h-50"></div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="table-responsive">
                                                    <table class="table m-t-30">
                                                        <thead>
                                                            <tr><th>#</th>
                                                            <th>Item Description</th>
                                                            <th>Rate</th>
                                                            <th>Total Size</th>
                                                            <th>Sub Total</th>
                                                        </tr></thead>
                                                        <tbody>
                                                        	@php
                                                        	$sl=1;
                                                        	@endphp
                                                        	@foreach($contents as $cont)
                                                            <tr>
                                                                <td>{{ $sl++ }}</td>
                                                                <td>{{ $cont->name }}</td>
                                                                <td>{{ $cont->price }}</td>
                                                                <td>{{ $cont->qty }}</td>
                                                                <td>{{ $cont->price*$cont->qty }}</td>
                                                            </tr>
                                                           @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="border-radius: 0px;">
                                            <div class="col-md-3 col-md-offset-9">
                                                <hr>
                                                <h3 class="text-right">Total: {{ Cart::subtotal() }}</h3>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="hidden-print">
                                            <div class="pull-right">
                                               
                                                <a href="#"  class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Submit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                          </div>
                    </div>
           </div> <!-- container -->                     
        </div> <!-- content -->
     </div>


<!----payable model---->
<!--customer add modal-->
<form action="{{ url('/final-invoice') }}" method="POST" >
  @csrf
<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog"> 
        <div class="modal-content"> 
            <div class="modal-header"> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                <h4 class="modal-title text-info">Invoice Of {{ $customer->name }}
                	<span class="pull-right">total: {{ Cart::subtotal() }} </span> </h4> 
            </div> 
            <div class="modal-body">             
                <div class="row"> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                           <label for="field-4" class="control-label">Payment</label> 
                           <select class="form-control" name="payment_status">
                           	<option value="Handcash">HandCash</option>
                           
                           </select> 
                        </div> 
                    </div> 
                    <div class="col-md-3"> 
                        <div class="form-group"> 
                            <label for="field-5" class="control-label">Pay</label> 
                            <input type="float" class="form-control" id="field-5" name="pay" required> 
                        </div> 
                    </div> 
                    <div class="col-md-3"> 
                        <div class="form-group"> 
                            <label for="field-6" class="control-label">Due</label> 
                            <input type="float" class="form-control" id="field-6" name="due" required> 
                        </div> 
                     
                    </div> 
                    <div class="col-md-2"> 
                        <div class="form-group"> 
                            <label for="field-6" class="control-label">Discount</label> 
                            <input type="float" class="form-control" id="field-6" name="discount" required> 
                        </div> 
                     
                    </div> 
                </div>



                
            <input type="hidden" name="customer_id" value="{{ $customer->id }}">
            <input type="hidden" name="order_date" value="{{ date('d/m/y') }}">
            <input type="hidden" class="form-control" name="month" value=" {{ date("F") }}">
            <input type="hidden" class="form-control" name="year" value=" {{ date("Y") }}">
            <input type="hidden" name="order_status" value="pending">
            <input type="hidden" name="total_products" value="{{ Cart::count()}}">
            <input type="hidden" name="sub_total" value="{{ Cart::subtotal() }}">
            <input type="hidden" name="vat" value="{{ Cart::tax() }}">
            <input type="hidden" name="total" value="{{ Cart::total() }}">

            <div class="modal-footer"> 
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button> 
                <button type="submit" class="btn btn-danger waves-effect waves-light">Order Compelete</button> 
            </div> 
        </div> 
    </div>
</div><!-- /.modal -->
</form>

@endsection