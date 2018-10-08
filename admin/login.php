<?php

session_start();


if (isset($_SESSION['name'])){

    header('Location: index.php');
}


?>
<?php include '../connect.php';?>
<?php

if (isset($_POST['login'])){


    if (isset($_POST['email']) && isset($_POST['password'])){

      $email = $_POST['email'];
      $password = $_POST['password'];
      $query_login = "select * from admin WHERE email='$email' AND password='$password'";

      if (!empty($email) && !empty($password)){


          if ($connect->query($query_login)->num_rows >0){

              $ans = $connect->query($query_login);

              $result = $ans->fetch_assoc();

              $_SESSION['name'] = $result['name'];



          }


      }




    }




}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

    <style>

        /**
 * 01/28/2016
 * This pen is years old, and watching at the code after all
 * those years made me fall from my chair, so I:
 * - changed all IDs to classes
 * - converted all units to pixels and em units
 * - changed all global elements to classes or children of
 *   .login
 * - cleaned the syntax to be more consistent
 * - added a lot of spaces that I so hard tried to avoid
 *   a few years ago
 *   (because it's cool to not use them)
 * - and probably something else that I can't remember anymore
 *
 * I sticked to the same philosophy, meaning:
 * - the design is almost the same
 * - only pure HTML and CSS
 * - no frameworks, preprocessors or resets
 */

        /* 'Open Sans' font from Google Fonts */
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);

        body {
            background: #456;
            font-family: 'Open Sans', sans-serif;
        }

        .login {
            width: 400px;
            margin: 16px auto;
            font-size: 16px;
        }

        /* Reset top and bottom margins from certain elements */
        .login-header,
        .login p {
            margin-top: 0;
            margin-bottom: 0;
        }

        /* The triangle form is achieved by a CSS hack */
        .login-triangle {
            width: 0;
            margin-right: auto;
            margin-left: auto;
            border: 12px solid transparent;
            border-bottom-color: #28d;
        }

        .login-header {
            background: #28d;
            padding: 20px;
            font-size: 1.4em;
            font-weight: normal;
            text-align: center;
            text-transform: uppercase;
            color: #fff;
        }

        .login-container {
            background: #ebebeb;
            padding: 12px;
        }

        /* Every row inside .login-container is defined with p tags */
        .login p {
            padding: 12px;
        }

        .login input {
            box-sizing: border-box;
            display: block;
            width: 100%;
            border-width: 1px;
            border-style: solid;
            padding: 16px;
            outline: 0;
            font-family: inherit;
            font-size: 0.95em;
        }

        .login input[type="email"],
        .login input[type="password"] {
            background: #fff;
            border-color: #bbb;
            color: #555;
        }

        /* Text fields' focus effect */
        .login input[type="email"]:focus,
        .login input[type="password"]:focus {
            border-color: #888;
        }

        .login input[type="submit"] {
            background: #28d;
            border-color: transparent;
            color: #fff;
            cursor: pointer;
        }

        .login input[type="submit"]:hover {
            background: #17c;
        }

        /* Buttons' focus effect */
        .login input[type="submit"]:focus {
            border-color: #05a;
        }

    </style>

</head>
<body>



<div class="login">
    <div class="login-triangle"></div>

    <h2 class="login-header">Log in</h2>

    <form method="post" class="login-container" action="<?php  $_SERVER['PHP_SELF'];?>">
        <p><input type="email" placeholder="Email" name="email" required></p>
        <p><input type="password" placeholder="Password" name="password" required></p>
        <p><input type="submit" value="Log in" name="login"></p>
    </form>
</div>



<script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>