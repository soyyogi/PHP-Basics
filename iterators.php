<?php
echo '<h1>Iterators</h1>';
echo '
<pre>
<h4>The for loop is used when you know in advance how many times the script should run.</h4>
for (<i>init counter; test counter; increment counter) {
    code to be executed for each iteration</i>;
}

for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x &lt;br&gt;";
}
</pre>
';
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}
