<?php
    include "../class/User.php";
    require_once "bankConnection.php";

    if(!empty($_GET['idToDelete'])){
        $query = "DELETE FROM Musics WHERE idMusics = ".$_GET['idToDelete'];
        mysqli_query($dataBase,$query) or die(mysqli_error($dataBase));
    }

    session_start();
    $userInformations = unserialize($_SESSION['loginUser']);

    $query = "SELECT * FROM Musics WHERE User_iduser = ".$userInformations->getIdUser();
    $result = mysqli_query($dataBase,$query) or die(mysqli_error($dataBase));
?>

<br>
<table border="1">
    <tr>
        <th>Identificador</th>
        <th>Nome Musica</th>
        <th>Arquivo Música</th>
        <th>Ação</th>
    </tr>
    <?php
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$row['idMusics']."</td>";
            echo "<td>".$row['musicname']."</td>";
            echo "<td>".$row['filename']."</td>";
            echo "<td><a href='userMusicsMenu.php?idToDelete=".$row['idMusics']."' target='pageContent'> Deletar Musica </a></td></tr>";
        }
    ?>
</table>