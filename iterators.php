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
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x &lt;br&gt;";
}
</pre>
';
for ($x = 0; $x <= 10; $x++) {
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
