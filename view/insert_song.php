<?php
session_start();
?>


<?php

include "../database/database.php";

if(isset($_POST['submit'])){    

     $artist = $_POST['artist'];
     $content = addslashes($_POST['content']);
     $song = $_POST['song'];
     $author = $_SESSION['userid'];

     $sql = "INSERT INTO chord (author,content,artist,song)
     VALUES ('$author','$content','$artist', '$song')";
     if (mysqli_query($conn, $sql)) {
        header("Location: all_chords.php");
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}

?>