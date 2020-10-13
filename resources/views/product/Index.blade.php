@extends('layouts.app')
@section('content')
<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                     <div class="row">
                        <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Basic example</h3></div>
                                    <div class="panel-body">

                                    	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                                        <form role="form" method="post" action="{{route('Insert-product')}}" enctype="multipart/form-data">
                                        	@csrf
                                            <div class="form-group">
                                                <label for="exampleInputName">Product Name</label>
                                                <input type="name" name="Product_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Product Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Product Code</label>
                                                <input type="name" name="Product_Code" class="form-control" id="exampleInputPassword1" placeholder="Product Code">
                                            </div>

                                            <div class="form-group">
                                               <label for="exampleInputPassword1">Product Image</label>
                                                <input type="file" name="Product_Image" class="form-control" id="exampleInputPassword1" placeholder="Enter Product Image">
                                            </div>

                                            <div class="form-group">
                                            <label for="exampleInputPassword1">Product Buy Date</label>
                                           <input type="date" name="Product_Buy_Date" class="form-control" id="exampleInputPassword1" placeholder="Enter Product Buy Date">
                                            </div>
                                            
                                            <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                                        </form>
                                    </div><!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col-->
</div>
</div>
</div>
</div>
@endsection()