@extends('layouts.app')
@section('content')
<div class="content-page">
  <div class="content">
       <div class="container">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12 bg-info">
                <h4 class="pull-left page-title text-white">POS (Point of Sale) </h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="#" class="text-white">Echovel</a></li>
                    <li class="text-white">{{ date('d/m/y') }}</li>
                </ol>
            </div>
        </div><br>
  <div class="row">
   
        <div class="col-lg-12 col-md-12 col-sm-12 ">
            <div class="portfolioFilter">
            	@foreach($categories as $row)
                <a href="#" data-filter="*" class="current">{{ $row->cat_name }}</a>
               @endforeach
            </div>
        </div>
       </div>
        <br>
        <div class="row">
        	<div class="col-lg-8">
        	   <div class="price_card text-center">     
                    <ul class="price-features" style="border:1px solid grey;">
                       <table class="table">
                       	<thead class="bg-info">
                       		<tr>
                       			<th class="text-white">Name Description</th>
                       			<th class="text-white">Rate</th>
                            <th class="text-white">Total Size</th>
                       			<th class="text-white">Rate </th>
                       			<th class="text-white">Sub Total</th>
                       			<th class="text-white">Action</th>
                       		</tr>
                       	</thead>
                        @php
                          $cart_prod =Cart::content()
                        @endphp
                       	<tbody>
                          @foreach($cart_prod as $prod)
                       		<tr>
                       			
                              <form action="{{ url('/cart-update/'.$prod->rowId) }}" method="post">
                                @csrf
              
                               <th>
                                 <input type="text" name="name" value="{{ $prod->name }}" placeholder="Name Description" style="width:120px;" >
                                  </th>

                                <th>
                                 <input type="float" name="price" value="{{ $prod->price }}" placeholder="Rate" style="width:80px;" >
                                  </th>
                                <th>
                                <input type="float" name="qty" value="{{ $prod->qty }}" placeholder="Total Size" style="width:80px;" >
                                
                                <button type="submit" class="btn btn-sm btn-success " style="margin-top: -2px;"><i class="fas fa-check"></i></button>
                              </th>
                              </form>
                                
                       			<th>{{ $prod->price }}</th>
                       			<th>{{ $prod->price*$prod->qty }}</th>
                       			<th><a href="{{ URL::to('/cart-remove/'.$prod->rowId) }}" class="text-danegr"> <i class="fas fa-trash-alt text-danegr"></i> </a></th>
                       		</tr>
                          @endforeach
                       	</tbody>
                       </table>
                        
                    </ul>
                    <div class="pricing-footer bg-primary">
                    	<p style="font-size: 19px;"> Total Size: {{ Cart::count() }}</p>
                      <p style="font-size: 19px;">  Total: {{ Cart::subtotal() }}</p>
                    	
                    	<hr>
                       <p><h2 class="text-white">Total:</h2> <h1 class="text-white">{{ Cart::subtotal() }}</h1></p>
           

                 <form method="post" action="{{ url('/invoice') }}">
                  @csrf
                      <div class="panel"><br><br>
                         @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <h4 class="text-info">Select Customer
                          <a href="#" class="btn btn-sm btn-primary waves-effect waves-light pull-right" data-toggle="modal" data-target="#con-close-modal">Add New</a>
                        </h4>
                          @php 
                            $customer=DB::table('customers')->get();
                          @endphp
                        <select class="form-control" name="cus_id">
                          <option disabled="" selected="">select customer</option>
                          @foreach($customer as $cus)
                          <option value="{{ $cus->id }}">{{ $cus->company }}</option>
                          @endforeach
                        </select>
                     </div> 
                    </div>
                        <button type="submit" class="btn btn-success"> Create Invoice</button>
                    </div>
                     </form>
               	</div>

               



        	<div class="col-lg-4">
        		   <table id="datatable" class="table table-striped table-bordered">
                  <thead>
                      <tr>
                          <th>Image</th>
                          <th>Name</th>
                          <th>price</th>
                          <th>Add</th>
                      </tr>
                  </thead>
                  <tbody>
                  	@foreach($product as $row)
                      <tr>
                        <form action="{{ url('/add-cart') }}" method="post">
                          @csrf
                          <input type="hidden" name="id" value="{{ $row->id }}">
                          <input type="hidden" name="name" value=" {{ $row->product_name }}">
                          <input type="hidden" name="qty" value="1">
                          <input type="hidden" name="price" value="{{ $row->selling_price }}">
                      	 <td>
                      	 	{{-- <a href="#" style="font-size: 30px;"><i class="fas fa-plus-square"></i></a> --}}
                      		<img src="{{ URL::to($row->product_image) }}" width="60px" height="60px">
                      	 </td>
                         <td>{{ $row->product_name }}</td>
                         <td>{{ $row->selling_price }}</td>
                         <td><button type="submit" class="btn btn-info btn-sm"><i class="fas fa-plus-square"></i></button></td>
                         </form>
                      </tr>

                    @endforeach
                  </tbody>
              </table>
        	</div>
        </div>
        </div> <!-- container -->             
    </div> <!-- content -->
</div>


<!--customer add modal-->
<form action="{{ url('/insert-customer') }}" method="POST" enctype="multipart/form-data">
  @csrf
<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog"> 
        <div class="modal-content"> 
            <div class="modal-header"> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                <h4 class="modal-title">Add a New Customer</h4> 
            </div> 
            @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
            <div class="modal-body">             
                <div class="row"> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-4" class="control-label">Company</label> 
                            <input type="text" class="form-control" id="field-4" name="company" required> 
                        </div> 
                    </div> 

                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-4" class="control-label">Name</label> 
                            <input type="text" class="form-control" id="field-4" name="name" required> 
                        </div> 
                    </div> 
                   
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-6" class="control-label">Phone</label> 
                            <input type="text" class="form-control" id="field-6" name="phone"required > 
                        </div> 
                    </div> 
                </div> 
                
              
            </div> 
            <div class="modal-footer"> 
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button> 
                <button type="submit" class="btn btn-info waves-effect waves-light">Submit</button> 
            </div> 
        </div> 
    </div>
</div><!-- /.modal -->
</form>

<script type="text/javascript">
	function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#image')
                  .attr('src', e.target.result)
                  .width(80)
                  .height(80);
          };
          reader.readAsDataURL(input.files[0]);
      }
   }
</script>
@endsection
