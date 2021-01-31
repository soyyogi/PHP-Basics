<h4><a href="index.php">Return</a></h4>
<?php
echo '
<h1>Print commands</h1>
<h3>Use of echo command</h3>
<pre>
echo \'some text here\';
</pre>
';

print '
<h3>Use of print command</h3>
<pre>
print \'some text here\';
</pre>
';

echo '
<h3>Use of print_r function</h3>
<p>The print_r() function prints the information about a variable in a more human-readable way.</p>
<pre>
print_r(variable, return);
</pre>
<ul>
<li><i>variable</i>: Required. Specifies the variable to return information about</li>
<li><i>return</i>: Optional. When set to true, this function will return the information (not print it). Default is false</li>
<li><b>Return Value</b>: If variable is integer, float, or string, the value itself will be printed. If variable is array or object, this function returns keys and elements. If the return parameter is set to TRUE, this function returns a string</li>
</ul>
<br>
<pre>
$b = ["Peter"=>"35", "Ben"=>"37", "Joe"=>"43"];
print_r($b);
</pre>
';
$b = ["Peter"=>"35", "Ben"=>"37", "Joe"=>"43"];
print_r($b);