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
                        <div class="panel-heading"><h3 class="panel-title">Update Supplier</h3></div>
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
                            <form role="form" action="{{ url('/update-supplier/'.$sup->id) }}" method="post" enctype="multipart/form-data">
                            	@csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Supplier Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ $sup->name }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword20">Email</label>
                                    <input type="email" class="form-control" name="email"  value="{{ $sup->email }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword21">Phone</label>
                                    <input type="text" class="form-control" name="phone" value="{{ $sup->phone }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword19">Address</label>
                                    <input type="text" class="form-control" name="address" value="{{ $sup->address }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword18">Shop Name</label>
                                    <input type="text" class="form-control" name="shop" value="{{ $sup->shop }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword17">Account Holder</label>
                                    <input type="text" class="form-control" name="accountholder" value="{{ $sup->accountholder }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword41">Account Number</label>
                                    <input type="text" class="form-control" name="accountnumber" value="{{ $sup->accountnumber }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword13">Bank Name</label>
                                    <input type="text" class="form-control" name="bankname" value="{{ $sup->bankname }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword12">Branch Name</label>
                                    <input type="text" class="form-control" name="branchname" value="{{ $sup->branchname }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword12">City</label>
                                    <input type="text" class="form-control" name="city" value="{{ $sup->city }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword12">Supplier Type</label>
                                    <select name="type" class="form-control">
                                    	<option value="{{ $sup->type }}">{{ $sup->type }}</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                	<img id="image" src="#" />
                                    <label for="exampleInputPassword11">Photo</label>
                                    <input type="file"  name="photo" accept="image/*"  onchange="readURL(this);">
                                </div>
                                <div class="form-group">
                                	<img  src="{{ URL::to($sup->photo) }}" style="height: 90px; width: 90px;" /> 
                                	<input type="hidden" name="old_photo" value="{{ $sup->photo }}" >    
                                </div>
                              
                                <button type="submit" class="btn btn-purple waves-effect waves-light">Update</button>
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