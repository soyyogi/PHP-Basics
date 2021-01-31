<?php
echo '<h1>Functions</h1>';
echo '
<h4>It generates a function that given two numbers returns the sum of both</h4>
<pre>
function sum($a,$b) {
    return $a + $b;
}
echo sum(2,3);
</pre>
';
function sum($a,$b) {
    return $a + $b;
}
echo sum(2,3);

echo '
<h4>It generates a function that given two numbers returns the multiplication of both</h4>
<pre>
function times($a,$b) {
    return $a * $b;
}
echo times(2,3);
</pre>
';
function times($a,$b) {
    return $a * $b;
}
echo times(2,3);



echo '
<h4>It generates a function that given two numbers returns the division of both</h4>
<pre>
function part($a,$b) {
    return $a / $b;
}
echo part(6,3);
</pre>
';
function part($a,$b) {
    return $a / $b;
}
echo part(6,3);


echo '
<h4>It generates a function that, given two numbers and an operation (add, multiply or divide), returns the result of that operation.</h4>
<p>Depending on the type of operation received by parameter, the function will execute the function responsible for performing the operation, since you have previously implemented the function for each operation separately.</p>
<pre>
function selectOp($a,$b,$op) {
    switch ($op) {
        case "+":
            return sum($a,$b);
            break;
        case "*":
            return times($a,$b);
            break;
        case "/":
            return part($a,$b);
            break;
        default:
            echo "unknown operator";
    }
}
echo selectOp(2,3,"*");
</pre>
';
function selectOp($a,$b,$op) {
    switch ($op) {
        case "+":
            return sum($a,$b);
            break;
        case "*":
            return times($a,$b);
            break;
        case "/":
            return part($a,$b);
            break;
        default:
            echo "unknown operator";
    }
}
echo selectOp(2,3,"*");