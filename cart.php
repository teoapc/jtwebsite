<?php
session_start();

include_once('/home/eh1/e54061/public_html/wp/debug.php'); 

?>
<!DOCTYPE html5>

<?php

    if (session_status() == PHP_SESSION_NONE) {

        session_start();

    }

    //season1 set session variables

    if (isset($_POST['plm']['s1'])) {

        $_SESSION['season1'] = $_POST['plm']['s1'];

    }

    if (isset($_POST['media']['s1'])) {

        $_SESSION['season1media'] = $_POST['media']['s1'];

    }

    //season2 set session variables

    if (isset($_POST['plm']['s2'])) {

        $_SESSION['season2'] = $_POST['plm']['s2'];

    }

    if (isset($_POST['media']['s2'])) {

        $_SESSION['season2media'] = $_POST['media']['s2'];

    }

    //season3 set session variables

    if (isset($_POST['plm']['s3'])) {

        $_SESSION['season3'] = $_POST['plm']['s3'];

    }

    if (isset($_POST['media']['s3'])) {

        $_SESSION['season3media'] = $_POST['media']['s3'];

    }

    ?>

<html>

<head>

<title>Josh Thomas</title>

<link rel="stylesheet" type="text/css" href="assign2-extern.css"/>

<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">

</head>




<body>

<?php include_once 'headermod.php'?>




<main>

<article>







<?php include_once 'navmod.php'?>




<main>

<article>

<div class = "shop-content">

<form action="https://titan.csit.rmit.edu.au/~s3575233/wp/a3/checkout.php" method="post" onsubmit="return true">

<?php if(isset($_SESSION['season1']) && !empty($_SESSION['season1']) || isset($_SESSION['season2']) && !empty($_SESSION['season2']) || isset($_SESSION['season3']) && !empty($_SESSION['season3']))

    {

echo "<h3>You purchased: </h3>";

echo "<div class = cart>";

echo "<table class = cart-table>";

echo "<tr>";

echo "<th align = center>Item</th>";

echo "<th align = center>Quantity</th>";

echo "<th align = center>Price</th>";

echo "<th align = center>Remove From Cart</th>";

echo "</tr>";




    }

    else

    {

        echo "<h2>You don't have any items in your cart.</h2>";

    }

    ?>

<?php

    

    if (isset($_SESSION['season1']) && isset($_SESSION['season1media']))

    {

        $season1 = $_SESSION['season1'];

        $season1price = $season1*17.00;

        $season1media = $_SESSION['season1media'];

        

    }

    else

    {

        $_SESSION['season1media'] = "No media type chosen";

    }

    if (isset($season1)&&!empty($season1))

    {

        if (filter_var($season1, FILTER_VALIDATE_INT)===0||filter_var($season1, FILTER_VALIDATE_INT)===1||filter_var($season1, FILTER_VALIDATE_INT)===2||filter_var($season1, FILTER_VALIDATE_INT)===3||filter_var($season1, FILTER_VALIDATE_INT)===4||filter_var($season1, FILTER_VALIDATE_INT)===5)

        {




            echo "<tr>";

            echo "<td>";

            echo "Season 1 ($season1media Box-set)";

            echo "</td>";

            echo "<td>";

            echo "$season1";

            echo "</td>";

            echo "<td>";

            echo "\$$season1price";

            echo "</td>";

            echo "<td align = center>";

            echo "<a href=remove.php><img src=trash.png width =20px height=auto></a>";

            echo "</td>";

            echo "</tr>";




        }

        

    }

    ?>

</div>

<div class = "cart">

<?php

    if (isset($_SESSION['season2']) && isset($_SESSION['season2media']))

    

    {

        $season2 = $_SESSION['season2'];

        $season2price = $season2*22.50;

        $season2media =  $_SESSION['season2media'];

    }

    else

    {

        $_SESSION['season2media'] = "No media type chosen";

    }

    if (isset($season2)&&!empty($season2))

    {

        

       if (filter_var($season2, FILTER_VALIDATE_INT)===0||filter_var($season2, FILTER_VALIDATE_INT)===1||filter_var($season2, FILTER_VALIDATE_INT)===2||filter_var($season2, FILTER_VALIDATE_INT)===3||filter_var($season2, FILTER_VALIDATE_INT)===4||filter_var($season2, FILTER_VALIDATE_INT)===5)

       {

  

        echo "<tr>";

        echo "<td>";

        echo "Season 2 ($season2media Box-set)";

        echo "</td>";

        echo "<td>";

        echo "$season2";

        echo "</td>";

        echo "<td>";

        echo "\$$season2price";

        echo "</td>";

        echo "<td align = center>";

        echo "<a href=remove2.php><img src=trash.png width =20px height=auto></a>";

        echo "</td>";

        echo "</tr>";

       }

        

        //$deletes2 = unset($_SESSION['season2']);

        //echo "<a href='$deletes2' class = extern-shop>Remove From Cart</a>";

    }

    ?>

</div>

<div class="cart">

<?php

    if (isset($_SESSION['season3']) && isset($_SESSION['season3media']))

    

    {

        $season3 = $_SESSION['season3'];

        $season3price = $season3*26.75;

        $season3media =  $_SESSION['season3media'];

    }

    else

    {

        $_SESSION['season3media'] = "No media type chosen";

    }

    if (isset($season3)&&!empty($season3))

    {

        if (filter_var($season3, FILTER_VALIDATE_INT)===0||filter_var($season3, FILTER_VALIDATE_INT)===1||filter_var($season3, FILTER_VALIDATE_INT)===2||filter_var($season3, FILTER_VALIDATE_INT)===3||filter_var($season3, FILTER_VALIDATE_INT)===4||filter_var($season3, FILTER_VALIDATE_INT)===5)

        {




        echo "<tr>";

        echo "<td>";

        echo "Season 3 ($season3media Box-set)";

        echo "</td>";

        echo "<td>";

        echo "$season3";

        echo "</td>";

        echo "<td>";

        echo "\$$season3price";

        echo "</td>";

        echo "<td align = center>";

        echo "<a href=remove3.php><img src=trash.png width =20px height=auto></a>";

        echo "</td>";

        echo "</tr>";

        }

     

        

        //echo "<a href='$deletes3' class = extern-shop>Remove From Cart</a>";

    }

       ?>

</div>

<?php echo "</table>" ?>




<br>

<br>

<?php

    if (empty($season1))

    {

        $season1price = 0;

                  }

    if (empty($season2))

    {

        $season2price = 0;




    }

    if (empty($season3))

    {

        $season3price = 0;




    }

    if (isset($_SESSION['season1']) && !empty($_SESSION['season1']) || isset($_SESSION['season2']) && !empty($_SESSION['season2']) || isset($_SESSION['season3']) && !empty($_SESSION['season3']))

    {

    $total = $season1price + $season2price + $season3price;

        echo "<h3>";

        echo "Total: \$$total";

        echo "</h3>";

         echo "<br><br>";

        echo "<input type=submit value=CHECKOUT id=submit-shop>";

    }




    ?>

<br>

<br>

</form>

</div>

</article>

</main>

</body>

<?php include_once 'footermod.php'?>

</html>
