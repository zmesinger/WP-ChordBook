<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Chord Book</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../style/indexStyle.css">
    <script src="../controller/index.js"></script>
    
</head>


<body>
    
    <div class="row">
        <div class="col-sm-12 text-center container-fluid">
            <img src="https://www.kenmoreinn.com/wp-content/uploads/2017/11/guitar-header.jpg" alt="guitarImage" class="img-fluid  rounded-3 h-50 w-75" id="imgGuitar">
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
                <div class="container-fluid">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                          <a class="nav-link active" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="login_register.php">Login/Register</a>
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
        <div class="col-sm-6 text-center container-fluid">
            <h3 class="text-sm-center text-white">Explore guitar chords</h3>
            <img src="https://www.clipartmax.com/png/full/69-697259_red-musical-note-icon-music-note-icon-red.png" alt="imgNotes" class="img-fluid" id="imgNotes" onclick="linkToAllChords()">
        </div>
        <div class="col-sm-6 text-center container-fluid">
            <h3 class="text-sm-center text-white font">Log in/Register</h3>
            <img src="https://www.dnnsoftware.com/portals/0/Images/DNN/findProviders.png" alt="imgLoginRegister" class="img-fluid" id="imgLoginRegister" onclick="linkToLoginForm()">
        </div>
    

    

</div>



</body>



</html>