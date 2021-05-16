<?php
session_start();
echo "loging out don't worry about it";

session_destroy();
header("Location: /forum prog/index.php");
?>