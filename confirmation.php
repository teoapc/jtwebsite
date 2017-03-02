<?php

	include_once('/home/eh1/e54061/public_html/wp/debug.php'); 

	if (session_status() == PHP_SESSION_NONE){
		
		session_start();
	}


if(isset($_POST['creditcard']))
{	
	$creditcard = $_POST['creditcard'];
	
	$pattern='^[0-9\s-]{13,18}$^';

	preg_match($pattern, $creditcard);


}


?>


<!DOCTYPE html5>
<html>
<head>
<title>Josh Thomas</title>
<link rel="stylesheet" type="text/css" href="assign2-extern.css"/>
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
<?php include_once 'headermod.php'?>
<?php include_once 'navmod.php'?>
</head>
<body>

<main>

<article>

<?php
    
    
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $deliverymethod=$_POST['deliverymethod'];
    $season1 = $_SESSION['season1'];
    $season1media = $_SESSION['season1media'];
    $season2 = $_SESSION['season2'];
    $season2media = $_SESSION['season2media'];
    $season3 = $_SESSION['season3'];
    $season3media = $_SESSION['season3media'];
    if(isset($season1) && !empty($season1))
    {
        $s1price = $season1 * 17.00;
    }
    else
    {
        $s1price = 0;
    }
    if(isset($season2) && !empty($season2))
    {
        $s2price = $season2 * 22.50;
    } else
    {
        $s2price = 0;
        
    }
    if(isset($season3) && !empty($season3))
    {
        $s3price = $season3 * 26.70;
    } else
    {
        $s3price = 0;
        
    }
    if ($deliverymethod == 'Free')
    {
    $total = $s1price + $s2price + $s3price;
    } else if ($deliverymethod == 'RegularCourier')
    {
        $total = $s1price + $s2price + $s3price + 7.00;
    } else if ($deliverymethod == 'ExpressCourier')
    {
        $total = $s1price + $s2price + $s3price + 10.50;
    }
    
    
    $array = array($firstname, $lastname, $address, $email, $number, $deliverymethod, $season1, $season1media, $season2, $season2media, $season3, $season3media, $total);
    
    implode(" ", $array);
    
    $file = 'order.txt';
    
    $current = file_get_contents($file);
    $current .= implode("\n", $array);
    
    $fp = fopen($file, 'a');
    fwrite($fp, "Order Details\n");
    fwrite($fp, "First Name: $firstname\n");
    fwrite($fp, "Last Name: $lastname\n");
    fwrite($fp, "Address: $address\n");
    fwrite($fp, "E-mail: $email\n");
    fwrite($fp, "Phone Number: $number\n");
    fwrite($fp, "Delivery Method: $deliverymethod\n");
    fwrite($fp, "Season 1 Quantity: $season1\n");
    fwrite($fp, "Media Type: $season1media\n");
    fwrite($fp, "Season 1 Price: \$$s1price\n");
    fwrite($fp, "Season 2 Quantity: $season2\n");
    fwrite($fp, "Media Type: $season2media\n");
    fwrite($fp, "Season 2 Price: \$$s2price\n");
    fwrite($fp, "Season 3 Quantity: $season3\n");
    fwrite($fp, "Media Type: $season3media\n");
    fwrite($fp, "Season 3 Price: \$$s3price\n");
    fwrite($fp, "Total: \$$total\n");
    fwrite($fp, "-----------------------------------------\n");
    fclose($file);
    
    
    ?>

<div class ='shop-content'>
<h3>OFFICIAL RECEIPT</h3>
<br>
<div id = 'receipt'>
<?php
    echo "<h4>";
    echo "Name: $firstname $lastname";
    echo "<br>";
    echo "Email: $email";
    echo "<br>";
    echo "Address: $address";
    echo "<br>";
    echo "Phone Number: $number";
    echo "<br>";
    echo "<br>";
    echo "Items bought: ";
    echo "<br>";
    if (isset($season1) && !empty($season1))
    {
        echo "Season 1: $season1 item(s)";
        echo "<br>";
        echo "Media Type: $season1media";
        echo "<br>";
        echo "Subtotal: \$$s1price";
        echo "<br>";
    }
    if (isset($season2) && !empty($season2))
    {
        echo "Season 2: $season2 item(s)";
        echo "<br>";
        echo "Media Type: $season2media";
        echo "<br>";
        echo "Subtotal: \$$s2price";
        echo "<br>";
    }
    if (isset($season3) && !empty($season3))
    {
        echo "Season 3: $season3 item(s)";
        echo "<br>";
        echo "Media Type: $season3media";
        echo "<br>";
        echo "Subtotal: \$$s3price";
        echo "<br>";
    }
    
    echo "Delivery method: $deliverymethod";
    echo "<br>";
    echo "Total: \$$total";
    
    
    if(isset($season1) && !empty($season1))
    {
        unset($season1);
    }
    if(isset($season2) && !empty($season2))
    {
        unset($season2);
    }
    if(isset($season3) && !empty($season3))
    {
        unset($season3);
    }
    
    session_destroy();

    ?>

</div>
</article>

</main>

</body>

<footer>
<?php include_once 'footermod.php'?>
</footer>
</html>

