<?php require("components/head.php") ?>
<?php session_start(); ?>
    <main>
        <div >
            <!-- Your content -->
            <button><a href="views/protected.view.php"> Protected </a></button>
            <button><a href="views/public.view.php"> Public </a></button>
            <h1>Hello. Welcome to the Home page!</h1>
        </div>
        <?php if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === true) { ?>
            <button><a href="../controllers/logout.php"> Log out </a></button>
        <?php } else { ?>
            <button><a href="views/login.view.php"> Sing in </a></button>
            <button > <a href="views/signup.view.php"> Sing up </a> </button>
        <?php } ?>
    </main>
<?php require("components/footer.php") ?>