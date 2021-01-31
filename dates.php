<?php
echo '
<h1>DateTime</h1>
<p>Instance the Date Time class and then invoke the format method with the argument “Y-m-d” to show year-month-day</p>
<pre>
$date = new DateTime();
echo $date->format(\'Y-m-d\') . \'&lt;br&gt;\';
</pre>';
$date = new DateTime();
echo $date->format('Y-m-d') . '<br><br>';

echo '
<p>Get the current day</p>
<pre>
echo $date->format(\'D\') . \'&lt;br&gt;\';
</pre>';
echo $date->format('D') . '<br><br>';

echo '
<p>Get the current month in numerical format (1-12)</p>
<pre>
echo $date->format(\'m\') . \'&lt;br&gt;\';
</pre>';
echo $date->format('m') . '<br><br>';

echo '
<p>Get the current minute with leading zeros (00 - 59)</p>
<pre>
echo $date->format(\'i\') . \'&lt;br&gt;\';
</pre>';
echo $date->format('i') . '<br><br>';