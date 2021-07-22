<?php  require_once "includes/bankConnection.php";?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>YFITOPS - Home</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Mosaic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<link href="css/font-awesome.css" rel="stylesheet"> 
		<link rel="stylesheet" href="css/icon-font.css" type='text/css' />
		<script src="js/jquery-2.1.4.js"></script>
	</head> 
 	<body class="sticky-header left-side-collapsed"  onload="initMap()">
    	<section>
      	<?php require_once "includes/sideNav.php"; ?>		
			<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="sign-grids">
								<div class="sign">
									<div class="sign-right">
									    <form action="#" method="post">
											<h3>Crie sua conta! </h3>
											<input type="text" name="username" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
											<input type="text" name="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email id';}" required="">	
											<input type="password" name="password" value="Senha" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">											
											<input type="submit" value="Criar Conta">
										</form>
									</div>
									<div class="clearfix"></div>								
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<div class="main-content">
			<div class="header-section">
			<a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
				<div class="menu-right">
					<div class="profile_details">		
						  <div class="col-md-4 serch-part">
								<div id="sb-search" class="sb-search">
								   <form action="#" method="post">
										<input class="sb-search-input" placeholder="Search" type="search" name="search" id="search">
										<input class="sb-search-submit" type="submit" value="">
										<span class="sb-icon-search"> </span>
									</form>
								</div>
							</div>
									<script src="js/classie.js"></script>
									<script src="js/uisearch.js"></script>
										<script>
											new UISearch( document.getElementById( 'sb-search' ) );
										</script>
                                            <div class="col-md-4 player">
	                                            <div class="audio-player">
											        <iframe name="audioPlayer" src="audioPlayer.html" height="100" width="100%" 
                                                    style="border:none;"></iframe>
                                                </div>
                                            </div>
											<div class="col-md-4 login-pop">
												<div id="loginpop"><a href="#" id="loginButton"><span>Login <i class="arrow glyphicon glyphicon-chevron-right"></i></span></a><a id="loginButton" href="#" data-toggle="modal" data-target="#myModal5"><span>Cadastre-se <i class="arrow glyphicon glyphicon-chevron-right"></i></span></a>
														<div id="loginBox"> 
													<form action="#" method="post" id="loginForm">										
																	<fieldset id="body">
																		<fieldset>
																			  <label for="email">Email</label>
																			  <input type="text" name="email" id="email">
																		</fieldset>
																		<fieldset>
																				<label for="password">Senha</label>
																				<input type="password" name="password" id="password">
																		 </fieldset>
																		<input type="submit" id="login" value="Logar">
																		<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Lembrar senha</i></label>
																	</fieldset>
																<span><a href="#">Esqueceu sua senha?</a></span>
														 </form>
													</div>
												</div>
											</div>
										<div class="clearfix"> </div>
								</div>
						</div>
					<div class="clearfix"></div>
				</div>
			<div id="page-wrapper">
				<div class="inner-content">
				      <div class="music-browse">
							<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all">
							<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
							 <script>
									$(document).ready(function() {
									$('.popup-with-zoom-anim').magnificPopup({
										type: 'inline',
										fixedContentPos: false,
										fixedBgPos: true,
										overflowY: 'auto',
										closeBtnInside: true,
										preloader: false,
										midClick: true,
										removalDelay: 300,
										mainClass: 'my-mfp-zoom-in'
									});
									});
							</script>		
						<div class="browse">
								<div class="tittle-head two">
									<h3 class="tittle">Recem Adicionadas! <span class="new">NOVIDADES</span></h3>
									<div class="clearfix"> </div>
								</div>
								<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
								<div id="myTabContent" class="tab-content">
								  <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
									<div class="browse-inner">
									<div class="col-md-3 artist-grid">
										<a  href="single.html"><img src="images/a3.jpg" title="allbum-name"></a>
										<a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="art" href="audioPlayer.html" target="audioPlayer">Sukhwinder singh</a>
									</div>
									</div>
								  </div>
								</div>
							</div>
						</div>		
						</div>
						</div>
						</div>
							<div class="clearfix"></div>
					</div>
			<footer>
			   <p>&copy 2021 YFITOPS. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts.</a></p>
			</footer>
   	</section>
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<script src="js/bootstrap.js"></script>
	</body>
</html>