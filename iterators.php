<h4><a href="index.php">Return</a></h4>
<?php
echo '<h1>Iterators</h1>';
echo '
<h4>The for loop is used when you know in advance how many times the script should run.</h4>
<pre>
for (<i>init counter; test counter; increment counter) {
    code to be executed for each iteration</i>;
}
</pre>
<h5>Example</h5>
<pre>
for ($x = 0; $x <= 5; $x++) {
    echo "The number is: $x &lt;br&gt;";
}
</pre>
';
for ($x = 0; $x <= 5; $x++) {
    echo "The number is: $x <br>";
}

echo '
<h4>The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.</h4>
<pre>
foreach (<i>$array as $value) {
    code to be executed</i>;
}
</pre>
<h5>Example</h5>
<pre>
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo "$value &lt;br&gt;";
}
</pre>
';
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo "$value <br>";
}

echo '
<h5>Example</h5>
<pre>
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
    echo "$x = $val &lt;br&gt;";
}
</pre>
';
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

foreach ($age as $x => $val) {
    echo "$x = $val<br>";
}

echo '
<h4>The while loop executes a block of code as long as the specified condition is true.</h4>
<pre>
while (<i>condition is true) {
    code to be executed</i>;
}
</pre>
<h5>Example</h5>
<pre>
$x = 1;

while($x <= 5) {
    echo "The number is: $x &lt;br&gt;";
    $x++;
}
</pre>
';
$x = 1;

while ($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
}

echo '
<h4>The do...while loop will always execute the block of code once, it will then check the condition, and repeat the loop while the specified condition is true.</h4>
<pre>
do {
    <i>code to be executed</i>;
  } while (<i>condition is true</i>);
</pre>
<h5>Example</h5>
<pre>
$x = 1;

do {
    echo "The number is: $x &lt;br&gt;";
    $x++;
} while ($x <= 5);
</pre>
';
$x = 1;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);
