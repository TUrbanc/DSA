<?php

session_start();

if(isset($_POST['password']) and $_POST['password']=='geslo'){
    $_SESSION["uporabnik"] = $_POST['username'];
}
else{
  header('Location: login.php');
};


?>
<html>
<head>
  <title>Web page</title>
</head>

<body>
  <h1><?php echo $_SESSION["uporabnik"];?> je prijavljen!</h1>
  <div class="menu">
    <a style="color:red;" href="/index.php">Index page</a>
    <a href="/subpage.php">Subpage</a>
    <a href="/logout.php">Logout</a>
  </div>

</body>

</html>
