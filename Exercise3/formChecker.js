var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
var madeon = document.getElementById("madeon").value;
var daftpunk = document.getElementById("daftpunk").value;
var frankocean = document.getElementById("frankocean").value;
var freeshipping = document.getElementById("freeshipping");
var threedayshipping = document.getElementById("threeday");
var overnightshipping = document.getElementById("overnight");

function checkForm()
{
if(username.length == 0) //email verified by using email type
{
  alert("Invalid Username. Please enter an email as your user name.");
  return false;
}
if(password.length == 0)
{
  alert("Please enter a password");
  event.preventDefault();
  return false;
}
if(madeon == "")
{
  alert("Please Enter a Quantity for Madeon's Adventure");
    event.preventDefault();
  return false
}
if( daftpunk == "")
{
  alert("Please Enter a Quantity for Daft Punk's Random Access Memories");
    event.preventDefault();
  return false;
}
if(frankocean == "")
{
  alert("Please Enter a Quantity for Frank Ocean's Channel Orange");
    event.preventDefault();
  return false;
}
if(!freeshipping.checked && !threedayshipping.checked && !overnightshipping.checked )
{
  alert("Please select a shipping option");
    event.preventDefault();
  return false;
}
return true;
}
