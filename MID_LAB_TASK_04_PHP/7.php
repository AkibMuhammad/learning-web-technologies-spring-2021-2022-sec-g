<?php

for($i=0;$i<3;$i++)
{
for($j=0;$j<=$i;$j++)
{
echo "*";
}
echo "<br>";
}
echo "<br>";

for($l=3;$l>=1;$l--)
{
for($m=1;$m<=$l;$m++)
{
echo $m;
}
echo "<br>";
}
echo "<br>";

$array=["1st"=>"A", "2nd"=>"B C", "3rd"=>"D E F"];
foreach ($array as $A=>$B)
{
echo $B."<br>";
}

?>
