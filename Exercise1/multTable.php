<?php
function mult($x, $y) {
    $z = $x * $y;
    return $z;
}
echo "<table>";

for($i = 1; $i<= 100; $i++)
{
  echo"<tr>";
  for($j = 1; $j<=100; $j++)
  {
    echo"<td>" . mult($i,$j) . "</td>";
  }
  echo"</tr>";
}
echo"</table>";



 ?>
