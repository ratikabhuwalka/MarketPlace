<?php
session_start();
?>
<!DOCTYPE html>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-LV99VRQ0QB"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-LV99VRQ0QB');
	</script>
	<title>Login - Don't Be Trashy!</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" type="text/css">
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="css/admin.css" rel="stylesheet" type="text/css">	
</head>
<body class="admin-bg-gray">
	<div class="container">
		<div class="col-md-12">
			<h1 class="margin-bottom-15">Login - Don't Be Trashy!</h1>
			<form class="form-horizontal admin-container second-chances-login-form margin-bottom-30" role="form" action="php/login-validation.php" method="post">

			<div class="form-group">
		    <div class="col-xs-12">		            
		      <div class="control-wrapper">
						<a class="btn btn-primary btn-lg btn-block" style="margin-left: 60px; background-color: #3b5998" href="#!" role="button">
							<i class="fa fa-facebook fa-fw "></i>Continue with Facebook
          	</a>
					</div>
				</div>		
			</div>		
						<div class="divider d-flex align-items-center my-4">
            	<p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
          	</div>
		        <div class="form-group">
		          <div class="col-xs-12">		            
		            <div class="control-wrapper">
		            	<label for="email" class="control-label fa-label"><i class="fa fa-user fa-medium"></i></label>
		            	<input type="text" class="form-control" id="email_address" name="email_address" placeholder="Email Address">
		            </div>		            	            
		          </div>              
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
		          	<div class="control-wrapper">
		            	<label for="password" class="control-label fa-label"><i class="fa fa-lock fa-medium"></i></label>
		            	<input type="password" class="form-control" id="user_password" name="user_password" placeholder="Password">
		            </div>
		          </div>
		        </div>
						<div class="d-flex justify-content-around align-items-center mb-4">

            <!-- Checkbox -->
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="rememberMe"
                checked
              />
              <label class="form-check-label" for="rememberMe"> Remember me </label>
            </div>
            <a href="#!">Forgot password?</a>
          </div>

		         <div class="form-group">
		          <div class="col-md-12">
		          	<div class="control-wrapper">
		          		<input style="background: #2c5043" type="submit" value="Log in" class="btn btn-success">
		          		<br><br>
		          		    <?php
		                    if(isset($_SESSION["error"])){
		                        $error = $_SESSION["error"];
		                        echo "<span style='color:red'>$error</span>";
		                    }
												if(isset($_SESSION["success"])){
													$success = $_SESSION["success"];
													echo "<span style='color:green'>$success</span>";
											}
		                ?> 
		          	</div>
		          </div>
		        </div>

						<div class="d-flex align-items-center justify-content-center pb-4">
							<p class="mb-0 me-2">Don't have an account?</p>
							<a href="signup.php">Create New Account</a>
						</div>
		      </form>
		</div>
	</div>
</body>
</html>
<?php
    unset($_SESSION["error"]);
?>