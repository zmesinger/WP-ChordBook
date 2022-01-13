<!DOCTYPE html>
<html>

<head>

    <title>Chord Book - Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style/login_registerStyle.css">
    <script src="../controller/index.js"></script>
    
</head>

<div class="row" id="header">
    <div class="col-sm-12 text-center container-fluid">
        <img src="https://www.kenmoreinn.com/wp-content/uploads/2017/11/guitar-header.jpg" alt="guitarImage" class="img-fluid  rounded-3 h-50 w-75" id="imgGuitar">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="login_register.php">Login/Register</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="all_chords.php">Explore Chords</a>
                    </li>
                    <?php
                    if(isset($_SESSION['logged']) && $_SESSION['logged'] == true){
                        ?>
                        <li class="nav-item">
                              <a class="nav-link" href="new_song.php">Add New</a>
                            </li>
                        <li class="nav-item">
                           <a class="" href="logout.php">Logout</a>
                        </li>
                        
                        <?php
                        }
                        ?>
                    
                    
                  </ul>
            </div>
          </nav>
    </div>
</div>

<div class="row">
    <div class="container-fluid col-sm-3"></div>
        <div class="container-fluid col-sm-4">
            <form class="form-horizontal" id="formLogin">
                <p>
                    <label for="username" class="control-label col-sm-2">Username:</label><br>
                    <input type="text" class="form-control" placeholder="Enter username" required>
                </p>
                <p>
                    <label for="email" class="control-label col-sm-2">E-mail adress:</label><br>
                    <input type="email" class="form-control" id="email" placeholder="Enter e-mail adress" required>
                </p>
                <p>
                    <label for="password" class="control-label col-sm-2">Password:</label><br>
                    <input type="password" class="form-control" placeholder="Enter password" required>
                </p>
                <p>
                    <button type="button" class="col-sm-3 btn btn-primary disabled" id="loginButton">Log in</button>
                    <button type="submit" class="col-sm-3 float-end btn btn-light" id="registerButton" onclick="checkIfEmail()">Register</button>
                </p>
    
            </form>
        </div>
        <div class="container-fluid col-sm-3"></div>
    
    </div>
 

<body>
    

</body>
</html>