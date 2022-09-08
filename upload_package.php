<?php

include 'connect.php';

if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $artist = $_POST['artist'];
   $artist = filter_var($artist, FILTER_SANITIZE_STRING);

   if(!isset($artist)){
      $artist = '';
   }

   $album = $_FILES['album']['name'];
   $album = filter_var($album, FILTER_SANITIZE_STRING);
   $album_size = $_FILES['album']['size'];
   $album_tmp_name = $_FILES['album']['tmp_name'];
   $album_folder = 'uploaded_album/'.$album;

   if(isset($album)){
     
         move_uploaded_file($album_tmp_name, $album_folder);
     
   }else{
      $album = '';
   }

   $music = $_FILES['music']['name'];
   $music = filter_var($music, FILTER_SANITIZE_STRING);
   $music_size = $_FILES['music']['size'];
   $music_tmp_name = $_FILES['music']['tmp_name'];
   $music_folder = 'uploaded_music/'.$music;

   if($music_size > 100000000){
      $message[] = 'music size is too large!';
   }else{
      $upload_music = $conn->prepare("INSERT INTO `songs`(name, artist, album, music) VALUES(?,?,?,?)");
      $upload_music->execute([$name, $artist, $album, $music]);
      move_uploaded_file($music_tmp_name, $music_folder);
      $message[] = 'new package uploaded!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>upload music</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/stylep.css">

</head>
<body>

<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<section class="header">

   <a href="home.php" class="logo">tourbros.ADMIN</a>

   <nav class="navbar">
      <a href="home1.php">home</a>
      <a href="admin.php">Admin</a>
      
      <a href="adminlogout.php">logout</a>
      <a href="contactus1.php">Contact Us</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>
   
<section class="form-container">

   <h3 class="heading">upload package</h3>

   <form action="" method="POST" enctype="multipart/form-data">
      <p>Package Name <span>*</span></p>
      <input type="text" name="name" placeholder="enter package name" required maxlength="100" class="box">
      <p>Enter Discription<span>*</span></p>
      <input type="text" name="artist" placeholder="enter artist name" maxlength="100" class="box">
      <p>Select music <span></span></p>
      <input type="file" name="music" class="box" required accept="audio/*">
      <p>Select picture<span>*</span></p>
      <input type="file" name="album" class="box" accept="image/*">
      <input type="submit" value="upload package" class="btn" name="submit">
      <a href="home.php" class="option-btn">go to home</a>
      <a href="pack.php" class="option-btn">go to package</a>
   </form>

</section>

</body>
</html>