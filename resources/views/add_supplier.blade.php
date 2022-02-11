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
                        <div class="panel-heading"><h3 class="panel-title">Add Supplier</h3></div>
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
                            <form role="form" action="{{ url('/insert-supplier') }}" method="post" enctype="multipart/form-data">
                            	@csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Supplier Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Full Name"required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword20">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email"required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword21">Phone</label>
                                    <input type="text" class="form-control" name="phone" placeholder="phone"required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword19">Address</label>
                                    <input type="text" class="form-control" name="address" placeholder="address"required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword18">Shop Name</label>
                                    <input type="text" class="form-control" name="shop" placeholder="Shop Name"required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword17">Account Holder</label>
                                    <input type="text" class="form-control" name="accountholder" placeholder="Account Holder"required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword41">Account Number</label>
                                    <input type="text" class="form-control" name="accountnumber" placeholder="Account Number" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword13">Bank Name</label>
                                    <input type="text" class="form-control" name="bankname" placeholder="Bank Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword12">Branch Name</label>
                                    <input type="text" class="form-control" name="branchname" placeholder="Branch Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword12">City</label>
                                    <input type="text" class="form-control" name="city" placeholder="city" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword12">Supplier Type</label>
                                    <select name="type" class="form-control">
                                    	<option disabled="" selected=""></option>
                                    	<option value="Distributor">Distributor</option>
                                    	<option value="WholeSeller">Whole Seller</option>
                                    	<option value="Brochure">Brochure</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                	<img id="image" src="#" />
                                    <label for="exampleInputPassword11">Photo</label>
                                    <input type="file"  name="photo" accept="image/*"  required onchange="readURL(this);">
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