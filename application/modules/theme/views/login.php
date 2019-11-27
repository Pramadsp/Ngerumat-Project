
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?=base_url()?>assets/ngerumat/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url()?>assets/ngerumat/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url()?>assets/ngerumat/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url()?>assets/ngerumat/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url()?>assets/ngerumat/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url()?>assets/ngerumat/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="<?=base_url()?>assets/ngerumat/js/main/jquery.min.js"></script>
	<script src="<?=base_url()?>assets/ngerumat/js/main/bootstrap.bundle.min.js"></script>
	<script src="<?=base_url()?>assets/ngerumat/js/plugins/loaders/blockui.min.js"></script>
	<script src="<?=base_url()?>assets/ngerumat/js/plugins/ui/ripple.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="<?=base_url()?>assets/ngerumat/js/plugins/forms/validation/validate.min.js"></script>
	<script src="<?=base_url()?>assets/ngerumat/js/plugins/forms/styling/uniform.min.js"></script>

	<script src="<?=base_url()?>assets/ngerumat/js/app.js"></script>
	<script src="<?=base_url()?>assets/ngerumat/js/demo_pages/login_validation.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-light navbar-static">
		<div class="navbar-brand">
			<a href="<?=site_url('dashboard')?>" class="d-inline-block">
				<img src="<?=base_url()?>assets/ngerumat/images/logo.png" alt="" >
			</a>
		</div>

		<div class="d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
				</div>
			</div>
		</li>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper">

        <?=$yield ?>


			<!-- Footer -->
			<div class="navbar navbar-expand-lg navbar-light">
				<div class="text-center d-lg-none w-100">
					<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
						<i class="icon-unfold mr-2"></i>
						Footer
					</button>
				</div>

				<div class="navbar-collapse collapse" id="navbar-footer">	
					<span class="navbar-text center">
						&copy; 2019- 2020. <a href="#">Jalin Mitra</a>
					</span>
				</div>
			</div>
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
