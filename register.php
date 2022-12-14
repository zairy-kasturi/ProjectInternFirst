<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login: Sistem Amaran Kebakaran Pintar</title>
    <link rel="Icon" type="Icon" href="ico.png">

    <!-- Custom fonts for this template-->
    <link href="/ifutem/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/call-of-ops-duty" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">
    <script>
			function validate() {
				var name =
					document.forms.RegForm.FullName.value;
				var uname =
					document.forms.RegForm.UserName.value;
				var email =
					document.forms.RegForm.EMail.value;
				var phone =
					document.forms.RegForm.Telephone.value;
				var location =
					document.forms.RegForm.Location.value;
				var password =
					document.forms.RegForm.Password.value;
                var confirmpassword =
					document.forms.RegForm.ConfirmPassword.value;
				var regEmail=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g; //Javascript reGex for Email Validation.
				var regPhone=/^\d{10}$/;									 // Javascript reGex for Phone Number validation.
				var regName = /\d+$/g;								 // Javascript reGex for Name validation

				if (name == "" || regName.test(name)) {
					 error = " You Have To Write Your Name. ";
					  document.getElementById( "error_para" ).innerHTML = error;
					  return false;
				}
				if (uname == "" || regName.test(uname)) {
					 error = " You Have To Write Your UserName. ";
					  document.getElementById( "error_para" ).innerHTML = error;
					  return false;
				}
                if (phone == "" || !regPhone.test(phone)) {
					 error = " Please enter valid phone number.";
					  document.getElementById( "error_para" ).innerHTML = error;
					  return false;
				}
				
				if (email == "" || !regEmail.test(email)) {
					 error = " Please enter a valid e-mail address. ";
					  document.getElementById( "error_para" ).innerHTML = error;
					  return false;
				}
                if (location == "" || regName.test(location)) {
					 error = " You Have To Write Your Proper Location Access. ";
					  document.getElementById( "error_para" ).innerHTML = error;
					  return false;
				}
				if (password == "") {
					error = " Please enter your password. ";
					  document.getElementById( "error_para" ).innerHTML = error;
					  return false;
				}
                if (password == "") {
					error = " Please enter your password. ";
					  document.getElementById( "error_para" ).innerHTML = error;
					  return false;
				}
				if(password.length <6){
					error = " Password should be atleast 6 character long. ";
					  document.getElementById( "error_para" ).innerHTML = error;
					  return false;
				}
                if (confirmpassword == "") {
					error = " Please enter your confirm password. ";
					  document.getElementById( "error_para" ).innerHTML = error;
					  return false;
				}
				if(password != confirmpassword){
					error = " Password doesn't match. ";
					  document.getElementById( "error_para" ).innerHTML = error;
					  return false;
				}
                
				

				return true;
			}
		</script>

</head>

<body class="bg-gradient-secondary">

    <nav class="login-nav">
        <img src="/ifutem/ifutem/img/LOGO.png">
        <a class="font-weight-bold float-right active" href="register.html" title="Register">Register</a>
        <a class="font-weight-bold float-right" href="login.html" title="Login">Login</a>
        <a class="font-weight-bold float-right" href="contact.html" title="Contact">Contact</a>
        <a class="font-weight-bold float-right" href="usermanual.html" title="User Manual">User Manual</a>
        <a class="font-weight-bold float-right" href="buildings.html" title="Buildings">Buildings</a>
    </nav>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center " >

            <div class="col-xl-6 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5" >

                        <!-- Nested Row within Card Body -->
                        <div class="row" >

                            <div class="col-lg-12 color-white">
                                <div class="p-5">

                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4 font-weight-bold">REGISTER</h1>
                                        <?php if (isset($_GET['error'])) { ?>
											<p style= "color:seagreen" ><?php echo $_GET['error']; ?></p>
										<?php } ?>
                                        <p style="color:red;" id="error_para" ></p>
                                    </div>

                                    <form class ="user" action= "register-checkup.php" name="RegForm" onsubmit="return validate()" method="post">
			
                                        <div class="form-group">
                                            <input type="fullname" class="form-control form-control-user"
                                               name="FullName"
                                                placeholder="FullName">
                                        </div>
                                        <div class="form-group">
                                            <input type="username" class="form-control form-control-user"
                                               name="UserName"
                                                placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="phone" class="form-control form-control-user"
                                               name="Telephone" placeholder="Phone Number">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                name="EMail" 
                                                placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="location" class="form-control form-control-user"
                                                name="Location" 
                                                placeholder="Location">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                               name="Password" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                name="ConfirmPassword" placeholder="Confirm Password">
                                        </div>
                                        <input class="btn btn-secondary btn-user btn-block" type="submit"
                                                value="Register" name="submit_form" />


                                    </form>

                                    <hr>

                                    <div class="text-center">
                                        <a class="small" href="login.html">Already have an account?</a>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <footer class="sticky-footer color-red">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Ingeniouscity Solution Engineering 2022</span>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript-->
    <script src="ifutem/vendor/jquery/jquery.min.js"></script>
    <script src="ifutem/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="ifutem/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="ifutem/js/sb-admin-2.min.js"></script>

</body>

</html>