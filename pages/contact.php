<?php
  session_start();
  if (!isset($_SESSION["fullname"])) {
    header("Location: ../index.php");
  }
?>

<html>
  <head>
    <title>Contact Information</title>
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="../css/contact.css" />
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
        <span class="header-text">Contact Information</span>
      </div>
      <div class="header-button">
        <a href="login.php"><img src="../images/icons/logout.png" /></a>
      </div>
      <div class="header-button">
        <img src="../images/icons/contact.png" />
      </div>
      <div class="header-button">
        <a href="home.php"><img src="../images/icons/home.png" /></a>
      </div>
      <div id="welcome">
        <span class="header-text" style="font-size: x-large">Welcome <?php echo $_SESSION["fullname"];?></span>
      </div>
    </div>
    <div id="content">
      <div id="contact-box">
        <span>Phone Number:</span>
        <span>+961 81 632122</span>
        <br />
        <span>Personal Email:</span>
        <span
          ><a href="mailto:jpghantous2002@gmail.com"
            >jpghantous2002@gmail.com</a
          ></span
        >
        <br />
        <span>Address:</span>
        <span>Brummana, Lebanon</span>
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
