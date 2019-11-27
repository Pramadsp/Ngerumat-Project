<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Dashboard</title>

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
	<script src="<?=base_url()?>assets/ngerumat/js/plugins/visualization/d3/d3.min.js"></script>
	<script src="<?=base_url()?>assets/ngerumat/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script src="<?=base_url()?>assets/ngerumat/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="<?=base_url()?>assets/ngerumat/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script src="<?=base_url()?>assets/ngerumat/js/plugins/ui/moment/moment.min.js"></script>
	<script src="<?=base_url()?>assets/ngerumat/js/plugins/pickers/daterangepicker.js"></script>

	<script src="<?=base_url()?>assets/ngerumat/js/app.js"></script>
	<script src="<?=base_url()?>assets/ngerumat/js/demo_pages/dashboard.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-light navbar-static">

		<!-- Header with logos -->
		<div class="navbar-header navbar-dark d-none d-md-flex align-items-md-center">
			<div class="navbar-brand navbar-brand-md">
				<a href="index.html" class="d-inline-block">
					<img src="<?=base_url()?>assets/ngerumat/images/logo_light.png" alt="">
				</a>
			</div>
			
			<div class="navbar-brand navbar-brand-xs">
				<a href="index.html" class="d-inline-block">
					<img src="<?=base_url()?>assets/ngerumat/images/logo_icon_light.png" alt="">
				</a>
			</div>
		</div>
		<!-- /header with logos -->
	

		<!-- Mobile controls -->
		<div class="d-flex flex-1 d-md-none">
			<div class="navbar-brand mr-auto">
				<a href="index.html" class="d-inline-block">
					<img src="<?=base_url()?>assets/ngerumat/images/logo_dark.png" alt="">
				</a>
			</div>	

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>

			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
		</div>
		<!-- /mobile controls -->


		<!-- Navbar content -->
		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-people"></i>
						<span class="d-md-none ml-2">Users</span>
						<span class="badge badge-mark border-pink-400 ml-auto ml-md-0"></span>
					</a>
					
					<div class="dropdown-menu dropdown-content wmin-md-300">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Users online</span>
							<a href="#" class="text-default"><i class="icon-search4 font-size-base"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<img src="<?=base_url()?>assets/ngerumat/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Jordana Ansley</a>
										<span class="d-block text-muted font-size-sm">Lead web developer</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="<?=base_url()?>assets/ngerumat/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Will Brason</a>
										<span class="d-block text-muted font-size-sm">Marketing manager</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-danger"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="<?=base_url()?>assets/ngerumat/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Hanna Walden</a>
										<span class="d-block text-muted font-size-sm">Project manager</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="<?=base_url()?>assets/ngerumat/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Dori Laperriere</a>
										<span class="d-block text-muted font-size-sm">Business developer</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-warning-300"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="<?=base_url()?>assets/ngerumat/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Vanessa Aurelius</a>
										<span class="d-block text-muted font-size-sm">UX expert</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-grey-400"></span></div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer bg-light">
							<a href="#" class="text-grey mr-auto">All users</a>
							<a href="#" class="text-grey"><i class="icon-gear"></i></a>
						</div>
					</div>
				</li>
			</ul>

			<span class="badge bg-pink-400 badge-pill ml-md-3 mr-md-auto">16 orders</span>

			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
						<img src="<?=base_url()?>assets/ngerumat/images/lang/gb.png" class="img-flag mr-2" alt="">
						English
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<a href="#" class="dropdown-item english active"><img src="<?=base_url()?>assets/ngerumat/images/lang/gb.png" class="img-flag" alt=""> English</a>
						<a href="#" class="dropdown-item ukrainian"><img src="<?=base_url()?>assets/ngerumat/images/lang/ua.png" class="img-flag" alt=""> Українська</a>
						<a href="#" class="dropdown-item deutsch"><img src="<?=base_url()?>assets/ngerumat/images/lang/de.png" class="img-flag" alt=""> Deutsch</a>
						<a href="#" class="dropdown-item espana"><img src="<?=base_url()?>assets/ngerumat/images/lang/es.png" class="img-flag" alt=""> España</a>
						<a href="#" class="dropdown-item russian"><img src="<?=base_url()?>assets/ngerumat/images/lang/ru.png" class="img-flag" alt=""> Русский</a>
					</div>
				</li>

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-bubbles4"></i>
						<span class="d-md-none ml-2">Messages</span>
						<span class="badge badge-mark border-pink-400 ml-auto ml-md-0"></span>
					</a>
					
					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Messages</span>
							<a href="#" class="text-default"><i class="icon-compose"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3 position-relative">
										<img src="<?=base_url()?>assets/ngerumat/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>

									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">James Alexander</span>
												<span class="text-muted float-right font-size-sm">04:58</span>
											</a>
										</div>

										<span class="text-muted">who knows, maybe that would be the best thing for me...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3 position-relative">
										<img src="<?=base_url()?>assets/ngerumat/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>

									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Margo Baker</span>
												<span class="text-muted float-right font-size-sm">12:16</span>
											</a>
										</div>

										<span class="text-muted">That was something he was unable to do because...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="<?=base_url()?>assets/ngerumat/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Jeremy Victorino</span>
												<span class="text-muted float-right font-size-sm">22:48</span>
											</a>
										</div>

										<span class="text-muted">But that would be extremely strained and suspicious...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="<?=base_url()?>assets/ngerumat/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Beatrix Diaz</span>
												<span class="text-muted float-right font-size-sm">Tue</span>
											</a>
										</div>

										<span class="text-muted">What a strenuous career it is that I've chosen...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="<?=base_url()?>assets/ngerumat/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Richard Vango</span>
												<span class="text-muted float-right font-size-sm">Mon</span>
											</a>
										</div>
										
										<span class="text-muted">Other travelling salesmen live a life of luxury...</span>
									</div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer bg-light">
							<a href="#" class="text-grey mr-auto">All messages</a>
							<div>
								<a href="#" class="text-grey" data-popup="tooltip" title="Mark all as read"><i class="icon-radio-unchecked"></i></a>
								<a href="#" class="text-grey ml-2" data-popup="tooltip" title="Settings"><i class="icon-cog3"></i></a>
							</div>
						</div>
					</div>
				</li>

				<li class="nav-item dropdown dropdown-user">
					<a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
						<img src="<?=base_url()?>assets/ngerumat/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" height="34" alt="">
						<span><?= $this->session->userdata('username') ?></span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
						<a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
						<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span class="badge badge-pill bg-indigo-400 ml-auto">58</span></a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
						<a href="<?=site_url('logout')?>" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
						
					</div>
				</li>
			</ul>
		</div>
		<!-- /navbar content -->
		
	</div>
	<!-- /main navbar -->

					
	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				Navigation
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">
				
				<!-- User menu -->
				<div class="sidebar-user-material">
					<div class="sidebar-user-material-body">
						<div class="card-body text-center">
							<a href="#">
								<img src="<?=base_url()?>assets/ngerumat/images/placeholders/placeholder.jpg" class="img-fluid rounded-circle shadow-1 mb-3" width="80" height="80" alt="">
							</a>
							<h6 class="mb-0 text-white text-shadow-dark"><?= $this->session->userdata('username'); ?></h6>
							<span class="font-size-sm text-white text-shadow-dark">Santa Ana, CA</span>
						</div>
													
						<div class="sidebar-user-material-footer">
							<a href="#user-nav" class="d-flex justify-content-between align-items-center text-shadow-dark dropdown-toggle" data-toggle="collapse"><span>My account</span></a>
						</div>
					</div>

					<div class="collapse" id="user-nav">
						<ul class="nav nav-sidebar">
							<li class="nav-item">
								<a href="#" class="nav-link">
									<i class="icon-user-plus"></i>
									<span>My profile</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">
									<i class="icon-coins"></i>
									<span>My balance</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">
									<i class="icon-comment-discussion"></i>
									<span>Messages</span>
									<span class="badge bg-success-400 badge-pill align-self-center ml-auto">58</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">
									<i class="icon-cog5"></i>
									<span>Account settings</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">
									<i class="icon-switch2"></i>
									<span>Logout</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- /user menu -->
	
				
				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">
                        <!--li class="nav-item">
							<a href="index.html" class="nav-link active">
								<i class="icon-home4"></i>
								<span>
									Dashboard
								</span>
							</a>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-copy"></i> <span>Layouts</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a href="index.html" class="nav-link active">Default layout</a></li>
								<li class="nav-item"><a href="../../../../layout_2/LTR/material/full/index.html" class="nav-link">Layout 2</a></li>
								<li class="nav-item"><a href="../../../../layout_3/LTR/material/full/index.html" class="nav-link">Layout 3</a></li>
							</ul>
						</li-->
						 <?php 
						 
						 function get_menu($data, $parent_id = 0){
							 static $i = 1;
							 $tab = str_repeat("", $i);
							 $data[$parent_id] = isset($data[$parent_id]) ? $data[$parent_id] : null;
							 if ($data[$parent_id]){
								 $html = "";//"$tab<li class='nav-item'>";
								 $i++;
								 foreach ($data[$parent_id] as $v) {
									 $child = get_menu($data, $v->id_modul);

									 $id = strtolower($v->name);

									 $uriactnow = explode("/",$_SERVER['REQUEST_URI']);
									 if(empty($uriactnow[2])){
										 $uriactnow[2]='dashboard';
									 }
									 if($uriactnow[2]==$v->link){
										 $openafter = 'true';
										 $active = 'active';
									 }else{
										 $openafter = '';
										 $active = '';
									 }
                                    
									 if($child){
										$cls='nav-item-submenu';
									 }else{
										$cls='';
									 }

									 $html .= "$tab<li id='$id' class='nav-item $cls'>";
									 if ($v->parent_id==0 && $child!=null){
										 	$link='javascript:;';
									 }	else{
										 if ($child!=null){
											 $link='javascript:;';
										 } else {
											 $link=site_url($v->link);
										 }
									 }

								 $html .= "<a href='$link' class='nav-link $active'><i class='".$v->icon."'></i> <span>".$v->name."</span></a>";
								 if ($child) {
									 $i--;
									 $html .= "<ul  class='nav nav-group-sub'>$child";
									 
									 $html .= "$tab</ul>";
                                     }
									 
									 $html .= "</li>";}
									 
									 $html .= "$tab</li>";
									 return $html;
								 }else {
									 return false;
								 }
					}

								 $data = array();
								 if (is_array($menu) || is_object($menu)) {
									 foreach ($menu as $v) {
										 $data[$v->parent_id][] = $v;
									 }
									}
								 
								 $prime = get_menu($data);
								 echo "$prime";
						 ?>
					</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->
			
		</div>
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Dashboard</h4>
					</div>
				</div>
			</div>
      <!-- /page header -->
      

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
					<span class="navbar-text">
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
