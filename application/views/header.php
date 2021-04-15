<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Compagnies des guides 2021</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
      p{
        margin : 0;
      }
    </style>
  </head>
  <body>
    <?php
      echo '<header>';
      echo "<div><a href='http://".$_SERVER['SERVER_NAME']."/index.php'>Home</a></div>";
      if ($this->session->userdata("isAdmin")){
      echo "<div><a href='http://".$_SERVER['SERVER_NAME']."/index.php/logout'>Se déconnecter</a></div>";
      }
      echo '</header>';
    ?>
