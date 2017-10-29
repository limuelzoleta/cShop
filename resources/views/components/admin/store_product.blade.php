	<div class="row">
		<div class="col-md-3">
			<p class="add-product-button"><a href="{{ route('admin_add_product') }}" class="btn btn-primary btn-md"><i class="fa fa-plus-circle"></i> Add New Product</a></p>
		</div>
	</div>
	@if(count($products) <= 0)
    <div class="row">
    	<div class="col-md-9">
    		<h3>No products were found</h3>
    	</div>

    </div>
    @else
    <div class="row">
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Product ID</th>
						<th>Product Name</th>
						<th>Product Code</th>
						<th>Quantity</th>
						<th>Price</th>
						<th>Special Price</th>
						<th>View Details</th>
					</tr>
				</thead>
			</table>
		</div>
    </div>
    @endif