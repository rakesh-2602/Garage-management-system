<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Martial Arts Management System</title>
  <link rel="shortcut icon" type="image/png" href="assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="index.php" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="assets/images/logos/logo.jpg" width="180" alt="">
                </a>
                <p class="text-center">Martial Arts</p>
                <form action="#" method="POST">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="email" id="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control" id="exampleInputPassword1">
                  </div>
                  
                  <button class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" name="signin" type="submit">Sign In</button>
                  
                </form>
                <?php
                if(isset($_POST['signin'])) {
                    error_reporting(1);
                    include("config.php");
                    $email=$_POST['email'];
                    $password=$_POST['password'];
                    $sql="select * from admin where email='".$email."' and password='".$password."'";
                    $result=mysqli_query($con,$sql);
                    $count=mysqli_num_rows($result);
                    if($count>0) {
                        session_start();
                        $_SESSION['supadmin']=$email;
                        $aid=$_SESSION['supadmin'];
                        echo "<script>
                        alert('Login Successful as $aid');
                        </script>";
                        echo "<script> location.href='home.php'; </script>";
                    } else {
                        echo "<script>
                        alert('Invalid Email or Passwords');
                        </script>";
                    }
                }
                ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
