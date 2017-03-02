<?php
    session_start();
    if (isset($_SESSION['season1'])&&!empty($_SESSION['season1']))
    {
        unset($_SESSION['season1']);
        header("Location:https://titan.csit.rmit.edu.au/~s3575233/wp/a3/cart.php");
        
    }
    
    
    ?>
