<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Chord Book - New Song</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../style/newSongStyle.css">
</head>

<body>

<?php 
    include "../database/database.php";

    if (!(isset($_SESSION['logged']) && $_SESSION['logged'] == true)) {
            header("Location: login_register.php");
    }

    ?>


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
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Add New</a>
                          </li>
                      </ul>
                </div>
              </nav>
        </div>
    </div>


    <div class="row">
        <div class="container-fluid col-sm-3"></div>
            <div class="container-fluid col-sm-4">
                <form class="form-horizontal" id="formNewSong">
                    <p>
                        <label for="Artist" class="control-label col-sm-2">Artist:</label><br>
                        <input type="text" class="form-control" placeholder="Enter song artist" required>
                    </p>
                    <p>
                        <label for="Chords" class="control-label col-sm-2">Song/Chords:</label><br>
                        <textarea class="form-control col-sm-12" name="chords" id="chords" rows="25" placeholder="Enter transcription" required></textarea>
                    </p>
                    <p>
                        <button type="submit" class="col-sm-3 btn btn-primary" id="addNewButton">Submit</button>
                        
                    </p>
                     
                </form>
            </div>
            <div class="container-fluid col-sm-3"></div>
        
        </div>


</body>

</html>