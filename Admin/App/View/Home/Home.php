<?php @session_start();?>
<?php include 'Extend/Header.php'; ?>

<body class="content">
    <!-- SECTION NAV -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
		<div class="container">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#main-menu" aria-cotrols="menu-principal"
                aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a href="#" class="mx-auto">
                <strong class="title"><?php echo $name ?></strong>
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
            <?php if(!isset($_SESSION['admin_code'])){
                ?>
                <a href="#">
                <i class="fa fa-user-circle"></i>
                </a> 
            <?php } else { ?>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle text-white" id="perfil" role="button" data-toggle="dropdown" 
                            aria-haspopup="true" aria-expanded="false">
                        <img src="<?php echo $_SESSION['admin_photo'] ?>" width="35" height="35" class="rounded-circle" alt="">        
                    </a>
                <div class="dropdown-menu" aria-labelledby="perfil">
                    <a href="#" class="dropdown-item">Perfil</a>
                    <a href="#" class="dropdown-item" id=logout>Salir</a>   
                </div>
            </div>
            <?php } ?> 
        </div>
    </nav>
    
    <?php if(!isset($_SESSION['admin_code'])) { 
         include PATH_VIEWS.'Login/Login.php'; ?>
    <?php }else { ?>
    
        <!--SECTION OPTIONS -->

    <section class="options text-white">    
        <div class="container">
            <div class="row">
                <div class="col-3 text-center" >
                    <div class="row">
                        <div class="col-12 d-flex mb-4 option">
                            <div class="card bg-dark flex-fill" id="rooms">
                                <div class="card-body">
                                <h5 class="card-title">CINEMA'S ROOM</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex mb-4 option" >
                            <div class="card bg-success flex-fill" id="movies">
                                <div class="card-body">
                                    <h5 class="card-title" >MOVIES</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12 d-flex mb-4 option">
                            <div class="card bg-danger flex-fill" id="movies-premiere">
                                <div class="card-body">
                                    <h5 class="card-title">MOVIES PREMIERE</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex mb-4 option">
                            <div class="card bg-warning flex-fill">
                                <div class="card-body">
                                    <h5 class="card-title">TICKETS SOLD</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex mb-4 option">
                            <div class="card bg-secondary flex-fill">
                                <div class="card-body">
                                    <h5 class="card-title">CINEMAS</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex mb-4 option">
                            <div class="card bg-info flex-fill">
                                <div class="card-body ">
                                    <h5 class="card-title">ABOUT US</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-9">
                    <div id="content">
                    </div>
                </div>
                <input type="hidden" value="<?php echo $_SESSION['admin_id']; ?>" id="admin_id">
                
            </div>
        </div>
    </section>
    <?php } ?>
    <?php include 'Extend/Footer.php';?>
    <?php include 'Extend/Scripts.php';?>
    </body>
    </html>
