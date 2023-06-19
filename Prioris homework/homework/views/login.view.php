<?php require("components/head.php") ?>
    <form action="../controllers/login.php" method="POST">
        <label for="username">Username : </label>
        <input type="text" placeholder="Enter Username" name="username" required><br>
        <label for="password">Password : </label>
        <input type="password" placeholder="Enter Password" name="password" required><br>
        <button type="submit" >Log in</button><br>
    </form>
<button> <a href="../index.php"> Home </a> </button>
<?php require("components/footer.php") ?>
