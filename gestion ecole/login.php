<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
  <link rel="stylesheet" href="./css/login.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
    <style>
      .bg{
       width: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url(./img/bg-login.jpg);
    background-position: center;
    background-size: cover;
    height: 100vh;
      }

    </style>

</head>

<body>

  <section class="vh-100  bg " >
    <div class="container py-5 h-90">
      <div class="row d-flex justify-content-center align-items-center h-90">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem  shadow-lg p-3 mb-5 bg-body-tertiary rounded">
            <div class="card-body p-5 text-center">
              <h3 class="login-heading mb-4">Welcome back!</h3>

              <!-- Sign In Form -->
              <form class="login100-form validate-form" method="post">
                <div class="form-floating mb-3">
                  <input type="email" class="form-control form-control-lg" id="floatingInput" name="email"
                    placeholder="name@example.com">
                  <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                  <label for="floatingPassword">Password</label>
                </div>

                <div class="form-check d-flex justify-content-start  mt-3 mb-3">
                  <input class="form-check-input" type="checkbox" name="password" value="" id="form1Example3" />
                  <label class="form-check-label" for="form1Example3"> Remember password </label>
                </div>

                <div class="d-grid m-5">
                  <button class="btn btn-lg btn-outline-primary btn-login text-uppercase fw-bold mb-2" name="login"
                    type="submit">login</button>
    
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
      integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
      crossorigin="anonymous"></script>



</body>

</html>

<?php

if (isset($_POST['login'])) {
  $name = "root";
$passcn = "";
$Connexion = new PDO ("mysql:host=localhost;dbname=ahmed_db;charset=utf8;", $name, $passcn);


 $login = $Connexion->prepare("SELECT * from info WHERE email=:email AND pass =:pass");
 $login->bindParam('pass',$_POST['password']);
 $login->bindParam('email',$_POST['email']);
 $login->execute();
  $count = ($login->rowCount());
  // echo $count;
  if($count === 1){
     $user = $login->fetchObject();
    echo "vous avez connecte sur votre compte ".$user->name;
    
  }
  else{
    echo  "votre mode pass ou email est incorrect";
  }

 
// if($login->rowCount() == 1) {
//     
//     //   $user = $login->fetchObject();
//     //   if ($user->ACTIVATED === true) {
//     //     echo "votre compte est verifé";
//     //     echo "<h1>bonjout </h1>" . $user->$Name;
//     //   } else {
//     //     echo "veuillez verifez votre compte ";
//     //   }
//     // }

//   }
//   else{
//     echo  "incorecte";
//   }
}
?>