<?php
    session_start();
    if (isset($_SESSION['season2'])&&!empty($_SESSION['season2']))
    {
        unset($_SESSION['season2']);
        header("Location:https://titan.csit.rmit.edu.au/~s3575233/wp/a3/cart.php");
        
    }
    
    ?>
