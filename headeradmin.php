

    <?php

    include('dbcon.php'); 
    // Initialize the session
    session_start();
    // If session variable is not set it will redirect to login page
    if(!isset($_SESSION['temail']) || empty($_SESSION['temail'])){

      header("location: login.php");

      exit;

    }
    ?>
