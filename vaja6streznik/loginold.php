
<form action="./index.php" method="POST">
    <input type="text" id="username" name="username">
    <input type="password" id="password" name="password">
    <button type="submit">Login</button>
</form>



<?php

session_start();


if($_POST['password']=='geslo'){
    echo "Ste prijavljeni";
};

?>