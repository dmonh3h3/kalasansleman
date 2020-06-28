<body class="bg-gradient-primary">

	<div class="container">
		<!-- Outer Row -->
		<div class="row justify-content-center">
			<div class="col-xl-6 col-lg-10 col-md-6">
				<div class="card o-hidden border-0 shadow-lg my-5">
					<div class="card-body p-0">
						<!-- Nested Row within Card Body -->
						<div class="row">
							<!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
							<div class="col-lg-12">
								<div class="p-5">
									<div class="text-center">
										<h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
									</div>
									<form class="user" method="post" action="<?= base_url('auth'); ?>">
										<div class="form-group">
											<input type="text" class="form-control form-control-user" id="user"
												name="user" aria-describedby="user" placeholder="Enter Username..."
												value="<?= set_value('user'); ?>">
											<?= form_error('user', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="form-group">
											<input type="password" class="form-control form-control-user" id="password"
												name="password" placeholder="Password">
											<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<button type="submit" href="index.html"
											class="btn btn-primary btn-user btn-block">
											Login
										</button>
									</form>
									<!-- <hr>
									<div class="text-center">
										<a class="small" href="<?=base_url()?>auth/register">Create an Account!</a>
									</div> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
