<?php
session_start();
?>
<!DOCTYPE html>
<html>

<body>
    
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
                    <ul class="navbar-nav " style="display: flex; justify-content: flex-end;">
                        <li class="nav-item">
                          <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="login_register.php">Login/Register</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active" href="all_chords.php">Explore Chords</a>
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
        <div class="col-sm-2"></div>
        <div class="col-sm-8 text-center container-cluid">

            <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col"># ID</th>
                    <th scope="col">Song</th>
                    <th scope="col">Artist</th>
                    <th scope="col">User</th>
                    <th scope="col">Action</th>
                    
                  </tr>
                </thead>
                <tbody>
                <?php
                    include "../database/database.php";
                    $sql = "SELECT chord.id, chord.song, chord.artist, user.username FROM chord 
                    LEFT JOIN user ON chord.author = user.id";
                    $records = mysqli_query($conn, $sql);
                    while($data = mysqli_fetch_array($records)){
                      ?>
                        <tr>
                          <td><?php echo $data['id']; ?></td>
                          <td><?php echo $data['song']; ?></td>
                          <td><?php echo $data['artist']; ?></td> 
                          <td><?php echo $data['username']; ?></td>
                          <td><a href="chord.php?id=<?php echo $data['id'] ?>" class="btn btn-primary">View chord</a></td>                      
                        </tr>	
                      <?php
                    }
                  

                ?>
                </tbody>
              </table>

        </div>
        <div class="col-sm-2"></div>
    </div>


</body>
</html>