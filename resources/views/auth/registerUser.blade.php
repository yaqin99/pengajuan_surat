<!doctype html>
<html lang="en">
  <head>
  	<title>Daftar User</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="/assets/css2/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					
					<div class="login-wrap p-4 p-md-5">
						@if(Session::get('fail'))
					<div class="col-12">
					  <div class="alert alert-danger" role="alert">
						<div class="fw-bold">
						  <div class="d-flex justify-content-between">
		
						  {{ Session::get('fail') }}
						  <button type="button" class="btn-close" id="close" data-bs-dismiss="alert" aria-label="Close"></button>
						  </div>
						</div>
					  </div>
					</div>
				  @endif
				  @if(Session::get('exist'))
					<div class="col-12">
					  <div class="alert alert-warning" role="alert">
						<div class="fw-bold">
						  <div class="d-flex justify-content-between">
		
						  {{ Session::get('exist') }}
						  <button type="button" class="btn-close" id="close" data-bs-dismiss="alert" aria-label="Close"></button>
						  </div>
						</div>
					  </div>
					</div>
				  @endif
						@if(Session::get('email'))
					<div class="col-12">
					  <div class="alert alert-warning" role="alert">
						<div class="fw-bold">
						  <div class="d-flex justify-content-between">
		
						  {{ Session::get('email') }}
						  <button type="button" class="btn-close" id="close" data-bs-dismiss="alert" aria-label="Close"></button>
						  </div>
						</div>
					  </div>
					</div>
				  @endif
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<img src="/assets/img/pamekasan.png" alt="" style="max-width: 100%">
		      	</div>
		      	<h3 class="text-center mb-4">Daftar User</h3>
						<form action="/registerUser" class="login-form" method="POST">
							@csrf
		      				<div class="form-group">
								<input type="text" name="nama" class="form-control rounded-left" placeholder="Nama Lengkap" required>
							</div>
		      				<div class="form-group">
								<input type="text" name="email" class="form-control rounded-left" placeholder="Alamat Email" required>
							</div>
		      				<div class="form-group">
								<input type="text" name="username" class="form-control rounded-left" placeholder="Username" required>
							</div>
							<div class="form-group d-flex">
								<input type="password" name="password" class="form-control rounded-left" placeholder="Password" required>
							</div>
							<div class="form-group">
								<button type="submit" class="form-control btn btn-primary rounded submit px-3">Daftar</button>
							</div>
							
	          			</form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="assets/js2/jquery.min.js"></script>
  <script src="assets/js2/popper.js"></script>
  <script src="assets/js2/bootstrap.min.js"></script>
  <script src="assets/js2/main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
	<script>
		

			setTimeout(() => {
				if (document.getElementById('close') !== null) {
					document.getElementById('close').click();				} 
			}, 3000);
			
		
	</script>
	</body>
</html>

