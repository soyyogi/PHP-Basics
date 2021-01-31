<h4><a href="index.php">Return</a></h4>
<?php
echo '<h1>String</h1>';
echo '
<h4>Print a text string</h4>
<pre>
echo "Hello World!!!";
</pre>
';
echo "Hello World!!!";


echo '
<h4>Print a text string that interpret variables</h4>
<pre>
$name = "Pumba";
echo "Hello $name!!!";
</pre>
';
$name = "Pumba";
echo "Hello $name!!!";



echo '
<h4>Concatenate a previously declared variable in a text string</h4>
<pre>
$name = "Pumba";
echo "Hello there! " . $name;
</pre>
';
$name = "Pumba";
echo "Hello there! " . $name;




echo '
<h4>Execute the function that allows you to replace text in a string (case sensitive)</h4>
<pre>
echo str_replace("world", "Pumba", "Hello world!");;
</pre>
';
echo str_replace("world", "Pumba", "Hello world!");;



echo '
<h4>Execute the function that allows you to replace text in a string (without taking into account upper / lower case)</h4>
<pre>
echo str_ireplace("WORLD","Pumba","Hello world!");
</pre>
';
echo str_ireplace("WORLD","Pumba","Hello world!");



echo '
<h4>Execute the function that allows you to write a text N times</h4>
<pre>
echo str_repeat("Wow &lt;br&gt;",3);
</pre>
';
echo str_repeat("Wow <br>",3);




echo '
<h4>Execute the function that allows to obtain the length of a text string</h4>
<pre>
echo strlen("Hello");
</pre>
';
echo strlen("Hello");




echo '
<h4>Executes the function that allows to obtain the position of the first occurrence of a text within a text string</h4>
<pre>
echo strstr("Hello world!","world");
</pre>
';
echo strstr("Hello world!","world");




echo '
<h4>Execute the function that allows a text string to be capitalized</h4>
<pre>
echo ucwords("hello world!");
</pre>
';
echo ucwords("hello world!");



echo '
<h4>Execute the function that allows you to transform a text string to lowercase</h4>
<pre>
echo strtolower("HEllo World!");
</pre>
';
echo strtolower("HEllo World!");


echo '
<h4>Execute the function that allows to obtain a text substring from the position</h4>
<pre>
echo substr("Hello world",6);
</pre>
';
echo substr("Hello world",6);