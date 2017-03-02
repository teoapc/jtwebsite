<?php
session_start();

include_once('/home/eh1/e54061/public_html/wp/debug.php'); 

?>
<!DOCTYPE html5>
<?php
    session_start();
    ?>

<html>
<head>
<title>Shop</title>
<head>
<title>Shop</title>
<link rel="stylesheet" type="text/css" href="assign2-extern.css"/>
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
<script type ="text/javascript">


function calculatePriceS1()
{
    var seasonOne = parseInt(document.getElementById("s1quantity").value);
    
    if (isNaN(seasonOne)){
        alert('You are a bad customer! Type numbers next time.');
        console.log('Seats was Not A Number... this is an error');
        document.getElementById('s1quantity').focus();
        document.getElementById('s1quantity').select();
        return false;
    }
    var seasonOnePrice = 17.00;
    salePrice1 = seasonOne * seasonOnePrice;
    document.getElementById('s1price').innerHTML = "Subtotal $ "+salePrice1.toFixed(2);
    return true;
}

function calculatePriceS2()
{
    var seasonTwo = parseInt(document.getElementById("s2quantity").value);
    
    if (isNaN(seasonTwo)){
        alert('You are a bad customer! Type numbers next time.');
        console.log('Seats was Not A Number... this is an error');
        document.getElementById('s2quantity').focus();
        document.getElementById('s2quantity').select();
        return false;
    }
    var seasonTwoPrice = 22.50;
    salePrice2 = seasonTwo * seasonTwoPrice;
    document.getElementById('s2price').innerHTML = "Subtotal $ "+salePrice2.toFixed(2);
    return true;
}

function calculatePriceS3()
{
    var seasonThree = parseInt(document.getElementById("s3quantity").value);
    
    if (isNaN(seasonThree)){
        alert('You are a bad customer! Type numbers next time.');
        console.log('Seats was Not A Number... this is an error');
        document.getElementById('s3quantity').focus();
        document.getElementById('s3quantity').select();
        return false;
    }
    var seasonThreePrice = 26.75;
    salePrice3 = seasonThree * seasonThreePrice;
    document.getElementById('s3price').innerHTML = "Subtotal $ "+salePrice3.toFixed(2);
    return true;
}

/*function calculateTotal()
 {
 calculatePriceS1();
 calculatePriceS2();
 calculatePriceS3();
 
 totalPrice = salePrice1 + salePrice2 + salePrice3;
 document.getElementById('total').innerHTML = "Total $ "+totalPrice.toFixed(2);
 return true;
 }
 */

</script>

</head>

<body>

<?php include_once 'headermod.php'?>
<main>
<article>
<?php include_once 'navmod.php'?>

<div class ='shop-content'>
<h1>PLEASE LIKE ME DVD BOXSET SEASON 1-SEASON 3<h1>
<br>
<form action="https://titan.csit.rmit.edu.au/~s3575233/wp/a3/cart.php" method="post" onsubmit="return true">
<div class ='season'>
<br>
<img src="season1cov.png" height="150px" width="auto">
<h5><details><summary>Please Like Me Season 1</summary><h5>
<p class="more-details">The story follows Josh, who is headed
<br>towards his 21st birthday.
<br>In the span of 24 hours, Josh is dumped
<br>by his girlfriend, Claire,
<br>realizes he may be gay and
<br>contemplates moving in with his ill mother, Rose.
</p>
</details>

<h3>Quantity:</h3>

<input type="number" class="quantity" id="s1quantity" name="plm[s1]" min="0" max="5" placeholder="0" oninput="calculatePriceS1()">
<h4>
<div id="s1price"></div>
<br>
<input type="radio" name="media[s1]" value="DVD"> DVD<br>
<input type="radio" name="media[s1]" value="Blu-Ray"> Blu-Ray<br>
</h4>
<div class="extern-shop">
<a href="https://www.amazon.com/Please-Like-Me-Season-1/dp/B00G5Z4VMM" class="extern-shop">AMAZON</a> <a href="https://itunes.apple.com/us/tv-season/please-like-me-season-1/id671267950" class="extern-shop">ITUNES</a>
</div>
<br>
</div>
<div class ='season'>
<br>
<img src="season2cov.png" height="150px" width="auto" >
<h5><details><summary>Please Like Me Season 2</summary><h5>
<p class="more-details">After being adored by critics in
<br>Australia and the USA, the award-winning
<br>comedy/drama Please Like Me,
<br>created by Josh Thomas,
<br>returns with a second season
<br>set to screen simultaneously
<br>on ABC2 and America's
<br>brand-new Pivot network.</p></details>
<h3>Quantity:</h3>
<input type="number" class="quantity" id="s2quantity" name="plm[s2]" min="0" max="5" placeholder="0" oninput="calculatePriceS2()">
<h4>
<div id="s2price"></div>
<br>
<input type="radio" name="media[s2]" value="DVD"> DVD<br>
<input type="radio" name="media[s2]" value="Blu-Ray"> Blu-Ray<br>
</h4>
<div class="extern-shop">
<a href="https://www.amazon.com/Please-Like-Me-Season-2/dp/B00MJOADIO">AMAZON</a> <a href="https://itunes.apple.com/us/tv-season/please-like-me-season-2/id891079725">ITUNES</a>
</div>
<br>
</div>
<div class ='season'>
<br>
<img src="season3cov.png" height="150px" width="auto">
<h5><details><summary>Please Like Me Season 3</summary><h5>
<p class="more-details">The award-winning 'dramedy' series returns
<br>for its third season. Josh is an astute
<br>twentysomething trying to make sense of his friends,
<br>family, and cast of intriguing characters
<br>including John the cavoodle.</p>
</details>
<h3>Quantity:</h3>
<input type="number" class="quantity" id="s3quantity" name="plm[s3]" min="0" max="5" placeholder="0" oninput="calculatePriceS3()">
<h4>
<div id="s3price"></div>
<br>
<input type="radio" name="media[s3]" value="DVD"> DVD<br>
<input type="radio" name="media[s3]" value="Blu-Ray"> Blu-Ray<br>
</h4>
<div class="extern-shop">
<a href="https://www.amazon.com/gp/product/B016Q9W2NQ?ref_=aiv_dp_season_select">AMAZON</a> <a href="https://itunes.apple.com/us/tv-season/please-like-me-season-3/id1041583976">ITUNES</a>
</div>
<br>
<input type ="hidden" id="totalPrice" oninput="calculateTotal()">
<div id="total"></div>
</div>
<br>
<br>
<br>

<br>
<br></h4>
<input type="submit" value="SUBMIT" id="submit-shop">

</div>
</article>
</main>
</form>

<?php include_once 'footermod.php'?>
</body>
</html>