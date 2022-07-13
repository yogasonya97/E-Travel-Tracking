<!-- BEGIN HEADER-->
		<header id="header" >
			<div class="headerbar">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="headerbar-left">
					<ul class="header-nav header-nav-options">
						<li class="header-nav-brand" >
							<div class="brand-holder">
								<a href="#">
									<span id="Logo" class="svg">
						<img src="<?php echo URL; ?>assets/admin/img/logo.png" />
					</span>
								</a>
							</div>
						</li>
						<li>
							<a class="btn btn-icon-toggle menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
								<i class="fa fa-bars"></i>
							</a>
						</li>
					</ul>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="headerbar-right">
					<ul class="header-nav header-nav-options">
						
						

					

 					

						
					</ul><!--end .header-nav-options -->
					
					<ul class="header-nav header-nav-profile">
						<li class="dropdown">
							<a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">
								<img src="" alt="" />
								<span class="profile-info">
									<?php echo Session::get('userName'); ?>
									<small>OWNER</small>
								</span>
							</a>
							
							
							<ul class="dropdown-menu animation-dock">
								<li><a href="<?php echo URL; ?>systemUser/changePassword"><i class="fa fa-fw fa-power-off text-danger"></i> Ubah Password</a></li>
								<li><a href="<?php echo URL; ?>login/logout"><i class="fa fa-fw fa-power-off text-danger"></i> Logout(<?php echo Session::get('userName'); ?>)</a></li>
							</ul><!--end .dropdown-menu -->
						</li><!--end .dropdown -->
					</ul><!--end .header-nav-profile -->
					<!--<ul class="header-nav header-nav-toggle">
						<li>
							<a class="btn btn-icon-toggle btn-default" href="#offcanvas-search" data-toggle="offcanvas" data-backdrop="false">
								<i class="fa fa-ellipsis-v"></i>
							</a>
						</li>
					</ul>--><!--end .header-nav-toggle -->
				</div><!--end #header-navbar-collapse -->
			</div>
		</header>
		<!-- END HEADER-->