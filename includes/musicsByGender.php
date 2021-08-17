<?php
	require_once "bankConnection.php";
   
    $query = "SELECT * FROM Gender";
    $resulGenders = mysqli_query($dataBase, $query) or die(mysqli_error($dataBase));

	if(!empty($_POST['submit'])){
		$query = "SELECT * FROM Musics Where G_idgender =".$_POST['idGender'];
        $filtroSelecionado = $_POST['idGender'];
	}
	else{
		$query = "SELECT * FROM Musics ORDER BY idMusics DESC";
	}
	
	$resultMusic = mysqli_query($dataBase,$query) or die(mysqli_error($dataBase));
?>

<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="../css/style.css" rel='stylesheet' type='text/css' />
	<link href="../css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/icon-font.css" type='text/css' />
	<script src="../js/jquery-2.1.4.js"></script>
    <script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<script src="js/bootstrap.js"></script>

<div id="page-wrapper">
				<div class="inner-content">
					<div class="music-browse">
						<div class="browse">
							<div class="tittle-head two">
								<h3 class="tittle">Buscar por Genero:</h3>
								<div class="clearfix"> </div>
							</div>
                            <form action="musicsByGender.php" method="post" target="pageContent">
								<fieldset id="body">
									<select name="idGender">
                                        <?php 
                                            while($row = mysqli_fetch_array($resulGenders)){
                                                if($row['idGender'] == $filtroSelecionado){
                                                    echo "<option selected value='".$row['idGender']."'> ".$row['namegender']." </option>";   
                                                }
                                                else{
                                                    echo "<option value='".$row['idGender']."'> ".$row['namegender']." </option>";
                                                }
                                            }
                                        ?>
                                    </select>
                                    <input type="submit"  name="submit" value="Filtrar">
								</fieldset>
							</form>
							<?php require_once "showMusics.php"; ?>
						</div>
					</div>
				</div>
			</div>