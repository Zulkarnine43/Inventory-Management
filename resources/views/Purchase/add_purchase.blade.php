@extends('layouts.app')
@section('content')
<div class="content-page">
  <div class="content">
        <div class="container">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Welcome !</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Echobvel</a></li>
                        <li class="active">IT</li>
                    </ol>
                </div>
            </div>

            <!-- Start Widget -->
            <div class="row">
	           <!-- Basic example -->
	           <div class="col-md-2"></div>
                <div class="col-md-8 ">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Add Purchase
                            {{-- <a href="{{ route('import.product') }}" class="btn btn-sm btn-danger pull-right">Import Product</a></h3></div> --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="panel-body">
                            <form role="form" action="{{ url('/insert-purchase') }}" method="post" enctype="multipart/form-data">
                            	@csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Purchase Name</label>
                                    <input type="text" class="form-control" name="purchase_name" placeholder="Purchase Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword20">Purchase Code</label>
                                    <input type="text" class="form-control" name="purchase_code" placeholder="Purchase Code" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword21">Category</label>
                                    @php
                                    $cat=DB::table('categories')->get();
                                    @endphp
                                    <select name="cat_id" class="form-control">
                                    	@foreach($cat as $row)
                                    	 <option value="{{ $row->id }}">{{ $row->cat_name }}</option>
                                    	@endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword18">Purchase Unit</label>
                                    <input type="number" class="form-control" name="purchase_unit" placeholder="Purchase Unit" >
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword21">Supplier</label>
                                    @php
                                    $sup=DB::table('suppliers')->get();
                                    @endphp
                                    <select name="sup_id" class="form-control">
                                    	@foreach($sup as $row)
                                    	 <option value="{{ $row->id }}">{{ $row->name }}</option>
                                    	@endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword18">Godaun</label>
                                    <input type="text" class="form-control" name="purchase_garage" placeholder="Godown Number" >
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword17">Purchase Route</label>
                                    <input type="text" class="form-control" name="purchase_route" placeholder="Purchase Route" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword41">Buying Date</label>
                                    <input type="date" class="form-control" name="buy_date"  >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword13">Expire Date </label>
                                    <input type="date" class="form-control" name="expire_date"  >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword12">Buying Price</label>
                                    <input type="text" class="form-control" name="buying_price" placeholder="Buy Price" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword12">Selling Price</label>
                                    <input type="text" class="form-control" name="selling_price" placeholder="Sell Price" required>
                                </div>
                                <div class="form-group">
                                	<img id="image" src="#" />
                                    <label for="exampleInputPassword11">Photo</label>
                                    <input type="file"  name="purchase_image" accept="image/*"  required onchange="readURL(this);">
                                </div>
                              
                                <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                            </form>
                        </div><!-- panel-body -->
                    </div> <!-- panel -->
                </div> <!-- col-->

            </div>
        </div> <!-- container -->
                   
    </div> <!-- content -->
</div>

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