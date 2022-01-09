<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>

    <title>Chord Book - Login/Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style/login_registerStyle.css">
    <script src="../controller/index.js"></script>

</head>

<body>

<?php 
    include "../database/database.php";
    

    if(isset($_POST['login']) && !empty($_POST['email']) && !empty($_POST['password'])){

        $sql = "SELECT * FROM user";
        $q = mysqli_query($conn, $sql);
      

        while($line = mysqli_fetch_array($q, MYSQLI_ASSOC)){
            if($_POST['email'] == $line["email"] && $_POST['password'] == $line["password"]){
                $_SESSION['logged'] = true;
                $_SESSION['time'] = time();
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['username'] = $line['username'];
                
                

                if($line["type"] == "admin"){
                    header("Location: index.php");
                }else{
                    header("Location: all_chords.php");
                }

            }else{
                $msg = "Wrong username or password!";
            }
        }

    }
    ?>


<div class="row" id="header">
    <div class="col-sm-12 text-center container-fluid">
        <img src="https://www.kenmoreinn.com/wp-content/uploads/2017/11/guitar-header.jpg" alt="guitarImage" class="img-fluid  rounded-3 h-50 w-75" id="imgGuitar">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="login_register.php">Login/Register</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="all_chords.php">Explore Chords</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="new_song.php">Add New</a>
                    </li>
                    

                  </ul>
            </div>
          </nav>
    </div>
</div>

<div class="row">
    <div class="container-fluid col-sm-3"></div>
        <div class="container-fluid col-sm-4">
            <form class="form-horizontal" id="formLogin" method="post" action="">
                <p>
                    <label for="email" class="control-label col-sm-2">E-mail adress:</label><br>
                    <input type="email" class="form-control" name="email" placeholder="Enter e-mail adress" required>
                </p>
                <p>
                    <label for="password" class="control-label col-sm-2">Password:</label><br>
                    <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                </p>
                <p>
                    <button type="submit" name="login" class="col-sm-3 btn btn-primary" id="loginButton" >Log in</button>
                    <button type="button" class="col-sm-3 float-end btn btn-light" id="registerButton" onclick="linkToRegisterForm()">Register</button>
                </p>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">Remember me</label>
                </div>   
            </form>
        </div>
        <div class="container-fluid col-sm-3"></div>
    
    </div>


</body>
</html>