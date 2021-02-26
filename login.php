<?php
    if(isset($_POST["Submit"])){
        $email = $_POST["email"];
        $password = $_POST["Password"];
        if (empty($email)) {
            array_push($errors, "Username is required");
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
        }
        if (count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
            $results = mysqli_query($db, $query);
            if (mysqli_num_rows($results) == 1) {
              $_SESSION['email'] = $email;
              $_SESSION['success'] = "You are now logged in";
              header('location: /Homepage/index.php');
            }else {
                array_push($errors, "Wrong email or password combination");
            }
        }
    }
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">-->
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>

    <div class="container">
        <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
            <div class="card-body">
                <h5 class="card-title text-center">Sign In</h5>
                <form class="form-signin">
                <div class="form-label-group">
                    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                    <label for="inputEmail">Email address</label>
                </div>

                <div class="form-label-group">
                    <input type="password" id="inputPassword" name="Password" class="form-control" placeholder="Password" required>
                    <label for="inputPassword">Password</label>
                </div>

                <!--<div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Remember password</label>
                </div>-->
                <button class="btn btn-lg btn-primary btn-block text-uppercase" name="Submit" type="submit">Sign in</button>
                

                </form>
            </div>
            </div>
        </div>
        </div>
    </div>


<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>