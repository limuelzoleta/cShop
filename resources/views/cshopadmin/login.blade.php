<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>cShop: Admin - Login</title>

	<!-- Bootstrap Core CSS -->
	<link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="{{ asset('admin/css/sb-admin.css') }}" rel="stylesheet">
	<link href="{{ asset('admin/css/login.css') }}" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="{{ asset('admin/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
<div id="wrapper">
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
      <a class="navbar-brand" href="{{ url('cshopadmin/login') }}">cShop Admin - Login</a>
  </div>
  <!-- Top Menu Items -->

  <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->

  <!-- /.navbar-collapse -->
</nav>
<div class="clear"></div>

</div>
<div class="container">
	<div class="row">
		<div class="col-lg-3"></div>
		<div class="col-lg-6">
	        <div class="panel panel-yellow">
	        	<div class="panel-heading">
	        		<h2 class="panel-title">Admin Login</h2>
	        	</div>
	        	<div class="panel-body">
	        		<div class="row">
	        			<div class="col-md-2"></div>
	        			<div class="col-md-8">
					        {{ Form::open(array('url'=>'cshopadmin/login', 'role'=>'form', 'action'=>route('admin_login.login'))) }}
								<div class="form-group">
							        {{ Form::label('username', 'Username') }}
							        {{ Form::text('username', null, array('class'=>'form-control')) }}
								</div>

								<div class="form-group">
							        {{ Form::label('password', 'Password') }}
							        {{ Form::password('password',  array('class'=>'form-control')) }}
								</div>
								<div class="form-group">
									<div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="" name="remember">Remember me
                                    </label>
                                </div>
								</div>
						        {{ Form::submit('Log In', array('class'=>'btn btn-lg btn-warning btn-block')) }}
					      	{{ Form::close() }}
				      	</div>
				      	<div class="col-md-2"></div>
			      	</div>
	        	</div>
	        </div>
	    </div>
	    <div class="col-lg-3"></div>
	</div>
</div>
</body>
</html>