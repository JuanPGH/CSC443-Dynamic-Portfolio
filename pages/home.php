<?php
  session_start();
  if (!isset($_SESSION["fullname"])) {
    header("Location: ../index.php");
  }
?>

<html>
  <head>
    <title>Home</title>
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="../css/home.css" />
  </head>
  <body>
    <div id="header">
      <div id="menu">
        <img src="../images/icons/menu.png" />
        <div id="menu-content">
          <ul>
            <a href="home.php"><li>Home</li></a>
            <a href="career.php"><li>Career</li></a>
            <a href="gallery.php"><li>Gallery</li></a>
            <a href="games.php"><li>Games</li></a>
            <a href="contact.php"><li>Contact</li></a>
          </ul>
        </div>
      </div>
      <div id="title">
        <span class="header-text">Home</span>
      </div>
      <div class="header-button">
        <a href="login.php"><img src="../images/icons/logout.png" /></a>
      </div>
      <div class="header-button">
        <img src="../images/icons/home.png" />
      </div>
      <div id="welcome">
        <span class="header-text" style="font-size: x-large">Welcome <?php echo $_SESSION["fullname"];?></span>
      </div>
    </div>
    <div id="content">
      <div id="top">
        <div id="bio">
          <div class="content-text">
            Hey! My name is Juan Pablo Ghantous Herrera and I am a Computer
            Science student at the Lebanese American University. I have prepared
            this site to showcase my professional achievements, career
            experience, and also hobbies such as photography and video games.
            Below you will find some buttons to visit all the subpages I
            created. Thank you for visiting!
          </div>
        </div>
        <div id="profile-picture"><img src="../images/profile.jpg" /></div>
      </div>
      <div id="bottom">
        <div class="subpage-button">
          <a href="career.php"><img src="../images/icons/career.png" /></a>
        </div>
        <div class="subpage-button">
          <a href="gallery.php"><img src="../images/icons/gallery.png" /></a>
        </div>
        <div class="subpage-button">
          <a href="games.php"><img src="../images/icons/games.png" /></a>
        </div>
      </div>
    </div>
    <div id="footer">
      <div id="social-medias">
        <a href="https://www.twitter.com" target="_blank"
          ><img src="../images/icons/twitter.png"
        /></a>
        <a
          href="https://open.spotify.com/user/y74hmya3dklwhy5e2zdbx1uiu?si=fc0a43d5e50a417a"
          target="_blank"
          ><img src="../images/icons/spotify.png"
        /></a>
        <a href="https://instagram.com/juanpghantoush" target="_blank"
          ><img src="../images/icons/instagram.png"
        /></a>
        <a href="https://www.linkedin.com/in/juanghantous/" target="_blank"
          ><img src="../images/icons/linkedin.png"
        /></a>
      </div>
      <div id="course-text">
        <span class="footer-text">
          CSC443 - Dynamic Portfolio - Fall 2023
        </span>
      </div>

      <div id="contact-link">
        <a href="contact.php">
          <span class="footer-text">Contact Information</span>
        </a>
      </div>
    </div>
  </body>
</html>
