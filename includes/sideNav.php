<div class="left-side sticky-left-side">
    <div class="logo">
        <h1><a href="includes/home.php" target="pageContent">YFITOPS</a></h1>
    </div>
    <div class="logo-icon text-center">
            <a href="includes/home.php" target="pageContent">Y</a>
    </div>
    <div class="left-side-inner">
        <ul class="nav nav-pills nav-stacked custom-nav">
            <li><a href="includes/home.php" target="pageContent"><i class="lnr lnr-home"></i><span>Home</span></a></li> 
            <li><a href="includes/musicsByGender.php" target="pageContent"><i class="lnr lnr-music-note"></i><span>Por Genero</span></a></li>						
            <li><a href="includes/favorites.php" target="pageContent"><i class="lnr lnr-heart"></i><span>Favoritos</span></a></li>
            <li><a href="includes/addMusic.php"  target="pageContent"><i class="lnr lnr-tablet"></i><span>Adicione Sua Musica</span></a></li>
            <li><a href="includes/userProfile.php" target="pageContent">
                <?php if($showLoginAndRegister==true){ ?>
                <i class="lnr lnr-user"></i>
                <?php } if($showLoginAndRegister==false){ 
                    include 'includes/getProfileImageFromSession.php';
                }?>
                <span>Perfil</span></a></li>    
        </ul>
    </div>
</div>