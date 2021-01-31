<?php
echo '
<h1>Conditionals</h1>
<p>Create a simple condition that evaluates whether the current day is Monday. Only in the case that the condition is met, it shows a message of “We are on Monday”.</p>
<pre>
$currentDay = (new DateTime())->format(\'l\');
if ($currentDay === "Monday") {
    echo \'We are on Monday &lt;br&gt;&lt;br&gt;\';
}
</pre>';
$currentDay = (new DateTime())->format('l');
if ($currentDay === "Monday") {
    echo 'We are on Monday <br><br>';
}

echo '
<p>Create a simple condition that evaluates whether the current month is October. If the condition is met, it shows a message of the type "We are in October". Otherwise, if this condition is not met, show the current month in words as it come from DateTime.</p>
<pre>
$currentMonth = (new DateTime())->format(\'F\');
if ($currentMonth === "October") {
    echo \'We are in October &lt;br&gt;&lt;br&gt;\';
} else {
    echo $currentMonth . \'&lt;br&gt;&lt;br&gt;\';
}
</pre>';
$currentMonth = (new DateTime())->format('F');
if ($currentMonth === "October") {
    echo 'We are in October <br><br>';
} else {
    echo $currentMonth . '<br><br>';
}

echo '
<p>If the current minute is less than 10. Displays a message of type "the current minute is less than 10", if the current minute is greater than 15, displays a message of the type "the current minute is more than 15". If you do not meet any of the two conditions above: Displays a message of the type "does not meet any conditions”</p>
<pre>
$currentMinute = (new DateTime())->format(\'i\');
if ($currentMinute < 10) {
    echo \'The current minute is less than 10 &lt;br&gt;&lt;br&gt;\';
} elseif ($currentMinute > 15) {
    echo \'The current minute is more than 15 &lt;br&gt;&lt;br&gt;\';
} else {
    echo \'Does not meet any conditions &lt;br&gt;&lt;br&gt;\';
}
</pre>';
$currentMinute = (new DateTime())->format('i');
if ($currentMinute < 10) {
    echo 'The current minute is less than 10 <br><br>';
} elseif ($currentMinute > 15) {
    echo 'The current minute is more than 15 <br><br>';
} else {
    echo 'Does not meet any conditions <br><br>';
}

echo '
<p>Create a switch type control structure to display a different message depending on the current day of the week. You can write any type of message, because the important thing is that you understand how it works and in what cases you can use it.</p>
<pre>
$currentDay = (new DateTime())->format(\'l\');
switch ($currentDay) {
    case \'Monday\':
        echo \'We are on Monday\';
        break;
    case \'Tuesday\':
        echo \'We are on Tuesday\';
        break;
    case \'Wednesday\':
        echo \'We are on Wednesday\';
        break;
    case \'Thursday\':
        echo \'We are on Thursday\';
        break;
    case \'Friday\':
        echo \'We are on Friday\';
        break;
    case \'Saturday\':
        echo \'We are on Saturday\';
        break;
    default:
        echo \'Yay!!! It\\\'s Sunday.\';
}
</pre>
';
$currentDay = (new DateTime())->format('l');
switch ($currentDay) {
    case 'Monday':
        echo 'We are on Monday';
        break;
    case 'Tuesday':
        echo 'We are on Tuesday';
        break;
    case 'Wednesday':
        echo 'We are on Wednesday';
        break;
    case 'Thursday':
        echo 'We are on Thursday';
        break;
    case 'Friday':
        echo 'We are on Friday';
        break;
    case 'Saturday':
        echo 'We are on Saturday';
        break;
    default:
        echo 'Yay!!! It\'s Sunday.';
}