<?php require("components/head.php") ?>
<?php
require '../middleware/authMiddleware.php';

session_start();
// Call the authenticate function to check if the user is authenticated
authenticate();
?>
<h1>Hello. Welcome to the Protected page!</h1>
<button> <a href="../index.php"> Home </a> </button>
<?php require("components/footer.php") ?>
