

<?php 
session_start();
if(isset($_POST['cerrarSesion'])){
    unset($_SESSION['usuario']);
    header('location:index.php');
}

?>

<?php if(isset($_SESSION['usuario'])) { ?>

<div id="pcoded" class="pcoded">
	<div class="pcoded-overlay-box"></div>
		<div class="pcoded-container navbar-wrapper">

			<nav class="header-navbar pcoded-header" header-theme="theme4">
				<div class="navbar-wrapper">
					
					<div class="navbar-logo">
						<a class="mobile-menu" id="mobile-collapse" href="#!">
							<i class="ti-menu"></i>
						</a>
						
						<a class="mobile-search morphsearch-search" href="#">
							<i class="ti-search"></i>
						</a>

						<a href="index-2.html">
							<img class="img-fluid" src="./plugins/assets/images/logo.png" alt="Theme-Logo" />
						</a>
						
						<a class="mobile-options">
							<i class="ti-more"></i>
						</a>
					</div>


					<div class="navbar-container container-fluid">
						
						<div>
							<ul class="nav-left">
								<li>
									<div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
								</li>

								<li>
									<a href="#!" onclick="javascript:toggleFullScreen()">
										<i class="ti-fullscreen"></i>
									</a>
								</li>
							</ul>

							<ul class="nav-right">
								<li class="user-profile header-notification">
									<a href="#!">
										<img src="./plugins/assets/images/user.png" alt="User-Profile-Image">
										<span><?php echo  $_SESSION['usuario']; ?></span>
										<i class="ti-angle-down"></i>
									</a>
									
									<ul class="show-notification profile-notification">
										<li>
											<a href="#!">
												<i class="ti-settings"></i> Settings
											</a>
										</li>
										<li>
											<a href="user-profile.html">
												<i class="ti-user"></i> Profile
											</a>
										</li>
										<li>
											<a href="email-inbox.html">
												<i class="ti-email"></i> My Messages
											</a>
										</li>
										<li>
											<a href="auth-lock-screen.html">
												<i class="ti-lock"></i> Lock Screen
											</a>
										</li>
										<li>
											<form action="" method="POST" class="dropdown-item">
												<button class="btn btn-danger btn-block" type="submit" name="cerrarSesion"><i class="icofont icofont-plus m-r-0"></i> Salir</button>
 											</form>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</nav>
<?php }else{
        header('Location: login.php');
}
?>