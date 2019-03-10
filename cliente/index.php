
<?php @session_start();?>
<?php include 'extend/header.php'; ?>
   
<body>
    <!-- SECTION NAV -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
		<div class="container">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#main-menu" aria-cotrols="menu-principal"
                aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a href="#" class="navbar-brand">
                <strong class="">CINEMA VIRTUAL</strong>
            </a>
            <div class="collapse navbar-collapse" id="main-menu">
                <ul class="navbar-nav ml-auto mr-5" >
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">Movies</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Cinemas</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">About Us</a>
                    </li>
                </ul>
            </div>
            <?php if(!isset($_SESSION['email'])){
                ?>
                <a href="#">
                <i class="fa fa-user-circle" data-toggle="modal" data-target=".modal_mas" 
                id="openBtn" onclick="modal()"></i>
                </a> 
            <?php } else { ?>
                <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle text-white" id="perfil" role="button" data-toggle="dropdown" 
                        aria-haspopup="true" aria-expanded="false">
                    <img src="<?php echo $_SESSION['photo'] ?>" width="35" height="35" class="rounded-circle" alt="">        
                </a>
                <div class="dropdown-menu" aria-labelledby="perfil">
                    <a href="#" class="dropdown-item">Perfil</a>
                    <a href="#" class="dropdown-item" id=logout>Salir</a>   
                </div>
            </div>
            <?php } ?> 
           
            
        </div>
    </nav>

    <!-- SECTION SLIDE -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner ">
            <div class="carousel-item active imgnormalizada">
                <img class="img-item" src="images/fondo_login1.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Pelicula</h5>
                    <p>Hola</p>
                </div>
            </div>
            <div class="carousel-item imgnormalizada">
                <img class="img-item" src="images/fondo_login2.jpg." alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Pelicula</h5>
                    <p>Hola</p>
                </div>
            </div>
            <div class="carousel-item imgnormalizada">
                <img class="img-item" src="images/fondo_login5.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Pelicula</h5>
                    <p>Hola</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- SECTION MODAL LOGIN -->
    <div class="modal fade modal_mas" id="modal-login" tabindex="-1" role="dialog" >
        <div class="modal-dialog ">
            <div class="modal-content" style="background-color:#f3f3f3;">
                <div id="modal-content" ></div>
            </div>
        </div>
    </div>

    <footer class="footer text-center">
     <div class="container">
         <p>2016
            <i class="fa fa-copyright"></i>
            Todos los derechos reservador
        </p>
     </div>

     <!-- SECTION MOVIES -->
    </footer>
    <?php include 'extend/footer_scripts.php';?>
    </body>
    </html>

    