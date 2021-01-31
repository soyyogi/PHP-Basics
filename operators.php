<?php
echo '<h1>Operators</h1>
<h2>Arithmetic Operators</h2>';
echo '
<pre>
$x = 10;  
$y = 6;

echo $x + $y . \'&lt;br&gt;\';
echo $x - $y . \'&lt;br&gt;\';
echo $x * $y . \'&lt;br&gt;\';
echo $x / $y . \'&lt;br&gt;\';
echo $x % $y;
</pre>';
$x = 10;  
$y = 6;

echo $x + $y . '<br>';
echo $x - $y . '<br>';
echo $x * $y . '<br>';
echo $x / $y . '<br>';
echo $x % $y;

echo '<h2>Comparison Operators</h2>';
echo '
<pre>
$x = 100;  
$y = "100";

var_dump($x == $y); // returns true because values are equal
var_dump($x === $y); // returns false because types are not equal
var_dump($x != $y); // returns false because values are equal

$y = 50;
var_dump($x > $y); // returns true because $x is greater than

$x = 10;
var_dump($x < $y); // returns true because $x is less than $y

$x = 50;
var_dump($x >= $y); // returns true because $x is greater than or equal to $y
var_dump($x <= $y); // returns true because $x is less than or equal to $y
</pre>';
// $x = 100;  
// $y = "100";

// var_dump($x == $y); // returns true because values are equal
// var_dump($x === $y); // returns false because types are not equal
// var_dump($x != $y); // returns false because values are equal
// $y = 50;
// var_dump($x > $y); // returns true because $x is greater than
// $x = 10;
// var_dump($x < $y); // returns true because $x is less than $y
// $x = 50;
// var_dump($x >= $y); // returns true because $x is greater than or equal to $y
// var_dump($x <= $y); // returns true because $x is less than or equal to $y

echo '<h2>Logical Operators</h2>';
echo '
<pre>
$x = 100;  
$y = 50;
</pre>
<p>True if both are true</p>
<pre>
if ($x == 100 and $y == 50) {
    echo "Hello world!";
}
</pre>';
$x = 100;  
$y = 50;

if ($x == 100 and $y == 50) {
    echo "Hello world!";
}

echo '
<br><br>
<p>True if both are true</p>
<pre>
if ($x == 100 && $y == 50) {
    echo "Hello world!";
}
</pre>';
if ($x == 100 && $y == 50) {
    echo "Hello world!";
}

echo '
<br><br>
<p>True if either is true</p>
<pre>
if ($x == 100 or $y == 80) {
    echo "Hello world!";
}
</pre>';
if ($x == 100 or $y == 80) {
    echo "Hello world!";
}

echo '
<br><br>
<p>True if either is true</p>
<pre>
if ($x == 100 || $y == 80) {
    echo "Hello world!";
}
</pre>';
if ($x == 100 || $y == 80) {
    echo "Hello world!";
}

echo '
<br><br>
<p>True if it is not true</p>
<pre>
if ($x !== 90) {
    echo "Hello world!";
}
</pre>';
if ($x !== 90) {
    echo "Hello world!";
}

echo '
<br><br>
<p>True if either is true, but both not</p>
<pre>
if ($x == 100 xor $y == 80) {
    echo "Hello world!";
}
</pre>';
if ($x == 100 xor $y == 80) {
    echo "Hello world!";
}