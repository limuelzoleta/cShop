@extends('layouts.main_admin_layout')

@section('title')
cShop Admin: Home
@stop
<link rel="stylesheet" href="{{ asset('admin/css/store.css' )}}">
<meta name="csrf-token" content="{{ csrf_token() }}">



@section('page_title')
My Store
@stop
@section('page_sub_title')
Add New Product
@stop



@section('breadcrumb')
<li>
  <i class="fa fa-dashboard"></i>  
  <a href="{{route('admin_home')}}">Dashboard</a>
</li>
<li>
  <i class="fa fa-shopping-cart"></i> <a href="{{route('admin_store_home')}}">Store</a>
</li>
<li class="active">
  <i class="fa fa-plus"></i> New Product
</li>

@stop
@section('content')
	<div class="row add-product-page">
		<div class="row">
			<div class="col-md-8">
			<h3 class="form-title">Product Information</h3>
			</div>
		</div>
		<div class="col-md-8">
			<div class="row">
			{{ Form::open(array('url'=>route('admin_add_product'), 'role'=>'form', 'action'=>route('admin_add_product.add'), 'enctype'=>'multipart/form-data', 'id'=>'product-form')) }}
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
					        {{ Form::label('product_name', 'Product Name') }}
					        {{ Form::text('product_name', null, array('class'=>'form-control')) }}
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
					        {{ Form::label('product_code', 'Product Code') }}
					        {{ Form::text('product_code', null, array('class'=>'form-control')) }}
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
					        {{ Form::label('price', 'Price') }}
					        {{ Form::text('price', null, array('class'=>'form-control', 'placeholder'=>'5.00')) }}
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group has-success">
					        {{ Form::label('special_price', 'Disounted Price', array('class'=>'control-label')) }}
					        {{ Form::text('special_price', null, array('class'=>'form-control', 'placeholder'=>'2.00')) }}
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8">
						<div class="form-group">
					        {{ Form::label('category', 'Choose category') }}
					        <div class="row">
					        	<div class="col-md-8">
					        		<select name="category" id="category" class="form-control">
					        			@foreach($mainCategories as $mainCategory)
											<option value="main_{{$mainCategory['id']}}"><strong>{{$mainCategory['category_name']}}</strong></option>
											@foreach($subCategories as $subCategory)
												@if($subCategory['main_cat_id'] == $mainCategory['id'])
													<option value="sub_{{$subCategory['id']}}">  - {{$subCategory['sub_category_name']}}</option>
												@endif
											@endforeach
					        			@endforeach
					        		</select>
					        	</div>
					        	<div class="col-md-4">
									<div class="form-group">
								        <button type="button" id="add-new-category" class="btn btn-primary btn-md"> Add Category</button>
									</div>
								</div>
								
					        </div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
					        {{ Form::label('quantity', 'No of stocks') }}
					        {{ Form::text('quantity', null, array('class'=>'form-control', 'placeholder'=>'25')) }}
						</div>
					</div>
				</div>
				{{-- add categories --}}
					<div class="row add-new-cat-pane">
						<div class="alert alert-info">
							<button type="button" id="close-cat-pane" class="close" aria-hidden="true">×</button>
							<div class="row">
								<div class="col-md-11">
									<h4>Add New Category</h4>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
								        {{ Form::label('main_cat_name', 'Parent Category') }}
								        <select name="main_cat_name" id="main_cat_name" class="form-control">
								        	@foreach($mainCategories as $mainCategory)
												<option value="{{$mainCategory['id']}}">{{$mainCategory['category_name']}}</option>
								        	@endforeach
								        	<option value="null" selected="selected">No Parent Selected</option>
								        </select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
								        {{ Form::label('cat_name', 'Categoty Name') }}
								        {{ Form::text('cat_name', null, array('class'=>'form-control')) }}
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
								        {{ Form::label('cat_desc', 'Categoty Description') }}
								        {{ Form::textarea('cat_desc', null, array('class'=>'form-control', 'style'=>'resize:none;')) }}
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
								        {{ Form::button('Save', array('type'=>'button', 'class'=>'btn btn-primary btn-md', 'id'=>'save_category')) }}
									</div>
								</div>
							</div>
						</div>
					</div>
				{{-- add categories end --}}
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
					        {{ Form::label('description', 'Description') }}
					        {{ Form::textarea('description', null, array('class'=>'form-control', 'style'=>'resize:vertical')) }}
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
					        {{-- {{ Form::label('prod_images', 'Upload Image') }} --}}
					        {{-- {{ Form::file('prod_images[]', null, array('class'=>'form-control', 'multiple'=>'true')) }} --}}
					        <a class="btn btn-primary btn-md" id="upload-img-btn">Upload Images</a>
					        <input type="file" name="prod_images[]" id="prod_images" multiple style="display: none" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
					<h3 class="form-title">Product Properties</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
					        {{ Form::label('pp_size', 'Product Size (cm)') }}
					        {{ Form::text('pp_size', null, array('class'=>'form-control', 'placeholder'=>'100 x 25 x 25')) }}
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
					        {{ Form::label('pp_weight', 'Product Weight (kg)') }}
					        {{ Form::text('pp_weight', null, array('class'=>'form-control', 'placeholder'=>'1.4kg')) }}
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
					        {{ Form::label('pp_color', 'Product Color') }}
					        {{ Form::text('pp_color', null, array('class'=>'form-control', 'placeholder'=>'Green')) }}
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
					        {{ Form::label('pp_type', 'Product Type') }}
					        {{ Form::text('pp_type', null, array('class'=>'form-control', 'placeholder'=>'Manual / N/A')) }}
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
					        {{ Form::label('pp_box_content', 'Box Content') }}
					        {{ Form::text('pp_box_content', null, array('class'=>'form-control', 'placeholder'=>'2x white pannel, 1x valance')) }}
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
					        {{ Form::label('pp_no_pieces', 'Box Content (total number of items)') }}
					        {{ Form::text('pp_no_pieces', null, array('class'=>'form-control', 'placeholder'=>'3pcs')) }}
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
					        {{ Form::label('pp_warranty', 'Warranty Type') }}
					        {{ Form::text('pp_warranty', null, array('class'=>'form-control', 'placeholder'=>'1-Year Warranty')) }}
						</div>
					</div>
				</div>
				{{ Form::submit('Save', array('class'=>'btn btn-lg btn-primary pull-right')) }}
			{{ Form::close() }}
			</div>
		</div>
	</div>
	{{-- <div></div> --}}

	<script>
	var UploadUrl = '{{ route('admin_add_product.upload_temp') }}';
	var AddCategoryUrl;
	var AddCategoryAction;
	var token = '{{ csrf_token() }}';
		$(function(){
			AddCategoryUrl = '{{ route('admin_categories.add_main') }}';
			AddCategoryAction = "main";
			$("#main_cat_name").change(function(){
				if($(this).val() != "null"){
					AddCategoryUrl = '{{route('admin_categories.add_sub')}}';
					AddCategoryAction = "sub";
				} else{
					AddCategoryUrl = '{{ route('admin_categories.add_main') }}';
					AddCategoryAction = "main";
				}
			});
		})
	</script>
	<script src="{{ asset('admin/js/store_add_product.js') }}"></script>
	<script src="http://malsup.github.com/jquery.form.js"></script> 
@stop

