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

        <div class="row">
            <div class="container-fluid col-sm-3"></div>
                <div class="container-fluid col-sm-4">
                    <p id="chordParam">
                        <label for="author">Author:Tutlek</label><br>
                        <label for="songArtist">Artist: Aerodrom</label><br>
                        <label for="songName">Song Name: Digni Me Visoko</label><br><br>
                        <textarea name="textChord" class="form-control disabled col-sm-12" id="textChord"rows="25">
                            C
                            Uzmi me sa sobom i povedi me
                              G            C           G
                            I povedi me, i povedi me
                            C
                            Digni me visoko da ti ispričam
                                  G                C           G
                            Svoje snove sve, svoje snove sve.
                            
                            
                            Odvedi me do mora gdje su djevojke
                            Gdje su djevojke, gdje su djevojke
                            Koje nikad nikom nisu rekle ne
                            Nisu rekle ne, nisu rekle ne.
                            
                            
                            Am                C
                            Al' ja ipak nisam luda
                            Am             C
                            Koja vjeruje u čuda
                            Am               C
                            Što se kriju iza mora
                              F        G
                            I gora dalekih.
                            
                            
                            Spusti me na zamlju, ali oprezno
                            Ali oprezno, ali oprezno
                            Hrabar sam, ali neću izazivat zlo
                            Izazivat zlo, izazivat zlo.
                            
                            Možda jednog dana ipak uspijem
                            Ipak uspijem ipak uspijem
                            Samo ako prije se ne napijem
                            Se ne napijem, se ne napijem.
                            
                            Jer ja ipak nisam luda
                            Koja vjeruje u čuda
                            Što se kriju iza mora
                            I gora dalekih.</textarea>
                    </p>
                </div>
                <div class="container-fluid col-sm-3"></div>
            
            </div>
        
            
        </body>
</html>