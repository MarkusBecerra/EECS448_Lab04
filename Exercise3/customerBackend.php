<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
$username = $_POST["username"];
$password = $_POST["password"];
$madeon = $_POST["madeon"];
$daftpunk = $_POST["daftpunk"];
$frankocean = $_POST["frankocean"];
$shipping = $_POST["shipping"];
$shippingcost;
if($shipping == "freeshipping")
{
  $shippingcost = 0;
}
else if($shipping == "threeday")
{
  $shippingcost = 5;
}
else if($shipping == "overnight")
{
  $shippingcost = 50;
}

echo "<h1> Order Confirmation </h1>";
echo "<h3> Thank you for your order! </h3>";
echo "<br> <h4> User Information: </h4>";
echo "Username:" . $username . "<br>";
echo "Password:" . $password . "<br>";
echo "<table style = 'width: 100%; border: 1px solid black; text-align: center; margin: 0px auto;'> ";
echo "<tr>";
echo "<td> </td>";
echo "<th> Quantity </th>";
echo "<th> Cost Per Item </th>";
echo "<th> Sub Total </th>";
echo "</tr>";







 ?>
