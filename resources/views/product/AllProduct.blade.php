@extends('layouts.app')
@section('content')
<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
    <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">All Product Info</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                
                                                                <th>Product name</th>
                                                                <th>Product Code</th>
                                                                <th>Product Image</th>
                                                                <th>Product_Buy_Date</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        	@foreach($allProduct as $row)
                                                            <tr>
                                                                
                                                                <td>{{$row->Product_name}}</td>
                                                                <td>{{$row->Product_Code}}</td>
                                                                
                                                                <td><img src="{{asset('/uploads/products/'.$row->Product_Image)}}" style="height: 60px; width: 60px;"></td>
                                                                <td>{{$row->Product_Buy_Date}}</td>
                                            <td>
                                                 <a href="{{url('product-edite/'.$row->id)}}" class="btn btn-sm btn-info">Edit</a>
	                                         	<a href="{{url('product-delete/'.$row->id)}}" class="btn btn-sm btn-danger" id="delete">Delete</a>
	                                            <a href="{{url('product-view/'.$row->id)}}" class="btn btn-sm btn-info">View</a>
                                          </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- End row -->
                        </div>
                            </div>
                        </div> 

@endsection()