<?php require_once "admin_header.php"; ?>

<body>
	<section class="admin_enter">
		<div class="container">
			<div class="admin_enter__modal" id="admin_start_modal">
				<div class="admin_enter_logo">
					<img src="../img/logo_admin1.png" alt="">
				</div>
				<p class="admin_enter__title">Hello. Welcome to admin panel Sapsan Magazine</p>
				<div class="admin_enter__form">
					<input type="text" value="" placeholder="Login">
					<input type="password" value="" placeholder="Password">
					<div class="admin_enter__controls">
						<div class="admin_enter__forgot_pass">
							<label>
								<input class="checkbox" type="checkbox" name="forgot_pass">
								<span class="checkbox-custom"></span>
								<span class="label">Forgot password</span>
							</label>
						</div>
						<a href="#" class="admin_enter__link" id="admin_enter">Enter</a>
					</div>
				</div>
			</div>

			<div class="admin_enter__modal admin_enter_success" id="admin_success_modal">
				<div class="admin_enter_logo">
					<img src="../img/logo_admin1.png" alt="">
				</div>
				<p class="admin_enter__title">Done! Welcome, Edward!</p>

				<div class="admin_enter__form">
					<div class="admin_enter__controls">
						<a href="#" id="back_autorize">Back</a>
						<a href="admin_panel.php" id="to_admin_panel">Admin panel</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<script src="../node_modules/jquery/dist/jquery.min.js"></script>
	<script src="../js/admin_common.js"></script>
</body>
</html>