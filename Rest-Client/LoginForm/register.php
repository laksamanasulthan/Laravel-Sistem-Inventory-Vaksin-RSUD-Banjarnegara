<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Sistem Inventory Vaksin RSUD Banjarnegara</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Register</h3>
              <p class="d-block text-left my-4 text-muted">Sistem Inventory Vaksin RSUD Banjarnegara</p>
            </div>

            <form action="../aksi_register.php" method="POST">

              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username">
              </div>
              <div class="form-group first">
                <label for="username">E-mail</label>
                <input type="text" class="form-control" name="email">
              </div>
              <div class="form-group first">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password">
              </div>
              <div class="form-group last mb-4">
                <label for="password">Confirm Password</label>
                <input type="password" class="form-control" name="crf_password">
              </div>
              
              
              <div class="d-flex mb-5 align-items-center">

                <span class="ml-auto"><a href="login.php" class="forgot-pass">Already Had an Account?</a></span>
                
              </div>

              <input type="submit" value="Register" class="btn btn-block btn-primary">

              <span class="d-block text-left my-4 text-muted">RSUD Hj. Anna Lesmana</span>
              
            </form>


            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>