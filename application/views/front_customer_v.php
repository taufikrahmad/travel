<?PHP
	$this->load->view('front_header_v');
?>
<main id="main" style="margin-top:7%">
	<?php
		if($message!=""){
	?>
	<div class="demo-wrapper" align="center">
		<h3><?=$message?></h3>
	</div>
	<?php
		$message = "";
		}
	?>
	<div class="inner-top">
		<div class="container">
			<h1 class="inner-main-heading">Login</h1>
		</div>
	</div>
	<div class="inner-main common-spacing container">
		<?php echo form_open('Customer/Sign'); ?>
		<div class="twocol-form">
			<div class="row">
				<div class="col-md-6">
					<div class="top-box">
						<span class="holder height">Login</span>
					</div>
					<div class="form-holder">
						
						<div class="wrap">
							<div class="hold">
								<label for="uname">Username or Email</label>
								<input type="text" id="uname" name="uname" class="form-control">
								</div>
								<div class="hold">
									<label for="pass">Password</label>
									<input type="password" id="pass" name="pass" class="form-control">
									</div>
									<div class="btn-hold">
										<input type="submit" class="btn btn-default" name="submit" value="Login"/>
									</div>
								</div>
								
							</div>
						</div>
						<div class="col-md-6">
							<div class="top-box">
								<span class="holder height">Register</span>
							</div>
							
							<div class="form-holder">
								<div class="wrap">
									<div class="hold">
										<label for="name">Name</label>
										<input type="text" id="name" name="name" class="form-control">
										</div>
										<div class="hold">
											<label for="uname1">Username</label>
											<input type="text" id="uname1" name="uname1" class="form-control">
											</div>
											<div class="hold">
												<label for="email">Email</label>
												<input type="email" id="email" name="email" class="form-control">
												</div>
												<div class="hold">
													<label for="reg-pass">Password</label>
													<input type="password" name="reg-pass" id="reg-pass" class="form-control">
													</div>
													<div class="btn-hold">
														<input type="submit" class="btn btn-default" name="submit" value="Register"/>
													</div>
												</div>
											</div>
							
										</div>
									</div>
								</div>
								<?php form_close();?>
							</div>
						</main>
						<?PHP
	$this->load->view('front_header_v');
?>