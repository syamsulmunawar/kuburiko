<?php

    session_start();

    include 'function.php';

    if(isset($_POST["login"])){

        $username = mysqli_real_escape_string($conn,$_POST["username"]);
        $password = mysqli_real_escape_string($conn,$_POST["password"]);
        
        

        //cek apakah username sudah terdaftar atau belum
        global $conn;
		$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
        
        if(mysqli_num_rows($result)=== 1){
            //cek password
            $row = mysqli_fetch_assoc($result);
            
            if($password == $row["password"]){
                if($row["level"] == 'rs_puskesmas'){

                    $_SESSION["login_rs"] = true;
                    
                    header("Location: rs\index.php");
                    exit;    
                }
                else if($row["level"] == 'capil'){

                    $_SESSION["login_capil"] = true;
                    
                    header("Location: index.php");
                    exit;    
                }
                else if($row["level"] == 'kelurahan'){

                    $_SESSION["login_kelurahan"] = true;
                    
                    header("Location: kelurahan/index.php");
                    exit;    
                }
            }
		}
    }
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk</title>
    <link rel="stylesheet" href="assets\css\bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <style>
        body{
            background: #E9EBEE;
        }
    </style>
</head>
<body>
   
    <div class="container">
        <div class="kotak-login col-4 mx-auto py-4 px-5">
            <h4 class="text-center text-info mb-4">Silahkan Login</h4>
            <hr class="mb-1">
            <form action="" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user"></i> </div>
                        </div>
                        <input class="form-control" name="username" id="username" type="text" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-unlock-alt"></i> </div>
                        </div>
                        <input class="form-control" name="password" type="password" id="password" required>

                    </div>
                </div>
                <button class="btn btn-info btn-sm align-self-right" name="login" type="submit">Login</button>
            </form>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 <script type="text/javascript" src="assets/js/admin.js"></script>
</body>
</html>