<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title>Testing Area for ideas and playing</title>
  </head>
  <body>
    <?php

    $a = 0666;
    echo is_int($a) . "<br />";
    echo $a . "<br />";
    echo (int) ((0.7 + 0.1) * 10) . "<br />";
    $b = 1.2e5;
    echo is_float($b) . "<br />";
    echo $b . "<br />";
    $c = "foo";
    $$c = "Hello";
    echo $foo . "<br />";
    $d = "123";
    $$d = "Number";
    echo ${'123'} . "<br />";
    // bitwise operators - use of units/tens/hundreds/thousands is to assist recall. 
    // The binary equivalent of these would probably be ones/twos/fours/eights.
    // 1 is equivalent to set and 0 is equivalent to unset.
    $e = 12;
    $f = 7;
    $g = $e & $f; // 100 (4 in decimal) based on 1100 and 111 (the units/tens/thousands become 0 because they aren't 1 in both numbers & hundreds stay as 1 because they are 1 in both numbers). 
    $h = $e | $f; // 1111 (15 in decimal) based on 1100 and 111 (the units/tens/thousands become 1 because they are 1 in either of the numbers & hundreds stay as 1 because they are 1 in both numbers).
    $i = $e ^ $f; // 1011 (11 in decimal) based on 1100 and 111 (the units/tens/thousands become 1 because they are 1 in either of the numbers & hundreds become 0 because they are 1 in both numbers).
    echo $g . ", " . $h . ", " . $i . ".<br />";
    echo $e << 3; // 1100000 based on 1100 (this is vaguely similar to multiplying by 1000 in decimal in that the end of the number has three more 0s. But for a large enough number the 1s could disappear, and there is also no decimal point.
    echo "<br />"; // This is here because it won't work as echo $e << 3 . "<br />"; because we're not using strings;
    echo $f >> 1; // 11 based on 111 (this is vaguely similar to dividing by 10 in decimal in that the start of the number has moved once to the right resulting in one less 1. But there is also no decimal point so any number smaller than 1 becomes 0.
    echo "<br />"; // This is here because it won't work as echo $f >> 1 . "<br />"; because we're not using strings;
    echo ~$e; // This switches zeros to ones and vice versa. The far right zero becoming 1 represents a minus number (this number is a signed number - unsigned numbers don't have a number to represent positive or negative - all numbers are positive), with all the other bits representing the number to add on to said minus number. So, if this were an 8 bit system 12 would become -128 + 115 (or -13)   
    echo "<br />"; // This is here because it won't work as echo ~$e . "<br />"; because we're not using strings;
    $k = 6;
    echo ~$k;
    echo "<br />"; // This is here because it won't work as echo ~$k . "<br />"; because we're not using strings;
    $l = 1;
    $m = $l; // $n is assigned the value of $l. If $n changes, $l doesn't change.
    $n = &$l; // $n refers to $l. If $n changes, $l changes. All objects are assigned like this (by reference).
    $j = 5;
    $j ^= $l; // This assigns the value of $j ^ $l to $j
    echo "$j<br />"; // 100 (4 in decimal) based on 101 and 1 (the hundreds become 1 because they are 1 in either of the numbers & tens/units become 0 because they are 1 or 0 in both numbers).
    $o = 0;
    while ($o < 5) {
        echo $o . ", ";
        $o++;
    }
    // The above can be re-written as a for loop - as per below
    for ($p= 0; $p < 5; $p++) {
        echo $p . ", ";
    }
    echo "<br />$o<br />";
    $p = 5;
    do {
        echo $p . ", "; // Echos once even though the while condition is false.
        $p++;
    } while ($p < 5);
    echo "<br />$p<br />";
    // Demonstrating the use of continue and break in loops
    for ($q = 0; $q < 15; $q++) {
        if($q == 6) {
            continue;
        } 
        echo $q . ', ';
        if($q == 13) {
            echo "<br />";
            break;
        }
    }
    
    ?>
     <a href="http://theweatherlottery.com/charitiesHomepagePlay.php?client=LDGNL"><img alt="Play the Newcastle upon Tyne Liberal Democrats Lottery" src="http://theweatherlottery.com/mbanner/TWLBanner628x282.php" width="628"></a>
  </body>
</html>
