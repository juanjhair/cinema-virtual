<?php @session_start();?>
<?php include 'Extend/Header.php'; ?>
<body class="content-all">
    <!-- SECTION NAV -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
		<div class="container">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#main-menu" aria-cotrols="menu-principal"
                aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a href="#" class="mx-auto">
                <strong class="title text-white">CINEMA VIRTUAL</strong>
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
            <?php if(!isset($_SESSION['code'])){
                ?>
                <a href="#">
                <i class="fa fa-user-circle"></i>
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
    
    <?php if(!isset($_SESSION['code'])) { 
         include PATH_VIEWS.'Login/Login.php'; ?>
    <?php }else { ?>
    
        <!--SECTION OPTIONS -->

    <section class="options text-white">    
        <div class="container">
            <div class="row">
                <div class="col-2 col-sm-2 offset-sm-1 col-md-3 text-center" >
                    <div class="row">
                        <div class="col-12 d-flex mb-4 option">
                            <div class="card bg-dark flex-fill" id="rooms">
                                <div class="card-title" id="title-room">CINEMA'S ROOM</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex mb-4 option" >
                            <div class="card bg-success flex-fill" id="movies">
                                <div class="card-title" id="title-movie">MOVIES</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12 d-flex mb-4 option">
                            <div class="card bg-danger flex-fill" id="movies-premiere">
                                <div class="card-title" id="title-premiere">MOVIES PREMIERE</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex mb-4 option">
                            <div class="card bg-warning flex-fill">
                                <div class="card-title" id="title-sold">TICKETS SOLD</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex mb-4 option">
                            <div class="card bg-secondary flex-fill">
                                <div class="card-title" id="title-cinema">CINEMAS</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex mb-4 option">
                            <div class="card bg-info flex-fill">
                                <div class="card-title" id="title-about">ABOUT US</div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-10 col-sm-9 col-md-8">
                    <div id="content" class="content" >
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    <?php } ?>
    <?php include 'Extend/Footer.php';?>
    <?php include 'Extend/Scripts.php';?>
    </body>
    </html>
