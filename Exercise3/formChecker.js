username = document.getElementById("username").value;
password = document.getElementById("password").value;
madeon = document.getElementById("madeon").value;
daftpunk = document.getElementById("daftpunk").value;
frankocean = document.getElementById("frankocean").value;
freeshipping = document.getElementById("freeshipping");
threedayshipping = document.getElementById("threeday");
overnightshipping = document.getElementById("overnight");

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
  return false;
}
if(madeon == "")
{
  alert("Please Enter a Quantity for Madeon's Adventure");
  return false
}
if( daftpunk == "")
{
  alert("Please Enter a Quantity for Daft Punk's Random Access Memories");
  return false;
}
if(frankocean == "")
{
  alert("Please Enter a Quantity for Frank Ocean's Channel Orange");
  return false;
}
if(!freeshipping.checked && !threedayshipping.checked && !overnightshipping.checked )
{
  alert("Please select a shipping option");
  return false;
}

}
