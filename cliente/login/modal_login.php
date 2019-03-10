<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ecommerce</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css"> 
</head>
<body>
    <div class="modal-header" >
        <div class="container">
            <h1 class=" display-5 text-center text-dark">LOGIN</h1>
        </div>
        <button type="button" class="close px-1 pt-0" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body" >
    
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="#">
                        <div class="form-group font-weight-bold text-dark">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control form-control-lg" id="email" placeholder="Enter email">
                        </div>
                        <div class="form-group font-weight-bold text-dark">
                            <label for="pass">Password</label>
                            <input type="password" class="form-control form-control-lg" id="btn-pass" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-success btn-lg btn-block mt-4 mb-2">Submit</button>
                    </form>
                    
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-6 ">
                    <div class="form-group">
                        <button id="btn-Google" class="btn btn-danger btn-lg btn-block "><i class="fab fa-google" onclick="IngresoGoogle()"></i> Google</button>
                    </div>
                </div>
                <div class="col-6 ">
                    <div class="form-group">
                        <button id="btn-Facebook" class="btn btn-primary btn-lg btn-block"><i class="fab fa-facebook-f"></i> Facebook</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="js/firebase.js"></script>  
    <script src="js/events.js"></script>
  
</body>

</html>

        