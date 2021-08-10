<?php

    include "../class/User.php";
    include "../class/Gender.php";
    require_once "../includes/bankConnection.php";

    function getGenders($dataBase){
        $genders = array();
        $query = "SELECT * FROM Gender";
        $result = mysqli_query($dataBase,$query);
        while($row = mysqli_fetch_array($result)){
            $gender = new Gender($row['idGender'], $row['namegender']);
            array_push($genders,$gender);
        }
        return $genders;
    }

    session_start();
    if(empty($_SESSION['loginUser'])){
        echo "<script>alert('Ainda não logado, acesso negado');
                var frameElement = document.getElementById('pageContent');
                frameElement.contentWindow.location.href = 'home.php';
              </script>";
    }
    
    $genders = getGenders($dataBase);
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
									<img src="../images/disco.jpg" class="imageYFITOPS-size">
								</div>
								<div class="sign-right">
									<form action="../forms/registerMusic.php" method="post" enctype="multipart/form-data">
                                        <h3> Cadastre sua musica: </h3>
										<input type="text" name="musicname" placeholder="Nome da Musica" required><br>
                                        <label>Insira o arquivo da música</label>
                                        <input type="file" name="filename" accept="audio/mp3, audio/ogg" required>
                                        <input type="text" name="authorname" placeholder="Autor da Musica" required><br>
                                        <label>Insira uma imagem de capa para a música</label>
                                        <input type="file" name="imagefile" accept="image/png, image/jpeg" required><br>
                                        <label>Selecione um genero: </label>
										<select name="gender">
                                            <?php
                                                foreach($genders as $gender){
                                                    echo "<option value=".$gender->getIdGender().">".$gender->getName()."</option>";
                                                }
                                            ?>
                                        </select>
										<input type="submit" name="cadastrar" value="Cadastrar Musica">
                                        <input type="reset" name="limpar" value="Limpar Campos">
									</form>
								</div>
								<div class="clearfix"></div>
							</div>