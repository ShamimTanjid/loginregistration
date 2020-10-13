@extends('layouts.app')
@section('content')
<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
    <div class="row">
<h1>{{$snglproduct->Product_name}}</h1>
<h1><img src="{{asset('/uploads/products/'.$snglproduct->Product_Image)}}" style="height: 60px; width: 60px;"></h1>
</div>
</div>	
</div>
@endsection()