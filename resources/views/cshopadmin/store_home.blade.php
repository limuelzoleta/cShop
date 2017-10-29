@extends('layouts.main_admin_layout')

@section('title')
cShop Admin: Home
@stop
<link rel="stylesheet" href="{{ asset('admin/css/store.css' )}}">

@section('page_title')
My Store
@stop
@section('page_sub_title')
Inventory Summary
@stop

@section('breadcrumb')
<li>
  <i class="fa fa-dashboard"></i>  
  <a href="{{route('admin_home')}}">Dashboard</a>
</li>
<li class="active">
  <i class="fa fa-shopping-cart"></i> Store
</li>

@stop

@section('content')
<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Products</a></li>
  <li><a data-toggle="tab" href="#menu1">Orders</a></li>
  <li><a data-toggle="tab" href="#menu2">Reviews</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active products-tab">
	@component('components.admin.store_product', ['products'=>$products])
	@endcomponent
  </div>
  <div id="menu1" class="tab-pane fade">
    <h3>Menu 1</h3>
    <p>Some content in menu 1.</p>
  </div>
  <div id="menu2" class="tab-pane fade">
    <h3>Menu 2</h3>
    <p>Some content in menu 2.</p>
  </div>
</div>



@stop