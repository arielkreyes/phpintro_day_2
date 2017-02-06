<?php
error_reporting(E_ALL & ~E_NOTICE);
//IF THE page is not set in teh query string, sit it to home
if(isset($_GET['page'])){
  $current = $_GET['page'];
} else {
  $current = 'home';
}

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mini Site with Query String Variables</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
      <h1>My Main Website</h1>
      <nav>
        <ul>
          <li><a href="index.php?page=home">Home</a></li>
          <li><a href="index.php?page=about">About</a></li>
          <li><a href="index.php?page=contact">Contact</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <?php
      switch($current){
        case 'home':
        include('includes/home_content.php');
        break;

        case 'about':
        include('includes/about_content.php');
        break;

        case 'contact':
        include('includes/contact_content.php');
        break;
      }
      ?>
    </main>
    <footer>
      &copy; 2017 Platt college
    </footer>
  </body>
</html>
