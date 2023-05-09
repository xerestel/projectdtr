<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.min.css" integrity="sha512-PIAUVU8u1vAd0Sz1sS1bFE5F1YjGqm/scQJ+VIUJL9kNa8jtAWFUDMu5vynXPDprRRBqHrE8KKEsjA7z22J1FA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" integrity="sha512-xnwMSDv7Nv5JmXb48gKD5ExVOnXAbNpBWVAXTo9BJWRJRygG8nwQI81o5bYe8myc9kiEF/qhMGPjkSsF06hyHA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <title>Login</title>
  </head>
  <body>    
	<section class="vh-100" style="background-color: #fff;">
		<div class="container py-5 h-100">
			<div class="row d-flex justify-content-center align-items-center h-100">
				<div class="col-12 col-md-8 col-lg-6 col-xl-5">
					<div class="card shadow-2-strong" style="border-radius: 5px; background-color: #D3D3D3;">
						<div class="card-body p-5 text-center">

							<h3 class="mb-5">Daily Time Record</h3>

							<form action="" class="form">
								<div class="row">
									<div class="col-md-12 mb-2 d-flex justify-content-center align-items-center text-center">
										<div class="col-10">
											<input type="text" class="form-control" placeholder="Identification Number" id="id-number"/>
											<span id="id-number-signin-error"></span>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12 mb-2 d-flex justify-content-center align-items-center text-center">
										<div class="col-10">
											<input type="password" class="form-control" placeholder="Password" id="password"/>
											<i class="fa fa-eye-slash" aria-hidden="true" id="show-password" style="cursor: pointer; position: absolute; top: 55%; right: 20%; color: gray;"></i>
											<span id="password-login-error"></span>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12 mb-2 d-flex justify-content-center align-items-center text-center">
										<div class="col-10">
											<span id="login-error"></span>
										</div>
									</div>
								</div>


								<div class="row">
									<div class="col-md-12 mt-3 text-center">
										<div class="col-12">
											<button class="btn btn-secondary mb-3" type="button" id="loginBtn">Log in</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Loading Login Successfully -->
	<div class="modal fade" tabindex="-1" role="dialog" id="loadingLoginSuccessModal">
		<div class="modal-dialog modal-dialog-centered text-center" role="document">
			<div class="col-md-12 d-flex justify-content-center text-center">
				<span style="font-size: 20px; color: #FFFFFF;">Successfully Logged In, Please Wait ...<br><br>
					<i class="fa fa-refresh fa-spin fa-3x w-100" aria-hidden="true"></i>
				</span>
			</div>
		</div>
	</div>

	<!-- Error Modal -->
	<div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content text-center">
				<div class="modal-body">
					<span><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <p id="errorPtag"></p></span>
				</div>
			</div>
		</div>
	</div>

	<script>
		$(document).ready(function(){

			// SHOW PASSWORD
			const showPassword = document.querySelector('#show-password');
			const password = document.querySelector('#password');

			showPassword.addEventListener('click', function (e) {
			// toggle the type attribute
			const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
			password.setAttribute('type', type);
			
			// toggle the eye / eye slash icon
			const pwClass = this.getAttribute('class') === 'fa fa-eye-slash' ? 'fa fa-eye' : 'fa fa-eye-slash';
			this.className = pwClass;
			});

			// Press enter, trigger submit button
			$("#password").keypress(function(event) {
				if (event.keyCode === 13) {
					$("#loginBtn").click();
				}
			});

			$("#loginBtn").click(function(){
				var flag = 0;
				var idNumber = $('#id-number').val();
				var password = $('#password').val();

				if (idNumber == '' || idNumber == undefined) {
					$('#id-number').css('border', '1px solid red');
					// document.getElementById("id-number-login-error").innerHTML = '<span style="color: red;"><strong>Cant be blank!</strong></span>';
					flag = 1;
				}

				if (password == '' || password == undefined) {
					$('#password').css('border', '1px solid red');
					// document.getElementById("password-login-error").innerHTML = '<span style="color: red;"><strong>Cant be blank!</strong></span>';
					flag = 1;
				}

				if (flag == 0) {
					$.ajax({
					url: "<?php echo base_url(); ?>main/login",
					method: 'POST',
					dataType: "JSON",
					data: {
						id_number: idNumber, 
						password: password
					},
					success: function (result) {
						console.log(result);
						if (result['error'] == false){
							// alert("Success!");
							$('#loadingLoginSuccessModal').modal('show');
							setTimeout(function() {
								$('#loadingLoginSuccessModal').modal('hide');
								window.location.href = '<?php echo base_url(); ?>main/index';
							}, 2000);
						} else {
							document.getElementById("errorPtag").innerHTML = result['message'];
							$('#errorModal').modal('show');

							setTimeout(function() {
								window.location.reload();
							}, 2000);
						}
					},
					error: function (request, status, error) {
						alert(request.responseText);
					}
					});
				} 
			});
		});
	</script>
  </body>
</html>