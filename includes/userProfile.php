<?php

    include "../class/User.php";

    session_start();
    if(empty($_SESSION['loginUser'])){
        echo "<script>alert('Ainda não logado, acesso negado');
                var frameElement = document.getElementById('pageContent');
                frameElement.contentWindow.location.href = 'home.php';
              </script>";
    }
    
    $userInformations = unserialize($_SESSION['loginUser']);
?>

<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="../css/style.css" rel='stylesheet' type='text/css' />
	<link href="../css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/icon-font.css" type='text/css' />
	<script src="../js/jquery-2.1.4.js"></script>
    <script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<script src="js/bootstrap.js"></script>

<br><br>
							<div class="sign">
								<div class="sign-left">
									<img src="../images/<?php echo $userInformations->getProfileImage(); ?>" class="imageYFITOPS-size">
									<button><a href="userMusicsMenu.php" target="pageContent"> Suas músicas enviadas! </a></button>
								</div>
								<div class="sign-right">
									<form action="../forms/update.php" method="post" enctype="multipart/form-data">
                                        <h3> Atualizar dados cadastrais </h3>
										<input type="text" name="username" placeholder="Username" required="" value="<?php echo $userInformations->getUsername(); ?>">
										<input type="text" name="email" placeholder="Email" required="" value="<?php echo $userInformations->getEmail(); ?>">
										<input type="password" name="password" placeholder="Senha" required="">
										<input type="text" name="profilename" placeholder="Nome do Perfil" required="" value="<?php echo $userInformations->getProfileName(); ?>">
										<textarea name="biograph" placeholder="Um pouco sobre você..." required=""><?php echo $userInformations->getBiograph(); ?></textarea>
										<input onClick="nameAlert()" type="file" name="profileimage" accept="image/png, image/jpeg">
										<input type="submit" name="update" value="Atualizar Dados">
                                        <input type="submit" name="delete" value="Deletar Dados">
									</form>
								</div>
								<div class="clearfix"></div>
							</div>