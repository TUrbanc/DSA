<?php
session_start();
?>

<html>
<head>
  <title>Web page</title>
</head>

<body>
  <h1><?php echo $_SESSION["uporabnik"];?></h1>
  <div class="menu">
    <a href="/index.php">Index page</a>
    <a style="color:red;" href="/subpage.php">Subpage</a>
    <a href="/logout.php">Logout</a>
  </div>
</body>

</html>