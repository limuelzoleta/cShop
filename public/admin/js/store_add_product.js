$(function(){
	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});
	$("#add-new-category").click(function(){
		// 
		$('.add-new-cat-pane').slideDown('slow');
		$(this).attr('disabled', 'disabled');
	});
	$('#close-cat-pane').click(function(){
		$('.add-new-cat-pane').fadeOut('slow');
		$('#add-new-category').removeAttr('disabled');
	})


	$("#save_category").click(function(){
		$(this).attr('disabled', 'disabled');
		var url = AddCategoryUrl;
		var categoryType = AddCategoryAction;
		var mainCatId = $("#main_cat_name").val();
		var categoryName = $("input[name='cat_name']").val();
		var categoryDesc = $("textarea[name='cat_desc']").val();

		if(categoryType == "main"){
			var data = {
				_token : token, 
				category_name : categoryName, 
				category_desc : categoryDesc
			}
		} else {
			var data = {
				_token : token, 
				main_cat_id : mainCatId,
				sub_category_name : categoryName, 
				sub_category_desc : categoryDesc
			}
		}

			$.ajax({
		        type: 'post',
		        url: url,
		        data: data,
		        dataType: 'json',
		       
		    }).done(function(data){
		        if(data.status == 'success'){
		        	// console.log(data.categories);
		        	data.categories.forEach(function(data){
		        		$("#save_category").removeAttr('disabled');
		        		$('.add-new-cat-pane').fadeOut('slow');
		        		$('#add-new-category').removeAttr('disabled');
		        		console.log(data.id);
		        	});
		        }
		    }).error(function(error){
		    	console.log(error);
		    	$('body').html(error.responseText);
		    });
		
		
	});

	$('#upload-img-btn').click(function(){
		$('#prod_images').click();
	});

	$('#prod_images').change(function(){
		console.log('has change');
		$('#product-form').ajaxForm({
			url:UploadUrl,
			beforeSend: function(xhr) {

			},
			uploadProgress: function(event, position, total, percentComplete){

			},
			complete: function(response){
				console.log(response);
			},
			onerror: function(e){

			}

		})
	});
})
