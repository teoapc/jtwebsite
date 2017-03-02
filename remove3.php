<?php
    session_start();
    if (isset($_SESSION['season3'])&&!empty($_SESSION['season3']))
    {
        unset($_SESSION['season3']);
        header("Location:https://titan.csit.rmit.edu.au/~s3575233/wp/a3/cart.php");
        
    }
    
    
    ?>
