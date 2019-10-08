<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
$answer1 = $_POST["answer1"];
$answer2 = $_POST["answer2"];
$answer3 = $_POST["answer3"];
$answer4 = $_POST["answer4"];
$answer5 = $_POST["answer5"];


$numbercorrect = 0;
if($answer1 == "NewYork")
{
  $numbercorrect++;
}
if($answer2 == "KanyeWestKidCudi")
{
  $numbercorrect++;
}
if($answer3 == "McChicken")
{
  $numbercorrect++;
}
if($answer4 == "Genji")
{
  $numbercorrect++;
}
if($answer5 == "BillSelf")
{
  $numbercorrect++;
}

$percentcorrect = ($numbercorrect/5) *100;

echo "<br><h4> 1. Where is New York City?</h4>";
echo "You answered:" . $answer1 . "<br>";
echo "Correct answer: New York <br>";

echo "<br><h4> 2. Who is KIDS SEE GHOSTS</h4>";
echo "You answered:" . $answer2 . "<br>";
echo "Correct answer: Kanye West & Kid Cudi <br>";

echo "<br><h4> 3. What Item Is On The Dollar Menu At McDonalds?</h4>";
echo "You answered:" . $answer3 . "<br>";
echo "Correct answer: McChicken <br>";

echo "<br><h4> 4. Who Says I NEED HEALING In the Video Game, Overwatch</h4>";
echo "You answered:" . $answer4 . "<br>";
echo "Correct answer: Genji <br>";

echo "<br><h4> 5. Who Is The Coach of the KU Men's Basketball Team?</h4>";
echo "You answered:" . $answer5 . "<br>";
echo "Correct answer: Bill Self <br>";

echo"You got " . $numbercorrect . "/5 or ". $percentcorrect . "% Correct <br>";


 ?>
