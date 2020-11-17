<?php
session_start();

session_destroy();

echo "Logout realizado! <br>";
echo "Faça seu <a href='login.php'>Login</a>";
?>