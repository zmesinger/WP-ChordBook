<?php
session_start();
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Chord Book</title>
    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="../style/chordStyle.css">
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
                              <a class="nav-link" href="index.php">Home</a>
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
        <?php
                    include "../database/database.php";
                    
                    if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM `chord` WHERE `id` = $id";
                    $records = mysqli_query($conn, $sql);
                    $data = mysqli_fetch_assoc($records);
                    }
                      ?>
        

        <div class="row">
            <div class="container-fluid col-sm-3"></div>
                <div class="container-fluid col-sm-4">
                    <p id="chordParam">
                        <label for="author">Author: <?php echo "admin" ?></label><br>
                        <label for="songArtist">Artist:  <?php echo $data['artist'] ?> </label><br>
                        <label for="songName">Song Name: <?php echo $data['song'] ?></label><br><br>
                        <textarea name="textChord" class="form-control disabled col-sm-12" id="textChord"rows="25">
                        <?php echo $data['content'] ?>
                            </textarea>
                    </p>
                </div>
                <div class="container-fluid col-sm-3"></div>
            
            </div>
        
            
        </body>
</html>