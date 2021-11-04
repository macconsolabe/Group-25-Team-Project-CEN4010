<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
     <!DOCTYPE html>
     <html>

     <head>
          <title>HOME</title>
          <link rel="stylesheet" type="text/css" href="style.css">
          <link rel="stylesheet" type="text/css" href="home.css">
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     </head>

     <body>

          <nav class="nav">
               <a href="#" class="nav__link">
                    <i class="material-icons nav__icon">chat</i>
                    <span class="nav__text">Feed</span>
               </a>
               <a href="#" class="nav__link nav__link--active">
                    <i class="material-icons nav__icon">person</i>
                    <span class="nav__text">Profile</span>
               </a>
               <a href="#" class="nav__link">
                    <i class="material-icons nav__icon">headphones</i>
                    <span class="nav__text">Playlist</span>
               </a>
               <a href="#" class="nav__link">
                    <i class="material-icons nav__icon">lock</i>
                    <span class="nav__text">Privacy</span>
               </a>
               <a href="#" class="nav__link">
                    <i class="material-icons nav__icon">settings</i>
                    <span class="nav__text">Settings</span>
               </a>
          </nav>
          <h1>Hello, <?php echo $_SESSION['name']; ?></h1>






          <nav class="home-nav">
               <a href="change-password.php">Change Password</a>
               <a href="logout.php">Logout</a>
          </nav>

     </body>

     </html>

<?php
} else {
     header("Location: index.php");
     exit();
}
?>