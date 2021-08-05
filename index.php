<?php require_once "includes/bankConnection.php"; ?>
<?php require_once "includes/loginVerify.php"; ?>
<?php require_once "class/User.php"; ?>

<!DOCTYPE HTML>
<html>

<head>
	<title>YFITOPS - Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Mosaic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="css/icon-font.css" type='text/css' />
	<script src="js/jquery-2.1.4.js"></script>
</head>

<body class="sticky-header left-side-collapsed" onload="initMap()">
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
								<div class="sign-left">
									<img src="images/YFITOPSREGISTER.jpg" class="imageYFITOPS-size">
								</div>
								<div class="sign-right">
									<form action="forms/register.php" method="post" enctype="multipart/form-data">
										<h3>Crie sua conta! </h3>
										<input type="text" name="username" placeholder="Username" required="">
										<input type="text" name="email" placeholder="Email" required="">
										<input type="password" name="password" placeholder="Senha" required="">
										<input type="text" name="profilename" placeholder="Nome do Perfil" required="">
										<textarea name="biograph" placeholder="Um pouco sobre você..." required=""></textarea>
										<input onClick="nameAlert()" type="file" name="profileimage" accept="image/png, image/jpeg" required="">
										<input type="submit" name="submit" value="Criar Conta">
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
							new UISearch(document.getElementById('sb-search'));
						</script>
						<div class="col-md-4 player">
							<div class="audio-player">
								<iframe name="audioPlayer" src="audioPlayer.html" height="100" width="100%" style="border:none;"></iframe>
							</div>
						</div>
						<?php if($showLoginAndRegister==true){ include 'includes/loginAndRegister.php'; }?>
						<?php if($showLoginAndRegister==false){ include 'includes/getUsernameFromSession.php'; } ?>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div id="page-wrapper">
				<div class="inner-content">
					<div class="music-browse">
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
												<a href="single.html"><img src="images/a3.jpg" title="allbum-name"></a>
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
			<p>&copy 2021 YFITOPS. All Rights Reserved</a></p>
		</footer>
	</section>
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<script src="js/bootstrap.js"></script>
</body>

</html>