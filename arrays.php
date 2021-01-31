<h4><a href="index.php">Return</a></h4>
<?php
echo '<h1>Arrays</h1>';
echo '
<h4>Define a simple array composed of text strings</h4>
<pre>
$array = ["Hello", "World"];
print_r($array);
</pre>
';

$array = ["Hello", "World"];
print_r($array);




echo '
<h4>Define a simple array consisting of whole numbers and decimal numbers</h4>
<pre>
$array = [1, 2, 3.3, 4.5];
print_r($array);
</pre>
';
$array = [1, 2, 3.3, 4.5];
print_r($array);




echo '
<h4>Define a multidimensional array</h4>
<pre>
$array = [[1, 2], [3.3, 4.5]];
print_r($array);
</pre>
';
$array = [[1, 2], [3.3, 4.5]];
print_r($array);



echo '
<h4>Execute the function that allows to obtain the length of an array</h4>
<pre>
$array = [1, 2, 3.3, 4.5];
echo count($array);
</pre>
';
$array = [1, 2, 3.3, 4.5];
echo count($array);





echo '
<h4>Execute the function that allows to obtain the combination of two arrays</h4>
<pre>
$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");

$c=array_combine($fname,$age);
print_r($c);
</pre>
';
$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");

$c=array_combine($fname,$age);
print_r($c);



echo '
<h4>Execute the function that once is given an array return the last element of it</h4>
<pre>
$people = array("Peter", "Joe", "Glenn", "Cleveland");
echo end($people);
</pre>
';
$people = array("Peter", "Joe", "Glenn", "Cleveland");
echo end($people);





echo '
<h4>Execute the function that once is given an array add a new element to the array in question</h4>
<pre>
$people = array("Peter", "Joe", "Glenn", "Cleveland");
array_push($people, "Pumba");
print_r($people);
</pre>
';
$people = array("Peter", "Joe", "Glenn", "Cleveland");
array_push($people, "Pumba");
print_r($people);
