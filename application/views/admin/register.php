<body class="bg-gradient-primary">

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-6 col-lg-10 col-md-6">
				<div class="card o-hidden border-0 shadow-lg my-5">
					<div class="card-body p-0">
						<!-- Nested Row within Card Body -->
						<div class="row">
							<!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
							<div class="col-lg-12">
								<div class="p-5">
									<div class="text-center">
										<h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
									</div>
									<form class="user" method="post" action="<?= base_url('auth/pre_register');?>">
										<div class="form-group row">
											<div class="col-sm mb-3 mb-sm-0">
												<input type="text" class="form-control form-control-user" id="exampleFirstName" name="name"
													placeholder="Name">
											</div>
                    </div>
                    <div class="form-group row">
											<div class="col-sm mb-3 mb-sm-0">
												<input type="text" class="form-control form-control-user" id="exampleFirstName" name="username"
													placeholder="username">
											</div>
										</div>
										<div class="form-group">
											<input type="email" class="form-control form-control-user" id="exampleInputEmail" name="email"
												placeholder="Email Address">
										</div>
										<div class="form-group row">
											<div class="col-sm mb-3 mb-sm-0">
												<input type="password" class="form-control form-control-user" id="exampleInputPassword"
													name="password" placeholder="Password">
											</div>
										</div>
										<button type="submit" class="btn btn-primary btn-user btn-block">
											Register Account
										</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
